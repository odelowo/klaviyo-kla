
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

if(Input::exists('get')){

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

}

	//if email is valid, do this
	if(1==1){ //no validation required on passed url 
		//get the user info based on the email
    $verify = new User($email);

		if($verify->data()->email_verified == 1 && $verify->data()->vericode == $vericode && $verify->data()->email_new == ""){
			//email is already verified - Basically if the system already shows the email as verified and they click the link again, we're going to pass it regardless of the expiry because
			//require $abs_us_root.$us_url_root.'users/views/_verify_success.php';

      $verify_success=TRUE;
			logger($verify->data()->id,"User","Verification completed via vericode - again.");
			$msg = str_replace("+"," ",lang("REDIR_EM_SUCC"));

		}else{
      //troubleshooting values for if statement - echo "3 - | ".$verify->exists().' | '.$verify->data()->vericode.' | '.$vericode.' || '.strtotime($verify->data()->vericode_expiry).' | '.strtotime(date("Y-m-d H:i:s")).' Z '.$new.' Y '.$verify->data()->email_new.' # '.$verify->data()->id;
		if ($verify->exists() && $verify->data()->vericode == $vericode && (strtotime($verify->data()->vericode_expiry) - strtotime(date("Y-m-d H:i:s")) > 0)){
			//check if this email account exists in the DB

      $verify->update(array('email_verified' => 1,'vericode' => randomstring(15),'vericode_expiry' => date("Y-m-d H:i:s")),$verify->data()->id);

			$verify_success=TRUE;
			logger($verify->data()->id,"User","Verification completed via vericode.");
			$msg = str_replace("+"," ",lang("REDIR_EM_SUCC"));

      //add user to newsletter list if they have opted in
      if($verify->data()->newsletterSubscription == 1){
        //add to list
        $call = new Klaviyo();
        $listId = "VqpWFS";
        $call->subscribeToList($listId, $email);
      }

		}
	}
	}else{

		$errors = $validation->errors();

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

          if ($verify_success){

            //start welcome journey
            $call = new Klaviyo();

            $properties = [];
            $customer = array(
              array("email",$email),
            );

            $event = "Customer Welcome Journey";
            $call->trackProfileActivity($customer, $properties, $event);

          	if(file_exists($abs_us_root.$us_url_root.'usersc/views/_verify_success.php')){
          		require_once $abs_us_root.$us_url_root.'usersc/views/_verify_success.php';
          	}else{
          		require $abs_us_root.$us_url_root.'users/views/_verify_success.php';
          	}

          }else{
          	if($eventhooks =  getMyHooks(['page'=>'verifyFail'])){
          		includeHook($eventhooks,'body');
          	}

          	if(file_exists($abs_us_root.$us_url_root.'usersc/views/_verify_error.php')){
          		require_once $abs_us_root.$us_url_root.'usersc/views/_verify_error.php';
          	}else{
          		require $abs_us_root.$us_url_root.'users/views/_verify_error.php';
          	}

          }

          ?>


      </div>

      <div id="footer" class="flex-container">

          <footer class="copyright">This is a project developed by <a href="https://www.linkedin.com/in/samson-odelowo/" target="_blank">Samson Odelowo</a> for <a href="https://www.klaviyo.com/" target="_blank">klaviyo</a>. All rights reserved.</footer>

      </div>

    </div>

  </body>
</html>
