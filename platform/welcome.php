<?php
$title = 'Welcome'; //used to identify user friendly in-page title
$pageTitle = 'Welcome'; //used to identify page title
$menuItemSelected = ''; //used to identify which menu item is preselected

require_once '../users/init.php';
require_once('includes/header.php');

ini_set('display_errors',1);
ini_set('log_errors',1);
ini_set('error_log',dirname(__FILE__).'/log.txt');
error_reporting(E_ALL);

if($user->data()->fname != "") { //only allow the user to get to this page if their first name is blank!
    Redirect::to('index.php');
}

$form_valid = false;

if (Input::exists()) {

  $firstname = Input::get('fname');
  $lastname = Input::get('lname');

  $validation = new Validate();

  $validation->check($_POST, [
    'fname' => [
          'display' => lang('GEN_FNAME'),
          'required' => true,
          'min' => 2,
          'max' => 60,
    ],
    'lname' => [
          'display' => lang('GEN_LNAME'),
          'required' => true,
          'min' => 2,
          'max' => 60,
    ],
  ]);

  if ($validation->passed()) {
      $form_valid = true;

      $userId = $user->data()->id;
      $fields = [
        'fname' => $firstname,
        'lname' => $lastname,
      ];

      $db->update('users', $userId, $fields);

      $successes[] = 'Account '.lang('GEN_UPDATED');
      logger($user->data()->id, 'User', "Update basic information $firstname and $lastname.");

      $call = new Klaviyo();
      //trigger hello message to klaviyo
      $properties = [];

      $customer = array(
        array("email",$user->data()->email),
        array("first_name",$firstname),
        array("last_name",$lastname),
      );

      $event = "Sign Up Complete";
      $call->trackProfileActivity($customer, $properties, $event);

      $dest = "index.php";
      Redirect::to($dest);

  } //Validation
}
?>

     <div class="ObjectivesTab__Container-sc-1el61mo-0 coNUBW">
        <div class="ObjectivesTab__DashboardContainer-sc-1el61mo-1 khhmlX">
          <?php
          if (!$form_valid && Input::exists()){?>
            <?php if(!$validation->errors()=='') { echo $validation->display_errors(); } ?>
          <?}

          ?>
      <form id="update-details-welcome-form" method="POST">
       <div class="form-group">
         <div class="controls">
           <input name="fname" class="form-control" required="" type="fname" placeholder="First name" value="<?php if (!$form_valid && !empty($_POST)){ echo $firstname;} ?>">

         </div>
       </div>

       <div class="form-group">
         <div class="controls">
           <input name="lname" class="form-control" required="" type="lname" placeholder="Last name" value="<?php if (!$form_valid && !empty($_POST)){ echo $lastname;} ?>">

         </div>
       </div>

       <div class="checkbox-controls">

       <button class="submit-button" type="submit">Complete Sign Up</button>

     </div>
   </form>
        </div>
     </div>
 <?php
 require_once('includes/footer.php');
 ?>
