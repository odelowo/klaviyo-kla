<?php

require_once '../users/init.php'; //require initialisation script to access $db

function numhash2($n) { //encode/decode 32-bit int //declared once again as header not yet called
    return (((0x0000FFFF & $n) << 16) + ((0xFFFF0000 & $n) >> 16));
}
//validate quizid
$quizid = numhash2($_GET["q"]);

$rowQ = $db->query("SELECT name, description FROM quiz WHERE id = ? AND userid = ?", [$quizid, $user->data()->id]);
$rowC = $rowQ->count();

if($rowC == 1){
  $row = $rowQ->first();
  $quizName = $row->name;
  $quizDesc = $row->description;

}else{ //couldn't find at least 1 valid question
  Redirect::to('create-quiz.php?err=Unrecognised%20quiz%20&source='.$_SERVER['REQUEST_URI']);
}

$title = $quizName; //used to identify user friendly in-page title
$pageTitle = 'Create Quiz'; //used to identify page title
$menuItemSelected = 'create-quiz'; //used to identify which menu item is preselected
$journey = "Create Quiz"; //journey used for analytics purposes
$journeyStep = "Step 3 - Set Answers"; //journey step used to identify drop off in journey
$pageview_attr = [];


require_once('includes/header.php');

ini_set('display_errors',1);
ini_set('log_errors',1);
ini_set('error_log',dirname(__FILE__).'/log.txt');
error_reporting(E_ALL);

if ( !empty($_POST) ) {

  //no validation, simply save results - risk although for the purposes of time, will be left out
  //relying on front end validation for string length only

  $quizid = numhash($_POST["q"]);
  $rowQ = $db->query("SELECT id FROM questions WHERE quizid = ? ORDER BY id ASC", [$quizid]);
  $position = 0;

  foreach ($db->results() as $question){ //loop through questions

    $db->update("questions", $question->id, ["answer1"=>$_POST['answer0'][$position], "answer2"=>$_POST['answer1'][$position], "answer3"=>$_POST['answer2'][$position], "answer4"=>$_POST['answer3'][$position]]);
    $position++;
  }



  $dest = "edit-question.php?q=".$_POST['q'].'&new=1';
  Redirect::to($dest);
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
           <div class="Box__StyledBox-sc-16nrscc-0 izgCeZ HeroCardWrapper__StyledBox-sc-1monayj-1 hiaYEj" style="position: relative; display: block;">
             <div style="width:100%;"><span class="TextStyleTemplate-sc-1jbnw9u-0 crhGTk Title__StyledBody-sc-1bx2dve-1 NdxIz"><?php echo $quizDesc; ?></span></div>
             <div style="width: 100%;vertical-align: bottom;clear: both;">
             <form method="post">
               <?php

                // $html = '<div class="Box__StyledBox-sc-16nrscc-0 bZntlp"><span class="TextStyleTemplate-sc-1jbnw9u-0 iQtoNF">'.$quizDesc.'</span></div>';
                $pos = 0; //used to dynamically assign answer ids
                $questionNum = 1;

                $rowQ = $db->query("SELECT id, question FROM questions WHERE quizid = ?", [$quizid]);
                foreach ($db->results() as $question){
                  $html .= '<div class="Box__StyledBox-sc-16nrscc-0 giItA-D"><span class="TextStyleTemplate-sc-1jbnw9u-0 fhHHqE">'.$questionNum.'. '.$question->question.'</span></div>';
                  $html .= '<label for="answer_'.$pos.'_1_'.$question->id.'">Correct Answer</label>';
                  $html .= '<input type="text" placeholder="Enter Correct Answer here" class="correct" id="answer_'.$pos.'_1_'.$question->id.'" name="answer0[]" min="2" max="60">';

                  $html .= '<label for="answer_'.$pos.'_2">Incorrect Answer</label>';
                  $html .= '<input type="text" placeholder="Enter Wrong Answer here" id="answer_'.$pos.'_2_'.$question->id.'" name="answer1[]" min="2" max="60">';

                  $html .= '<label for="answer_'.$pos.'_3">Incorrect Answer</label>';
                  $html .= '<input type="text" placeholder="Enter Wrong Answer here" id="answer_'.$pos.'_3_'.$question->id.'" name="answer2[]" min="2" max="60">';

                  $html .= '<label for="answer_'.$pos.'_4">Incorrect Answer</label>';
                  $html .= '<input type="text" placeholder="Enter Wrong Answer here" id="answer_'.$pos.'_4_'.$question->id.'" name="answer3[]" min="2" max="60">';

                  $html .= "<br></br><br>";

                  $pos++;
                  $questionNum++;
                }
                 $html .= '<input type="hidden" id="q" name="q" value="'.$_GET["q"].'">';
                 echo $html;

               ?>
               <div class="checkbox-controls">
                  <button class="submit-button" type="submit">Complete <?php echo $quizName;?> Quiz</button>
                </div>
            </form>
          </div>
           </div>
        </div>
     </div>

 <?php
 require_once('includes/footer.php');
 ?>
