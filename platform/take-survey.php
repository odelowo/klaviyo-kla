<?php
$title = 'Survey'; //used to identify user friendly in-page title
$pageTitle = 'Dashboard'; //used to identify page title
$menuItemSelected = ''; //used to identify which menu item is preselected
$journey = "Complete Survey"; //journey used for analytics purposes
$journeyStep = "Complete Survey"; //journey step used to identify drop off in journey

//used to add additional page view attributes
$pageview_attr = [];

require_once '../users/init.php';

if (!$user->isLoggedIn()) { //if not already logged in, redirect
    Redirect::to($us_url_root.'register.php');
}

require_once('includes/header.php');



ini_set('display_errors',1);
ini_set('log_errors',1);
ini_set('error_log',dirname(__FILE__).'/log.txt');
error_reporting(E_ALL);

$quizId = numhash($_GET['id']);

//return quiz information
$rowQ = $db->query("SELECT name, description, status, userid FROM quiz WHERE id = ? ", [$quizId]);
$row = $rowQ->first();

$quizName = $row->name;
$quizDesc = $row->description;
$quizStatus = $row->status;
$quizOwnerId = $row->userid;

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
