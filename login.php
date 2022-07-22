
<?php
require_once 'users/init.php'; //initialisation script
if (!securePage($_SERVER['PHP_SELF'])) { //if unsecure do not load the rest of the page
    die();
}

// ini_set('display_errors',1);
// ini_set('log_errors',1);
// ini_set('error_log',dirname(__FILE__).'/log.txt');
// error_reporting(E_ALL);

$errors = $successes = [];
if (Input::get('err') != '') {
    $errors[] = Input::get('err');
}

if ($user->isLoggedIn()) { //if already logged in, redirect
    Redirect::to($us_url_root.'platform/index.php');
}

$validate = new Validate();
$validation = $validate->check($_POST, array(
  'email' => array('display' => lang('GEN_EMAIL'),'required' => true),
  'password' => array('display' => lang('GEN_PASS'), 'required' => true))
);
$validated = $validation->passed();
// Set $validated to False to kill validation
$email = Input::get('email');
$password = trim(Input::get('password'));
$remember = false;

if ($validated) {
  //Log user in
  $user = new User();
  $login = $user->loginEmail($email, $password, $remember);
  if ($login) {
    //if first name is blank, ask for more data
    if($user->data()->fname == "") //if user has not yet updated their information, send to landing page to get more information
      $dest = "platform/new-user.php";
    else //user has provided their basic information so navigate to default landing page
      $dest = "platform/index.php";

      Redirect::to($dest);

      $_SESSION['last_confirm']=date("Y-m-d H:i:s");


    } else {
      logger("0","Login Fail","A failed login on login.php");
      $msg = lang("SIGNIN_FAIL");
      $msg2 = lang("SIGNIN_PLEASE_CHK");
      $errors[] = '<strong>'.$msg.'</strong>'.$msg2;
    }
  }else{
    $errors = $validation->errors();
  }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Klaviyo</title>

      <link rel="stylesheet" href="https://www.klaviyo.com/media/css/public_v4/base.css?v=3db444d">

  <script src="https://use.fortawesome.com/d537f022.js"></script>

    <script src="https://use.typekit.net/lfn1kdd.js"></script>
    <script>try{Typekit.load({ async: false });}catch(e){}</script>

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

  <div class="alert alert-success" style="display: none;" id="email-changed-alert">
      <div class="alert-icon">
        <i class="kl kl-circle-success" style="vertical-align: top"></i>
      </div>
      <div class="alert-message">
        <b>Email address has been updated</b><br/>
        Please log in with your new email address.
      </div>
  </div>
<?php sessionValMessages($errors, $successes, NULL); ?>
  <h2 class="headline less-margin">Welcome Back</h2>

  <div class="form-container form-divider">
    <form id="login-form" action="" method="POST">
      <input type="hidden" name="csrfmiddlewaretoken" value="AAVASJbGoKyh4oH4lYiybZKOWblU5Ap9LMAYY21fmpJlcW1QaSg84PXwFqYp2frT">


      <fieldset>
        <input type="hidden" name="authentication_step" value="login" />

        <div class="form-group">
          <label for="email" class="hide">Email address</label>
          <div class="controls">
            <input type="email" aria-required="true" aria-invalid="false" name="email" id="email" class="form-control" autofocus placeholder="Email" value="" />

          </div>
        </div>

        <div class="form-group">
          <label for="password" class="hide">Password</label>
          <div class="controls">
            <input type="password" aria-required="true" aria-invalid="false" name="password" id="password" class="form-control fs-exclude  password-input " placeholder="Password" />

            <p class="forgot-password"><a href="password-reset.php">Forgot your password?</a></p>
          </div>
        </div>

          <br />

        <button id="submit-button" type="submit" class="submit-button" >Log In</button>
      </fieldset>
    </form>
  </div>

  <p><strong>Don't have a kla account?</strong> <a href="register.php"><u>Let's get started.</u></a></p>

        </div>
      </div>

      <div id="footer" class="flex-container">

          <footer class="copyright">This is a project developed by <a href="https://www.linkedin.com/in/samson-odelowo/" target="_blank">Samson Odelowo</a> for <a href="https://www.klaviyo.com/" target="_blank">klaviyo</a>. All rights reserved.</footer>

      </div>

    </div>

  </body>
</html>
