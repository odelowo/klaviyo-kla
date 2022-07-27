<?php

$pageTitle = 'Dashboard'; //used to identify page title
$menuItemSelected = ''; //used to identify which menu item is preselected
$journey = "Complete Survey"; //journey used for analytics purposes
$journeyStep = "Complete Survey"; //journey step used to identify drop off in journey

//used to add additional page view attributes
$pageview_attr = [];

require_once '../users/init.php';

function numhash2($n) { //encode/decode 32-bit int //declared once again as header not yet called
    return (((0x0000FFFF & $n) << 16) + ((0xFFFF0000 & $n) >> 16));
}

if (!$user->isLoggedIn()) { //if not already logged in, redirect
    Redirect::to($us_url_root.'register.php');
}

if ( !empty($_POST) ) {
  $quizid = numhash2($_POST["q"]);


  $rowQ = $db->query("SELECT id, answer1 FROM questions WHERE quizid = ? ", [$quizid]);
  $answers = [];
  $score = 0;
  $total = 0;
  foreach ($db->results() as $answer){
    //NOT ADDING TO A PHYSICAL TABLE DUE TO TIME CONSTAINTS FOR DELIVERY

    if($answer->answer1 == $_POST["answer"][$total])
      $score++;

    $total++;

 }


 echo "you scored ".$score." out of ". $total;



 //alert the owner of the quiz
 $notify = new Notification(); //initialise Notifications
 $cta = "#";
 $rowQ = $db->query("SELECT userid, name, description FROM quiz WHERE id = ? ", [$quizid]); //get userid
 $row = $rowQ->first();

 $quizOwnerId = $row->userid;
 $quizName = $row->name;
 $quizDesc = $row->description;



 $message = $user->data()->fname." has completed your ".$quizName." quiz!";

 $notify->addNotification($message, $quizOwnerId, $cta);

 //send email to the owner of the quiz
 $rowQ = $db->query("SELECT fname, lname, email FROM users WHERE id = ? ", [$quizOwnerId]); //get the user's name
 $row = $rowQ->first();

 $quizOwnerFname = $row->fname;
 $quizOwnerLname = $row->lname;
 $quizOwnerEmail = $row->email;

 $call = new Klaviyo(); //initialise klaviyo class

 //trigger Klaviyo message to user
 $properties = array(
   array("quiz", $quizName),
   array("desc", $quizDesc),
   array("firstname", $user->data()->fname),
   array("lastname", $user->data()->lname),
   array("score", $score),
   array("total", $total),
 );

 $customer = array(
   array("email",$quizOwnerEmail),
   array("first_name",$quizOwnerFname),
   array("last_name",$quizOwnerLname),
 );

 $event = "Somebody Completed Your Quiz";
 $call->trackProfileActivity($customer, $properties, $event);


 //trigger Klaviyo message to the person who filled out the survey
 $properties = array(
   array("quiz", $quizName),
   array("desc", $quizDesc),
   array("firstname", $quizOwnerFname),
   array("lastname", $quizOwnerLname),
   array("score", $score),
   array("total", $total),
 );

 $customer = array(
   array("first_name",$user->data()->fname),
   array("last_name",$user->data()->lname),
   array("email",$user->data()->email),

 );

 $event = "You Have Completed A Quiz";
 $call->trackProfileActivity($customer, $properties, $event);

 //redirect to thank you page
}


ini_set('display_errors',1);
ini_set('log_errors',1);
ini_set('error_log',dirname(__FILE__).'/log.txt');
error_reporting(E_ALL);

$quizId = numhash2($_GET['id']);

//return quiz information
$rowQ = $db->query("SELECT name, description, status, userid FROM quiz WHERE id = ? ", [$quizId]);
$row = $rowQ->first();

$quizName = $row->name;
$quizDesc = $row->description;
$quizStatus = $row->status;
$quizOwnerId = $row->userid;

$title = $row->name; //used to identify user friendly in-page title
require_once('includes/header.php');
?>

     <div class="ObjectivesTab__Container-sc-1el61mo-0 coNUBW">
        <div class="ObjectivesTab__DashboardContainer-sc-1el61mo-1 khhmlX">
           <div class="Box__StyledBox-sc-16nrscc-0 izgCeZ HeroCardWrapper__StyledBox-sc-1monayj-1 hiaYEj">
             <span class="TextStyleTemplate-sc-1jbnw9u-0 crhGTk Title__StyledBody-sc-1bx2dve-1 NdxIz"><?php echo $quizDesc; ?></span>
             <form method="post">
               <?php

                 //return owner id
                 $rowQ = $db->query("SELECT fname, lname FROM users WHERE id = ? ", [$quizOwnerId]);
                 $row = $rowQ->first();

                 $quizOwnerFname = $row->fname;
                 $quizOwnerLname = $row->lname;

                 //return quiz questions
                 $rowQ = $db->query("SELECT id, question, answer1, answer2, answer3, answer4 FROM questions WHERE quizid = ? ", [$quizId]);

                 $html = '<div class="Box__StyledBox-sc-16nrscc-0 bZntlp"><span class="TextStyleTemplate-sc-1jbnw9u-0 iQtoNF">'.$quizName.' (by '.$quizOwnerFname.' '.$quizOwnerLname.')</span></div>';
                 $questionNum = 1;
                 $ques = [];
                 foreach ($db->results() as $question){
                   $html .= '<div class="Box__StyledBox-sc-16nrscc-0 giItA-D"><span class="TextStyleTemplate-sc-1jbnw9u-0 fhHHqE">'.$questionNum.'. '.$question->question.'</span></div>';

                   $ques = array($question->answer1, $question->answer2, $question->answer3, $question->answer4); //save answers to an array
                   sort($ques);

                   $html .= '<select name="answer[]" id="q'.$questionNum.'" style=" width:100%;"> \n';
                   $html .= '<option value="" disabled selected>What\'s your answer?</option>';

                    for($x = 0; $x < 4; $x++) {
                      $html .= "<option value='".$ques[$x]."'>".$ques[$x]."</option>\n";
                    }

                    $html .= "</select>";
                    $questionNum++;
                 }

                 $html .= '<input type="hidden" id="q" name="q" value="'.$_GET['id'].'">';

                 echo $html;
               ?>
                <div class="checkbox-controls">
                  <button class="submit-button" type="submit">Complete <?php echo $quizName;?> Quiz</button>
                </div>
             </form>
           </div>
        </div>
     </div>
 <?php
 require_once('includes/footer.php');
 ?>
