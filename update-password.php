
<?php
require_once 'users/init.php'; //initialisation script
if (!securePage($_SERVER['PHP_SELF'])) { //if unsecure do not load the rest of the page
    die();
}

// ini_set('display_errors',1);
// ini_set('log_errors',1);
// ini_set('error_log',dirname(__FILE__).'/log.txt');
// error_reporting(E_ALL);

$email = Input::get('email'); //get parameter
$vericode = Input::get('v'); //get parameter
if($user->isLoggedIn()) $user->logout(); //if user is currently logged in, log them out

$verify_success=FALSE; //initialise flag

$errors = array();

if (Input::exists('post')) {
  $vericode = Input::get('veri');

  $id = Input::get('id');

  $rowQ = $db->query("SELECT email  FROM users WHERE vericode = ? AND id = ?", [$vericode, $id]);
  $rowC = $rowQ->count();

  if($rowC == 1){
    $row = $rowQ->first();
    $email = $row->email;

    $newpassword = password_hash(Input::get('password', true), PASSWORD_BCRYPT, ['cost' => 12]);

    $db->update('users', $id, ['password' => $newpassword]);

    $dest = "login.php";
    Redirect::to($dest);
  }


}  else if(Input::exists('get')){

	$validate = new Validate();
	$validation = $validate->check($_GET,array(
	'email' => array(
	  'display' => lang("GEN_EMAIL"),
	  'required' => true,
	),
)); //removed email validation due to encoding

//due to issue with url encoding, looked up url based on verification code
$rowQ = $db->query("SELECT email  FROM users WHERE vericode = ? ", [$vericode]);
$rowC = $rowQ->count();

if($rowC == 1){
  $row = $rowQ->first();
  $email = $row->email; //overwrite email address


    $verify = new User($email);

		if($verify->data()->vericode == $vericode){
			//link verified

      $verify_success=TRUE;
      $id = $verify->data()->id;
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Klaviyo - Register</title>

      <link rel="shortcut icon" href="/media/Favicon-16by16.png" />

    <meta name="description" content="Klaviyo is an email platform powered by data built for ecommerce and web businesses." />
    <meta name="google-site-verification" content="gZoutuKyaBAseITF5HFxs7502vdgSyDlGFVcrM-3_68" />
    <meta name="author" content="Klaviyo" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


      <link rel="stylesheet" href="https://www.klaviyo.com/media/css/public_v4/base.css?v=3db444d">

    <script src="https://use.typekit.net/lfn1kdd.js"></script>

  <meta name="author" content="Klaviyo" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <meta name="robots" content="noindex,nofollow,noarchive">
  <link href='https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap' rel='stylesheet' type='text/css'>
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->


  </head>
  <body>
    <div class="flex-container-parent">

        <div id="header" class="flex-container">
            <a href="/"><div class="header-logo"></div></a>
        </div>


      <div class="flex-container container-main">

          <div class="logo-header">
            <a style="height: 39px; width:148px; background-repeat: no-repeat; background-image: url('/media/images/logos/logo-klaviyo-charcoal-text.svg')" href="/">
            </a>
          </div>


        <div class="center-container">

          <?php

          if (!$verify_success){
            $html = '<div class="row">';
            $html .= '<div class="col-sm-12">';
            $html .= '<h1>Unable to Authenticate.</h1>';
            $html .= '<a href="password-reset.php" class="btn btn-primary">Reset password</a>';
            $html .= '<br>';
            $html .= '</div>';
            $html .= '</div>';

          }
          else {

            $html = '<h2 class="headline less-margin">Password Reset</h2>';
            $html .= '<div class="form-container form-divider">';
            $html .= '<form id="password-reset-form" action="" method="POST">';
            $html .= '<fieldset>';
            $html .= '<div class="form-group">';
            $html .= '<label for="password" class="hide">Password</label>';
            $html .= '<div class="controls">';
            $html .= '<input type="password" aria-required="true" aria-invalid="false" name="password" id="password" class="form-control fs-exclude  password-input " placeholder="Password">';
            $html .= '<input type="hidden" name="veri" id="veri" value="'.$vericode.'">';
            $html .= '<input type="hidden" name="id" id="id" value="'.$id.'">';
            $html .= '</div>';
            $html .= '</div>';
            $html .= '<br>';
            $html .= '<button id="submit-button" type="submit" class="submit-button">Change Password</button>';
            $html .= '</fieldset>';
            $html .= '</form>';
            $html .= '</div>';

          }

          echo $html;

          ?>


      </div>

      <div id="footer" class="flex-container">

          <footer class="copyright">This is a project developed by <a href="https://www.linkedin.com/in/samson-odelowo/" target="_blank">Samson Odelowo</a> for <a href="https://www.klaviyo.com/" target="_blank">klaviyo</a>. All rights reserved.</footer>

      </div>

    </div>

  </body>
</html>
