<?php
$message="heloo  23";
 $smsString ="233249273086";
$curl = curl_init();
$id="ite";
$password="juv3nil3";
// echo $password;
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://sms.nalosolutions.com/smsbackend/clientapi/Resl_Nalo/send-message/?username=ite&password=juv3nil3&type=0&destination=$smsString&dlr=1&source=BrainHill&message=" . urlencode($message) . "",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));
             
$response = curl_exec($curl);

curl_close($curl);
echo $response;



?>