<?php
$title = 'Search'; //used to identify user friendly in-page title
$pageTitle = 'Search'; //used to identify page title
$menuItemSelected = ''; //used to identify which menu item is preselected
$journey = "Search"; //journey used for analytics purposes
$journeyStep = "Search"; //journey step used to identify drop off in journey

if (!empty($_GET['search_term']) ) {
  $pageview_attr = array(
    array("search_term",$_GET['search_term'])
  );
}else{
  $pageview_attr = [];
}
require_once '../users/init.php';

require_once('includes/header.php');

ini_set('display_errors',1);
ini_set('log_errors',1);
ini_set('error_log',dirname(__FILE__).'/log.txt');
error_reporting(E_ALL);
?>

     <div class="ObjectivesTab__Container-sc-1el61mo-0 coNUBW">
          <?php

          if (!empty($_GET['search_term']) ) {
            $term = strtolower(Input::get('search_term'));
            $rowQ = $db->query("SELECT id, name, description, responses, status, userid, timestamp FROM quiz WHERE (Lower(name) LIKE '%?%' OR Lower(description) like '%?%') AND status = 'Live' ORDER BY timestamp DESC", [$term, $term]);
            //echo "SELECT id, name, description, responses, status, userid, timestamp FROM quiz WHERE (Lower(name) LIKE '%".$term."%' OR Lower(description) like '%".$term."%') AND status = 'Live' ORDER BY timestamp";
            $rowC = $rowQ->count();
            echo "/n count = ".$rowC;
          }
          else{
            $rowQ = $db->query("SELECT id, name, description, responses, status, userid, timestamp FROM quiz WHERE status = 'Live' ORDER BY timestamp DESC", []);
            $rowC = $rowQ->count();
          }

          $searchResult = "";
          $searchResult .= '<div id="integrations_list_container" class="hide" style="display: block;" style="display: block;position: relative;border: solid 1px #ccc;">';


          if($rowC >0){
            foreach ($db->results() as $quiz){ //write notification
              $searchResult .= '<ul id="integrations_list" style="margin: 0; list-style: none;">';
              $searchResult .= '<li class="integration_swatch " data-href="survey.php?id='.numhash($quiz->id).'" style="position: relative; border-top: solid 1px transparent; border-bottom: solid 1px transparent; padding: 18px 18px 17px; line-height: 18px;">';
              $searchResult .= '<a href="take-survey.php?id='.numhash($quiz->id).'" style="display: table;width: 100%;text-decoration: none; color: #2b98d3;">';
              $searchResult .= '<div class="integration_icon_container integration_icon_container_48" style="white-space: normal;width: 75%;display: table-cell;vertical-align: middle;">';
              $searchResult .= '<div class="text" style="display: inline-block; vertical-align: middle; -webkit-font-smoothing: antialiased !important;">';
              $searchResult .= '<div class="integration_name_container">';
              $searchResult .= '<h3 class="integration_name" style="font-size: 18px;display: inline;vertical-align: middle;">'.$quiz->name.'</h3>';
              $searchResult .= '</div>';
              $searchResult .= '<div class="integration_category" style="color: #444;">'.$quiz->description.'</div>';
              $searchResult .= '</div>';
              $searchResult .= '</div>';
              $searchResult .= '<div class="action_text" style="color: #373f47;font-size: 18px; line-height: 1;">';
              $searchResult .= 'Do Quiz ›';
              $searchResult .= '</div>';
              $searchResult .= '</a>';
              $searchResult .= '</li>';
              $searchResult .= '</ul>';
            }

          } else {
            $searchResult .= '<div class="empty_message" >There are no Quizes matching your search term. <a href="search.php">Click here to see all available quizes.</a></div>';
            $searchResult .= '</div>';
          }

          echo $searchResult;

          ?>
     </div>
 <?php
 require_once('includes/footer.php');
 ?>
