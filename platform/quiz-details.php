<?php
$title = 'Create Quiz'; //used to identify user friendly in-page title
$pageTitle = 'Create Quiz'; //used to identify page title
$menuItemSelected = 'create-quiz'; //used to identify which menu item is preselected
$journey = "Create Quiz"; //journey used for analytics purposes
$journeyStep = "Step 2 - Quiz Enteries"; //journey step used to identify drop off in journey
$pageview_attr = [];
//echo "0";
if ( !empty($_POST) ) {


  for ($q = 1; $q <= count($_POST['question']); $q++) {
    //echo "loop";
    $arrayPos = $q -1;

    //echo "loop 2";
    $attr = [
      "Question ".$q => $_POST['question'][$arrayPos]
    ];

    //echo "loop 3";
    array_push($pageview_attr, $attr);
  }

  var_dump($pageview_attr);

}
//used to add additional page view attributes
// $pageview_attr = array(
//   array("test1","value 1"),
//   array("test2","value 2"),
//   array("test3","value 4"),
// );

require_once '../users/init.php';
require_once('includes/header.php');

ini_set('display_errors',1);
ini_set('log_errors',1);
ini_set('error_log',dirname(__FILE__).'/log.txt');
error_reporting(E_ALL);


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

             <form method="post">
               <div class="form-group" id="itemRows">
                 <div class="controls">
                  <input type="text" name="add_question" class="form-control" placeholder="Question"/>
                  <input onclick="addRow(this.form);" type="button" value="Add Question" />
                 </div>
               </div>
               <div class="checkbox-controls">
               <button class="submit-button" type="submit">Set Answers</button>
             </div>
            </form>

           </div>
        </div>
     </div>

 <?php
 require_once('includes/footer.php');
 ?>
