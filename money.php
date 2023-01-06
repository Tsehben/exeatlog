<?php
$url = 'https://client.teamcyst.com/api_call.php';


$additional_headers = array(
   'Content-Type: application/json'
);

$data = array(
  "price"=> 0.001,
  "network"=> "vodafone",
  "recipient_number"=> "0202187274",
  "sender"=> "0202187274",
  "option"=> "rvtv",
  "apikey"=> "9e67963f77e2f55e683034da232c0a70c50cc97b"
  );
$data = json_encode($data);

$ch = curl_init($url);                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data); // $data is the request payload in JSON format                                                                 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers); 

$server_output = curl_exec ($ch);
?>
