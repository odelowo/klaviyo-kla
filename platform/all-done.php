<?php
$title = 'Thank You'; //used to identify user friendly in-page title
$pageTitle = ''; //used to identify page title
$menuItemSelected = 'dashboard'; //used to identify which menu item is preselected
$journey = "Complete Survey"; //journey used for analytics purposes
$journeyStep = "Thank You"; //journey step used to identify drop off in journey
//used to add additional page view attributes
$pageview_attr = [];

require_once '../users/init.php';
require_once('includes/header.php');

ini_set('display_errors',1);
ini_set('log_errors',1);
ini_set('error_log',dirname(__FILE__).'/log.txt');
error_reporting(E_ALL);
?>

     <div class="ObjectivesTab__Container-sc-1el61mo-0 coNUBW">
        <div class="ObjectivesTab__DashboardContainer-sc-1el61mo-1 khhmlX">
           <div class="Box__StyledBox-sc-16nrscc-0 izgCeZ HeroCardWrapper__StyledBox-sc-1monayj-1 hiaYEj">
              <div class="Box__StyledBox-sc-16nrscc-0 bZntlp"><span class="TextStyleTemplate-sc-1jbnw9u-0 iQtoNF">An email has been sent to your email address along with your score!</span></div>
              <div class="Box__StyledBox-sc-16nrscc-0 bZntlp"><span class="TextStyleTemplate-sc-1jbnw9u-0 iQtoNF">Thank you for giving it a go!</span></div>
              <img src="https://c.tenor.com/IAUvvrUY7zQAAAAM/done-spongebob.gif" alt="all done"/>

           </div>
        </div>
     </div>
 <?php
 require_once('includes/footer.php');
 ?>
