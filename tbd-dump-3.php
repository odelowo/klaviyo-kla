<?php
// require_once('vendor/autoload.php');
//
// $client = new \GuzzleHttp\Client();
//
// $response = $client->request('POST', 'https://a.klaviyo.com/api/track', [
//   'form_params' => [
//     'data' => '{"token": "TMezSb", "event": "Customer Email Verification", "customer_properties": {"$email": "odelowo@live.co.uk"}, "properties": {"vericode": "XXXXXX","vericode_expiry": "YYYYYY", "vericodeURL":"URL"}}'
//   ],
//   'headers' => [
//     'Accept' => 'text/html',
//     'Content-Type' => 'application/x-www-form-urlencoded',
//   ],
// ]);

?>

<?php

require_once 'users/init.php'; //initialisation script

$call = new Klaviyo();

$email = "samson.odelowo@googlemail.com";
$firstname = "Samson";
$lastname = "Odelowo";

$properties = [];

$customer = array(
  array("email",$email),
  array("first_name",$firstname),
  array("last_name",$lastname),
);

$event = "Sign Up Complete Test";
$call->trackProfileActivity($customer, $properties, $event);
?>
