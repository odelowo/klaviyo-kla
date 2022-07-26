
<?php
require_once 'users/init.php'; //initialisation script
if (!securePage($_SERVER['PHP_SELF'])) { //if unsecure do not load the rest of the page
    die();
}

// ini_set('display_errors',1);
// ini_set('log_errors',1);
// ini_set('error_log',dirname(__FILE__).'/log.txt');
// error_reporting(E_ALL);

if ($user->isLoggedIn()) { //if already logged in, redirect
    Redirect::to($us_url_root.'platform/index.php');
}



$vericode = randomstring(15);

$form_valid = false;

//Decide whether or not to use email activation
$query = $db->query('SELECT * FROM email');
$results = $query->first();
$act = $results->email_act;

if (Input::exists()) {

    $email = Input::get('email');
    $password = Input::get('password');
    $company = Input::get('company');
    $website = Input::get('company_website');
    $phone = Input::get('phone');
    $newsletterSubscription = (isset($_POST['is_subscribe_to_list']) ? 1 : 0);

    $validation = new Validate();

        $validation->check($_POST, [
          'email' => [
                'display' => lang('GEN_EMAIL'),
                'required' => true,
                'valid_email' => true,
                'unique' => 'users',
                'min' => 5,
                'max' => 100,
          ],
          'password' => [
                'display' => lang('GEN_PASS'),
                'required' => true,
                'min' => $settings->min_pw,
                'max' => $settings->max_pw,
          ],
          'company' => [
                'display' => lang('GEN_COMP'),
                'required' => true,
                'min' => 3,
                'max' => 60,
          ],
          'company_website' => [
                'display' => lang('GEN_URL'),
                'required' => false,
                'is_valid_website' => true,
                'min' => 5,
                'max' => 60,
          ],
          'phone' => [
                'display' => lang('GEN_PHONE'),
                'required' => false,
                'is_valid_uk_phone' => true,
                'unique' => 'users',
                'min' => 11,
                'max' => 11,
          ],
        ]);

    if ($validation->passed()) {
            $form_valid = true;
            //add user to the database
            $user = new User();
            $join_date = date('Y-m-d H:i:s');

            $vericode_expiry = date('Y-m-d H:i:s', strtotime("+$settings->join_vericode_expiry hours", strtotime(date('Y-m-d H:i:s'))));
            $vericodeURL = 'www.thatspurple.com/klaviyo-kla/confirm-email.php?v='.$vericode.'&email='.urlencode($email);

            try {
                // echo "Trying to create user";
                if(isset($_SESSION['us_lang'])){
                  $newLang = $_SESSION['us_lang'];
                }else{
                  $newLang = $settings->default_language;
                }
                $fields = [
                                        'username' => $email,
                                        'email' => Input::get('email'),
                                        'password' => password_hash(Input::get('password', true), PASSWORD_BCRYPT, ['cost' => 12]),
                                        'company' => $company,
                                        'website' => $website,
                                        'phone' => $phone,
                                        'newsletterSubscription' => $newsletterSubscription,
                                        'permissions' => 1,
                                        'join_date' => $join_date,
                                        'email_verified' => 0,
                                        'vericode' => $vericode,
                                        'vericode_expiry' => $vericode_expiry,
                                        'oauth_tos_accepted' => true,
                                        'language'=>$newLang,
                                ];

                $activeCheck = $db->query('SELECT active FROM users');
                if (!$activeCheck->error()) {
                    $fields['active'] = 1;
                }
                $theNewId = $user->create($fields);


            } catch (Exception $e) {

                die($e->getMessage());
            }

            //send registration email via Klavio
            $call = new Klaviyo();

            $properties = array (
              array("vericode",$vericode),
              array("vericode_expiry",$vericode_expiry),
              array("vericodeURL",$vericodeURL),
            );

            $customer = array(
              array("email",$email),
            );

            $event = "Customer Email Verification";
            $call->trackProfileActivity($customer, $properties, $event);

            if ($form_valid == true) { //this allows the plugin hook to kill the post but it must delete the created user
                include $abs_us_root.$us_url_root.'usersc/scripts/during_user_creation.php';

                logger($theNewId, 'User', 'Registration completed and verification email sent.');
                $query = $db->query('SELECT * FROM email');
                $results = $query->first();
                $act = $results->email_act;
                require $abs_us_root.$us_url_root.'usersc/views/_joinThankYou_verify.php';

                die();
            }

    } //Validation
} //Input exists

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



  <h2 class="headline less-margin" style="max-width:760px;">Get started with your free Kla account</h2>
  <p>Already have an account? <a href="login.php"><u>Login</u></a></p>
  <div class="form-container">
    <?php
    if (!$form_valid && Input::exists()){?>
      <?php if(!$validation->errors()=='') { echo $validation->display_errors(); } ?>
    <?}

    ?>
    <form id="registration-form" method="POST" >
        <div class="form-group">
          <div class="controls">
            <input required type="email" name="email" class="form-control" placeholder="Email" value="<?php if (!$form_valid && !empty($_POST)){ echo $email;} ?>" />

          </div>
        </div>

        <div class="form-group">
          <div class="controls">
            <input required type="password" name="password" class="form-control fs-exclude" placeholder="Password" />

          </div>
        </div>

        <div class="form-group">
          <div class="controls">
            <input required type="name" name="company" class="form-control" placeholder="Company Name" value="<?php if (!$form_valid && !empty($_POST)){ echo $company;} ?>" />

          </div>
        </div>

        <div class="form-group">
          <div class="controls">
            <input type="name" name="company_website" class="form-control" placeholder="Company Website" value="<?php if (!$form_valid && !empty($_POST)){ echo $website;} ?>" />

          </div>
        </div>

        <div class="form-group">
          <div class="controls">
            <input type="name" name="phone" class="form-control" placeholder="Phone Number" value="<?php if (!$form_valid && !empty($_POST)){ echo $phone;} ?>" />

          </div>
        </div>

        <div class="checkbox-controls">
          <div class="form-group">
            <div class="controls">
              <input type="checkbox" id="is_subscribe_to_list" name="is_subscribe_to_list" placeholder="" checked="checked"  value="on"/>
              <label for="is_subscribe_to_list">Kla has a newsletter? Sign me up!</label>

            </div>
          </div>

          <br />

        <button type="submit" class="submit-button">Get Started</button>
      </fieldset>
    </form>
  </div>

  <p class="terms">
    By submitting this form, you agree to
    the <a href="/terms-of-service" target="_blank">Terms of Service</a> and <a href="/privacy" target="_blank">Privacy Policy</a>
  </p>

        </div>
      </div>

      <div id="footer" class="flex-container">

          <footer class="copyright">This is a project developed by <a href="https://www.linkedin.com/in/samson-odelowo/" target="_blank">Samson Odelowo</a> for <a href="https://www.klaviyo.com/" target="_blank">klaviyo</a>. All rights reserved.</footer>

      </div>

    </div>

  </body>
</html>
