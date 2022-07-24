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

//used further down in building form
$stmt = $db->query("SELECT id, question FROM questions WHERE quizid = ?", [$quizid]);
$stmt->execute();
$stmt->bind_result($id, $question);

require_once('includes/header.php');

ini_set('display_errors',1);
ini_set('log_errors',1);
ini_set('error_log',dirname(__FILE__).'/log.txt');
error_reporting(E_ALL);

if ( !empty($_POST) ) {

  //save logic - tbd

  $quizid = numhash($_GET["q"]);
  foreach ($_POST['question'] as &$question) {

    $db->insert("questions", ["question"=>$question, "quizid"=>$quizid]);
  }

  $dest = "set-answers.php?q=".$_POST['q'];
  Redirect::to($dest);
}
//save questions into questions table - id, question, 4 answers



?>
<script>
//add row button logic
var rowNum = 0; //initialise to 0

function addRow(frm) { //on add row click
  rowNum ++; //increment by 1
  var row = '<div class="form-group" id="rowNum'+rowNum+'"><div class="controls"><input type="text" class="form-control" name="question[]" placeholder="Question"  value="'+frm.add_question.value+'"/> <input type="button" value="Remove" onclick="removeRow('+rowNum+');"></div></div>';


  jQuery('#itemRows').append(row); //append above code to the bottom
  frm.add_question.value = ''; //reset question to ""
}

function removeRow(rnum) { //remove row
  jQuery('#rowNum'+rnum).remove();
}

</script>
     <div class="ObjectivesTab__Container-sc-1el61mo-0 coNUBW">
        <div class="ObjectivesTab__DashboardContainer-sc-1el61mo-1 khhmlX">
           <div class="Box__StyledBox-sc-16nrscc-0 izgCeZ HeroCardWrapper__StyledBox-sc-1monayj-1 hiaYEj">
             <span class="TextStyleTemplate-sc-1jbnw9u-0 crhGTk Title__StyledBody-sc-1bx2dve-1 NdxIz"><?php echo $quizDesc; ?></span>
             <form method="post">
               <?php

                $html = '<div class="Box__StyledBox-sc-16nrscc-0 bZntlp"><span class="TextStyleTemplate-sc-1jbnw9u-0 iQtoNF">'.$quizDesc.'</span></div>';
                $pos = 0; //used to dynamically assign answer ids

                 while ($stmt->fetch())
               	{
                  $html .= '<div class="Box__StyledBox-sc-16nrscc-0 giItA-D"><span class="TextStyleTemplate-sc-1jbnw9u-0 fhHHqE">'.$question.'</span></div>';
                  $html .= '<label for="answer_'.$pos.'_1_'.$id.'">Correct Answer</label>';
                  $html .= '<input type="text" id="answer_'.$pos.'_1_'.$id.'" name="answer0[]">';

                  $html .= '<label for="answer_'.$pos.'_2">Correct Answer</label>';
                  $html .= '<input type="text" id="answer_'.$pos.'_2_'.$id.'" name="answer1[]">';

                  $html .= '<label for="answer_'.$pos.'_3">Correct Answer</label>';
                  $html .= '<input type="text" id="answer_'.$pos.'_3_'.$id.'" name="answer2[]">';

                  $html .= '<label for="answer_'.$pos.'_4">Correct Answer</label>';
                  $html .= '<input type="text" id="answer_'.$pos.'_4_'.$id.'" name="answer3[]">';

                  $html .= "<br>";

                  $pos++;
             		}
               	$stmt->close();
                 echo $html;

               ?>
            </form>

           </div>
        </div>
     </div>

 <?php
 require_once('includes/footer.php');
 ?>
