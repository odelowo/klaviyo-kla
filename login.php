
<?php
require_once 'users/init.php'; //initialisation script
$hooks =  getMyHooks();
includeHook($hooks,'pre');

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
$loginfailed = false;

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
includeHook($hooks,'post');

if ($validated) {
  //Log user in
  $user = new User();
  $login = $user->loginEmail($email, $password, $remember);
  if ($login) {
    $hooks =  getMyHooks(['page'=>'loginSuccess']);
    includeHook($hooks,'body');

    //if first name is blank, ask for more data
    if($user->data()->fname == "") //if user has not yet updated their information, send to landing page to get more information
      $dest = "platform/welcome.php";
    else //user has provided their basic information so navigate to default landing page
      $dest = "platform/index.php";
      $_SESSION['last_confirm']=date("Y-m-d H:i:s");

      Redirect::to($dest);


    } else {
      $eventhooks =  getMyHooks(['page'=>'loginFail']);
      includeHook($eventhooks,'body');
      logger("0","Login Fail","A failed login on login.php");
      $msg = lang("SIGNIN_FAIL");
      $msg2 = lang("SIGNIN_PLEASE_CHK");
      $errors[] = '<strong>'.$msg.'</strong>'.$msg2;
      $loginfailed = true;
    }
  }else{
    $errors = $validation->errors();
  }
  sessionValMessages($errors, $successes, NULL);

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

          <?php if ($loginfailed){ echo '<div class="alert alert-error" id="email-changed-alert"><div class="alert-icon"><i class="kl kl-x" style="vertical-align: top"></i></div><div class="alert-message"><b>Error</b><br/>We were unable to log you in. Please check your username and password is correct.</div></div>';} ?>

  <?php
  includeHook($hooks,'body');
  ?>
  <h2 class="headline less-margin">Welcome Back</h2>

  <div class="form-container form-divider">
    <form id="login-form" action="" method="POST">

      <fieldset>

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
