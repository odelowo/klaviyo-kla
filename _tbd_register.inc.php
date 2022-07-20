<?php

require_once 'classes/Users.php';
require_once 'classes/Validate.php';
require_once 'classes/Mysql.php';

ini_set('display_errors',1);
ini_set('log_errors',1);

$email = $_POST['email'];
$password = $_POST['password1'];
$company = $_POST['company'];
$website = $_POST['company_website'];
$phone = $_POST['phone'];
$newsletter = $_POST['is_subscribe_to_list'];

$validation = new Validate();

$validation->checkEmail($email);
$validation->checkPassword($password);
$validation->checkName($company, "Company name should only contain letters and white space allowed");
$validation->checkWebsite($website);
$validation->checkPhone($phone);

if ($validation->passed()) {
  //passed
  $user = new User();
  echo "passed new user()"; 
}
else{
  echo "error branch";
  var_dump($_REQUEST);
  echo "errors = ".$validation->display_errors();
}

?>
