<?php
$title = 'Create Quiz'; //used to identify user friendly in-page title
$pageTitle = 'Create Quiz'; //used to identify page title
$menuItemSelected = 'create-quiz'; //used to identify which menu item is preselected
$journey = "Create Quiz"; //journey used for analytics purposes
$journeyStep = "Step 1 - Define Quiz"; //journey step used to identify drop off in journey
$pageview_attr = [];

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

if(!empty($_POST)){
  $timezone = date_default_timezone_get();
  date_default_timezone_set('Europe/London');
  $now = date('Y-m-d H:i:s');


  $response = preProcessForm();
  $response['fields']['userid'] = $user->data()->id;
  $response['fields']['status'] = "Draft";


  if($response['form_valid'] == true){

    postProcessForm($response);

    //return the id of the quiz
    $rowQ = $db->query("SELECT id FROM quiz WHERE userid = ? ORDER BY timestamp DESC LIMIT 1 ", [$user->data()->id]);
    $row = $rowQ->first();


    $call = new Klaviyo();

    $email = $user->data()->email;
    $firstname = $user->data()->fname;
    $lastname = $user->data()->lname;

    $nextStep = "www.thatspurple.com/klaviyo-kla/platform/quiz-details.php?q=".numhash($row->id);

    $customer = array(
      array("email",$email),
      array("first_name",$firstname),
      array("last_name",$lastname),
    );

    $properties = array(
      array("quiz", $response['fields']['name']),
      array("nextStep",$nextStep),
    );

    $event = "Quiz Start";
    $call->trackProfileActivity($customer, $properties, $event);
    $dest = "quiz-details.php?q=".numhash($row->id);
    Redirect::to($dest);

  }
  else{
    echo "in-valid";
  }

}

?>

     <div class="ObjectivesTab__Container-sc-1el61mo-0 coNUBW">
        <div class="ObjectivesTab__DashboardContainer-sc-1el61mo-1 khhmlX">
           <div class="Box__StyledBox-sc-16nrscc-0 izgCeZ HeroCardWrapper__StyledBox-sc-1monayj-1 hiaYEj">
              <?php displayView(1); ?>
           </div>
        </div>
     </div>
 <?php
 require_once('includes/footer.php');
 ?>
