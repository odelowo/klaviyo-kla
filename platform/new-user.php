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
?>

     <div class="ObjectivesTab__Container-sc-1el61mo-0 coNUBW">
        <div class="ObjectivesTab__DashboardContainer-sc-1el61mo-1 khhmlX">
      <form id="update-details-welcome-form" method="POST">
       <div class="form-group">
         <div class="controls">
           <input name="fname" class="form-control" required="" type="fname" placeholder="First name" value="">

         </div>
       </div>

       <div class="form-group">
         <div class="controls">
           <input name="lname" class="form-control" required="" type="lname" placeholder="Last name" value="">

         </div>
       </div>

       <div class="checkbox-controls">

       <button class="submit-button" type="submit">Complete Sign Up</button>

     </div>
        </div>
     </div>
 <?php
 require_once('includes/footer.php');
 ?>
