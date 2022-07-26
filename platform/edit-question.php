<?php

require_once '../users/init.php'; //require initialisation script to access $db


function numhash2($n) { //encode/decode 32-bit int //declared once again as header not yet called
    return (((0x0000FFFF & $n) << 16) + ((0xFFFF0000 & $n) >> 16));
}

if(isset($_GET['new'])){
  $pageTitle = 'Create Quiz'; //used to identify page title
  $menuItemSelected = 'create-quiz'; //used to identify which menu item is preselected
  $journey = "Create Quiz"; //journey used for analytics purposes
  $journeyStep = "Step 4 - Publish";
}
else {
  $title = 'View Results'; //used to identify user friendly in-page title
  $pageTitle = 'View Results'; //used to identify page title
  $menuItemSelected = 'view-results'; //used to identify which menu item is preselected
  $journey = "View Results"; //journey used for analytics purposes
  $journeyStep = "Step 2 - Edit Quiz";
}

$pageview_attr = [];


//validate quizid
$quizid = numhash2($_GET["q"]);

$rowQ = $db->query("SELECT name, description, responses, status, timestamp FROM quiz WHERE id = ? AND userid = ?", [$quizid, $user->data()->id]);
$rowC = $rowQ->count();

if($rowC == 1){
  $row = $rowQ->first();
  $quizName = $row->name;
  $quizDesc = $row->description;
  $responses = $row->responses ?? 0;
  $status = $row->status;
  $timestamp = $row->timestamp;


}else{ //couldn't find at least 1 valid question
  Redirect::to('index.php?err=Unrecognised%20quiz%20&source='.$_SERVER['REQUEST_URI']);
}

$title = $quizName; //used to identify user friendly in-page title
require_once('includes/header.php');


ini_set('display_errors',1);
ini_set('log_errors',1);
ini_set('error_log',dirname(__FILE__).'/log.txt');
error_reporting(E_ALL);

if ( !empty($_POST) ) {

  $quizid = numhash($_POST["q"]);
  $db->update("quiz", $quizid, ["status"=>$_POST['status']]);

  $dest = "edit-question?q=".$_POST['q'].'&updated=1';
  Redirect::to($dest);

  //no validation, simply save results - risk although for the purposes of time, will be left out
  //relying on front end validation for string length only
  //
  // $quizid = numhash($_POST["q"]);
  // $rowQ = $db->query("SELECT id FROM questions WHERE quizid = ? ORDER BY id ASC", [$quizid]);
  // $position = 0;
  //
  // foreach ($db->results() as $question){ //loop through questions
  //
  //   $db->update("questions", $question->id, ["answer1"=>$_POST['answer0'][$position], "answer2"=>$_POST['answer1'][$position], "answer3"=>$_POST['answer2'][$position], "answer4"=>$_POST['answer3'][$position]]);
  //   $position++;
  // }
  //
  //
  //
  // $dest = "edit-question?q=".$_POST['q'];
  // Redirect::to($dest);
}
//save questions into questions table - id, question, 4 answers



?>
<style>
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

.correct {
  border: 2px solid green;
  border-radius: 4px;
}
</style>
     <div class="ObjectivesTab__Container-sc-1el61mo-0 coNUBW">
        <div class="ObjectivesTab__DashboardContainer-sc-1el61mo-1 khhmlX">
           <div class="Box__StyledBox-sc-16nrscc-0 izgCeZ HeroCardWrapper__StyledBox-sc-1monayj-1 hiaYEj">
             <span class="TextStyleTemplate-sc-1jbnw9u-0 crhGTk Title__StyledBody-sc-1bx2dve-1 NdxIz"><?php echo $quizDesc; ?></span>
             <?php if (isset($_GET['updated'])){ echo '<div class="alert alert-success" id="email-changed-alert"><div class="alert-icon"><i class="kl check-circle" style="vertical-align: top"></i></div><div class="alert-message"><b>Status Updated</b><br/>Your quiz has succesfully had its status updated.</div></div>';} ?>
             <form method="post">
               <div class="details">
                 <div class="summary_container">
                   <div class="revenue_summaries">
                     <div class="total"> Name:
                       <strong><?php echo $quizName; ?></strong>
                     </div>
                     <div class="from_email">Current Status:
                       <strong><?php echo $status; ?></strong>
                     </div>
                     <div class="from_flows">Created:
                       <strong><?php echo $timestamp; ?></strong>
                     </div>
                     <div class="from_campaigns">Responses:
                       <strong><?php echo $responses; ?></strong>
                    </div>
                    <div class="per_recipient">Update Status:

                        <?php
                          $html = "";
                          $html .= '<select name="updateStatus" id="updateStatus" onchange="this.form.submit()>\n';
                          if($status == "Draft"){
                            $html .= "<option value='Draft' disabled>Draft</option>\n";
                            $html .= "<option value='Live'>Live</option>\n";
                            $html .= "<option value='Close'>Close</option>\n";
                          }
                          else if ($status == "Live"){
                            $html .= "<option value='Draft'>Draft</option>\n";
                            $html .= "<option value='Live' disabled>Live</option>\n";
                            $html .= "<option value='Close'>Close</option>\n";
                          }
                          else { //close
                            $html .= "<option value='Draft' disabled>Draft</option>\n";
                            $html .= "<option value='Live'>Live</option>\n";
                            $html .= "<option value='Close' disabled>Close</option>";
                          }
                          $html .= "</select>";

                          echo $html;

                          $html = '<input type="hidden" id="q" name="q" value="'.$_GET["q"].'">';

                          echo $html;
                        ?>

                    </div>
                  </div>
                </div>
              </div>


            </form>
            <?php if (isset($_GET['updated'])){ echo 'Check out your personalised link for this quiz - <strong>https://thatspurple.com/klaviyo-kla/platform/take-survey.php?id='.$_GET['q'].'</strong>.';} ?>

           </div>
        </div>
     </div>

 <?php
 require_once('includes/footer.php');
 ?>
