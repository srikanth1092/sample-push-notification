<?php
// Server key from Firebase Console
define( 'API_ACCESS_KEY', 'AAAA_ZcahjA:APA91bE2X2z5UNtjUpMIU1ztOaBaCi2SdFyGTh2N8by54QGKg2-ker4KrKEat5O3zkS2P2KD98witBkgcu5IAIYWreeNhbnpyHt5Q_vy23vsmOdrm1sn3wTppVMWnYFyS4Glpqb5dURt' );

$data = array("to" => "eiWNNUluJDo:APA91bECcJe21CMJarjfbCL19-vvIRq7mFxZsm93aDz86ItbYv8RJbZJTYJC-P7cSdLQjoPMuqS7VHt6IZ0aUbCVyzWMJDmcNM01s3EiZ0bOiqJpQ9EjaZMK7z_unn2Jymcdzo8_JTGp",
              "notification" => array( "title" => "Mytitle", "body" => "This is sample body","icon" => "icon.png", "click_action" => "https://darwinbox.com"));                                                                    
$data_string = json_encode($data); 

echo "The Json Data : ".$data_string; 

$headers = array
(
     'Authorization: key=' . API_ACCESS_KEY, 
     'Content-Type: application/json'
);                                                                                 
                                                                                                                     
$ch = curl_init();  

curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );                                                                  
curl_setopt( $ch,CURLOPT_POST, true );  
curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch,CURLOPT_POSTFIELDS, $data_string);                                                                  
                                                                                                                     
$result = curl_exec($ch);

curl_close ($ch);

echo "<p>&nbsp;</p>";
echo "The Result : ".$result;