<?php
$title = 'Search'; //used to identify user friendly in-page title
$pageTitle = 'Search'; //used to identify page title
$menuItemSelected = ''; //used to identify which menu item is preselected
$journey = "Search"; //journey used for analytics purposes
$journeyStep = "Search"; //journey step used to identify drop off in journey
$pageview_attr = array(
  array("search_term",$_GET['search_term'])
);

require_once '../users/init.php';

if (!empty($_POST['search_term']) ) {
  $term = Input::get('search_term');
  $rowQ = $db->query("SELECT id, name, description, responses, status, userid, timestamp FROM quiz WHERE name LIKE %?% OR description like %?% ORDER BY timestamp", [$term, $term]);
  $rowC = $rowQ->count();
}
else{
  $rowQ = $db->query("SELECT id, name, description, responses, status, userid, timestamp FROM quiz ORDER BY timestamp", []);
  $rowC = $rowQ->count();
}


require_once('includes/header.php');

ini_set('display_errors',1);
ini_set('log_errors',1);
ini_set('error_log',dirname(__FILE__).'/log.txt');
error_reporting(E_ALL);
?>

     <div class="ObjectivesTab__Container-sc-1el61mo-0 coNUBW">
        <div class="ObjectivesTab__DashboardContainer-sc-1el61mo-1 khhmlX">
          <?php

          $searchResult = "";
          $searchResult .= '<div id="integrations_list_container" class="hide" style="display: block;">';


          if($rowC >0){
            foreach ($db->results() as $quiz){ //write notification
              $searchResult .= '<ul id="integrations_list">';
              $searchResult .= '<li class="integration_swatch " data-href="survey.php?id='.numhash($quiz->id).'">';
              $searchResult .= '<a href="survey.php?id='.numhash($quiz->id).'">';
              $searchResult .= '<div class="integration_icon_container integration_icon_container_48">';
              $searchResult .= '<div class="text">';
              $searchResult .= '<div class="integration_name_container">';
              $searchResult .= '<h3 class="integration_name">'.$quiz->name.'</h3>';
              $searchResult .= '</div>';
              $searchResult .= '<div class="integration_category">'.$quiz->description.'</div>';
              $searchResult .= '</div>';
              $searchResult .= '</div>';
              $searchResult .= '<div class="action_text">';
              $searchResult .= 'Add Integration ›';
              $searchResult .= '</div>';
              $searchResult .= '</a>';
              $searchResult .= '</li>';
              $searchResult .= '</ul>';
            }

          } else {
            $searchResult .= '<div class="empty_message" >There are no integrations for the current filters.</div>';
            $searchResult .= '</div>';
          }

          echo $searchResult; 

          ?>
        </div>
     </div>
 <?php
 require_once('includes/footer.php');
 ?>
