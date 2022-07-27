<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://a.klaviyo.com/api/v2/lists?api_key=pk_1128ba9f64907df9bee8a7a7f27d84e92c",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "list_name=MyNewList",
  CURLOPT_HTTPHEADER => [
    "Accept: application/json",
    "Content-Type: application/x-www-form-urlencoded"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?>
