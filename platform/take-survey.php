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
?>

     <div class="ObjectivesTab__Container-sc-1el61mo-0 coNUBW">
        <div class="ObjectivesTab__DashboardContainer-sc-1el61mo-1 khhmlX">
           <div class="Box__StyledBox-sc-16nrscc-0 izgCeZ HeroCardWrapper__StyledBox-sc-1monayj-1 hiaYEj">
              <div class="HeroCardWrapper__CardListContainer-sc-1monayj-0 fIrQJB">
                 <div class="Box__StyledBox-sc-16nrscc-0 hzZglw Title__StyledBox-sc-1bx2dve-0 gLCdlk">
                    <span class="TextStyleTemplate-sc-1jbnw9u-0 crhGTk Title__StyledBody-sc-1bx2dve-1 NdxIz">Get Started</span>
                    <div class="Box__StyledBox-sc-16nrscc-0 bZntlp"><span class="TextStyleTemplate-sc-1jbnw9u-0 iQtoNF">Getting Started using Kla</span></div>
                 </div>
                 <div class="HeroCardListMember__StepAndCardContainer-sc-1q98de9-0 gOYaCR">
                    <div class="StepNumber__StepContainer-sc-vts7m4-0 jcRCgj">
                       <div class="StepNumber__StepNumberElement-sc-vts7m4-1 clJZwQ">1</div>
                       <div class="StepNumber__StepLine-sc-vts7m4-2 kdZuwc"></div>
                    </div>
                    <span class="HeroCardListMember__Container-sc-1q98de9-1 hnROve">
                       <div class="HeroCardListMember__CollapsedArchivedCompletedContainer-sc-1q98de9-4 kRGAvY">
                          <div class="Box__StyledBox-sc-16nrscc-0 giItA-D"><a href="create-quiz.php"><span class="TextStyleTemplate-sc-1jbnw9u-0 fhHHqE">Create a quiz</span></a></div>
                          <span class="TextStyleTemplate-sc-1jbnw9u-0 crhGTk">Simple.</span>
                       </div>
                    </span>
                 </div>
                 <div class="HeroCardListMember__StepAndCardContainer-sc-1q98de9-0 gOYaCR">
                    <div class="StepNumber__StepContainer-sc-vts7m4-0 jcRCgj">
                       <div class="StepNumber__StepNumberElement-sc-vts7m4-1 gAXjwL">2</div>
                       <div class="StepNumber__StepLine-sc-vts7m4-2 kdZuwc"></div>
                    </div>
                    <span class="HeroCardListMember__Container-sc-1q98de9-1 hnROve">
                       <div class="HeroCardListMember__CollapsedArchivedCompletedContainer-sc-1q98de9-4 kRGAvY">
                          <div class="Box__StyledBox-sc-16nrscc-0 giItA-D"><span class="TextStyleTemplate-sc-1jbnw9u-0 fhHHqE">Share your quiz</span></div>
                          <span class="TextStyleTemplate-sc-1jbnw9u-0 crhGTk">Send the quiz to friends, family and colleagues.</span>
                       </div>
                    </span>
                 </div>
                 <div class="HeroCardListMember__StepAndCardContainer-sc-1q98de9-0 gOYaCR">
                    <div class="StepNumber__StepContainer-sc-vts7m4-0 jcRCgj">
                       <div class="StepNumber__StepNumberElement-sc-vts7m4-1 gAXjwL">3</div>
                    </div>
                    <span class="HeroCardListMember__Container-sc-1q98de9-1 hnROve">
                       <div class="HeroCardListMember__CollapsedArchivedCompletedContainer-sc-1q98de9-4 kRGAvY">
                          <div class="Box__StyledBox-sc-16nrscc-0 giItA-D"><span class="TextStyleTemplate-sc-1jbnw9u-0 fhHHqE">Find out who your true friends are</span></div>
                          <span class="TextStyleTemplate-sc-1jbnw9u-0 crhGTk">Just kidding</span>
                       </div>
                    </span>
                 </div>
              </div>
           </div>
        </div>
     </div>
 <?php
 require_once('includes/footer.php');
 ?>
