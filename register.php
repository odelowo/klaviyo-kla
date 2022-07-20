
<?php
require_once 'users/init.php'; //initialisation script
if (!securePage($_SERVER['PHP_SELF'])) { //if unsecure do not load the rest of the page
    die();
}
if ($user->isLoggedIn()) { //if already logged in, redirect
    Redirect::to($us_url_root.'platform/index.php');
}
$hooks = getMyHooks();

includeHook($hooks, 'pre');
//There is a lot of commented out code for a future release of sign ups with payments
$form_method = 'POST';
$form_action = 'join.php';
$vericode = randomstring(15);

$form_valid = false;

//Decide whether or not to use email activation
$query = $db->query('SELECT * FROM email');
$results = $query->first();
$act = $results->email_act;

//If you say in email settings that you do NOT want email activation,
//new users are active in the database, otherwise they will become
//active after verifying their email.
if ($act == 1) {
    $pre = 0;
} else {
    $pre = 1;
}

if (Input::exists()) {

    $email = Input::get('email');
    //$password = Input::get('password');
    $company = Input::get('company');
    $website = Input::get('company_website');
    $phone = Input::get('phone');
    $newsletterSubscription = (strlen(Input::get('is_subscribe_to_list')) > 1 ? 1 : 0);

    $validation = new Validate();
/*
'password' => [
      'display' => lang('GEN_PASS'),
      'required' => true,
      'min' => $settings->min_pw,
      'max' => $settings->max_pw,
],
*/
        $validation->check($_POST, [
          'email' => [
                'display' => lang('GEN_EMAIL'),
                'required' => true,
                'valid_email' => true,
                'unique' => 'users',
                'min' => 5,
                'max' => 100,
          ],

          'company' => [
                'display' => lang('GEN_COMP'),
                'required' => true,
                'min' => 1,
                'max' => 60,
          ],
          'website' => [
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
    if ($eventhooks = getMyHooks(['page' => 'joinAttempt'])) {
        includeHook($eventhooks, 'body');
    }
    if ($validation->passed()) {
            $form_valid = true;
            //add user to the database
            $user = new User();
            $join_date = date('Y-m-d H:i:s');
            $params = [
                                'email' => $email,
                                'company' => $company,
                                'website' => $website,
                                'phone' => $phone,
                                'newsletterSubscription' => $newsletterSubscription,
                                'username' => $email,
                                'vericode' => $vericode,
                                'join_vericode_expiry' => $settings->join_vericode_expiry,
                        ];
            $vericode_expiry = date('Y-m-d H:i:s');
            if ($act == 1) {
                //Verify email address settings
                $to = rawurlencode($email);
                $subject = html_entity_decode($settings->site_name, ENT_QUOTES);
                $body = email_body('_email_template_verify.php', $params);
                email($to, $subject, $body);
                $vericode_expiry = date('Y-m-d H:i:s', strtotime("+$settings->join_vericode_expiry hours", strtotime(date('Y-m-d H:i:s'))));
            }
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
                                        'email_verified' => $pre,
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

                includeHook($hooks, 'post');
            } catch (Exception $e) {
                if ($eventhooks = getMyHooks(['page' => 'joinFail'])) {
                    includeHook($eventhooks, 'body');
                }
                die($e->getMessage());
            }
            if ($form_valid == true) { //this allows the plugin hook to kill the post but it must delete the created user
                include $abs_us_root.$us_url_root.'usersc/scripts/during_user_creation.php';

                if ($act == 1) {
                    logger($theNewId, 'User', 'Registration completed and verification email sent.');
                    $query = $db->query('SELECT * FROM email');
                    $results = $query->first();
                    $act = $results->email_act;
                    require $abs_us_root.$us_url_root.'users/views/_joinThankYou_verify.php';

                } else {
                    logger($theNewId, 'User', 'Registration completed.');
                    if (file_exists($abs_us_root.$us_url_root.'usersc/views/_joinThankYou.php')) {
                        require_once $abs_us_root.$us_url_root.'usersc/views/_joinThankYou.php';
                    } else {
                        require $abs_us_root.$us_url_root.'users/views/_joinThankYou.php';
                    }

                }
                require_once $abs_us_root.$us_url_root.'users/includes/html_footer.php';
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
    <form id="registration-form" method="POST" >
        <div class="form-group">
          <div class="controls">
            <input required type="email" name="email" class="form-control" placeholder="Email" value="" />

          </div>
        </div>

        <div class="form-group">
          <div class="controls">
            <input required type="password" name="password" class="form-control fs-exclude" placeholder="Password" />

          </div>
        </div>

        <div class="form-group">
          <div class="controls">
            <input required type="name" name="company" class="form-control" placeholder="Company Name" value="" />

          </div>
        </div>

        <div class="form-group">
          <div class="controls">
            <input type="name" name="company_website" class="form-control" placeholder="Company Website" value="" />

          </div>
        </div>

        <div class="form-group">
          <div class="controls">
            <input type="name" name="phone" class="form-control" placeholder="Phone Number" value="" />

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
