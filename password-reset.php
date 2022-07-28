<?php
  require_once 'users/init.php'; //initialisation script

  if (!securePage($_SERVER['PHP_SELF'])) { //if unsecure do not load the rest of the page
      die();
  }

  if($user->isLoggedIn()) $user->logout();

  $email_sent = false;

  if (Input::exists('post')) {
    $email = Input::get('email');
    $fuser = new User($email);
    $check = $db->query("SELECT id FROM users WHERE email = ? AND email_verified = 1",[$email])->count();

    $validate = new Validate();
    $validation = $validate->check($_POST,array(
    'email' => array(
      'display' => lang("GEN_EMAIL"),
      'valid_email' => true,
      'required' => true,
    ),
    ));

    if ($validation->passed()) {
      if($fuser->exists()){

        $vericode=randomstring(15);
        $vericode_expiry=date("Y-m-d H:i:s",strtotime("+$settings->join_vericode_expiry hours",strtotime(date("Y-m-d H:i:s"))));
        $db->update('users',$fuser->data()->id,['vericode' => $vericode,'vericode_expiry' => $vericode_expiry]);


          //send the email
          $call = new Klaviyo();
          $vericodeURL = 'www.thatspurple.com/klaviyo-kla/confirm-email.php?v='.$vericode.'&email='.urlencode($email);

          $properties = array (
            array("vericode",$vericode),
            array("vericode_expiry",$vericode_expiry),
            array("vericodeURL",$vericodeURL),
          );

          $customer = array(
            array("email",$email),
          );

          $event = "Resend Customer Email Verification";
          $call->trackProfileActivity($customer, $properties, $event);

          logger($fuser->data()->id,"User","Requested a new verification email.");

          //show prompt
          if($check > 0){
            $email_sent = TRUE;
          }
      }else{
          $errors[] = lang("ERR_EM_DB");
      }
    }else{
        $errors = $validation->errors();
    }

  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Klaviyo</title>

      </script><link rel="shortcut icon" href="/media/Favicon-16by16.png" />

    <meta name="description" content="Klaviyo is an email platform powered by data built for ecommerce and web businesses." />
    <meta name="google-site-verification" content="gZoutuKyaBAseITF5HFxs7502vdgSyDlGFVcrM-3_68" />
    <meta name="author" content="Klaviyo" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


      <link rel="stylesheet" href="https://www.klaviyo.com/media/css/public_v4/base.css?v=eed3f46">

    <script src="https://use.typekit.net/lfn1kdd.js"></script>

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


  <h2 class="headline extra-margin">Forgot your password?</h2>
  <p class="subtitle">Please enter the email address associated with your Kla account.</p>
<?php if ($email_sent){ echo '<div class="alert alert-success" id="email-sent-alert"><div class="alert-icon"><i class="kl check-circle" style="vertical-align: top"></i></div><div class="alert-message"><b>Email sent</b><br/>A verification code has been sent to <span>'.$email.'.</span></div></div>';} ?>
  <div class="form-container form-divider">
    <form id="password-reset" method="POST">
      <fieldset>
        <div class="form-group">
          <div class="controls">
            <input id="id_email" type="email" name="email" class="form-control" placeholder="Email" value="" />

          </div>
        </div>

        <button type="submit" class="submit-button">Send a Password Reset Email</button>
      </fieldset>
    </form>
  </div>

<p><strong>Did it just come back to you? <a href="login.php"><u>Log in.</u></a></strong></p>


        </div>
      </div>

      <div id="footer" class="flex-container">

          <footer class="copyright">This is a project developed by <a href="https://www.linkedin.com/in/samson-odelowo/" target="_blank">Samson Odelowo</a> for <a href="https://www.klaviyo.com/" target="_blank">klaviyo</a>. All rights reserved.</footer>

      </div>

    </div>


  </body>
</html>
