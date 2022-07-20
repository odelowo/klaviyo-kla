<?php
require_once 'users/init.php'; //initialisation script
//require_once('vendor/autoload.php');

$client = new Klaviyo();

$client->triggerCustomerEmailVerificationEmail($email, $properties);

// $response = $client->request('POST', 'https://a.klaviyo.com/api/track', [
//   'form_params' => [
//     'data' => '{"token": "TMezSb", "event": "Customer Email Verification", "customer_properties": {"$email": "odelowo@live.co.uk"}, "properties": {"vericode": "XXXXXX","vericode_expiry": "YYYYYY", "vericodeURL":"URL"}}'
//   ],
//   'headers' => [
//     'Accept' => 'text/html',
//     'Content-Type' => 'application/x-www-form-urlencoded',
//   ],
// ]);
//
// echo $response->getBody();
?>
