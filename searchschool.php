<?php
$ch = curl_init();


curl_setopt($ch, CURLOPT_URL,"http://www.aises.nic.in/schooldirectoryforviewonly?pu=true");
curl_setopt($ch, CURLOPT_POST, 1);

// in real life you should use something like:
 curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query(
         array(
             'cv' => '1',
             'pu'=>'true',
             'stateCode'=>'19',
             'districtCode'=>'19',
             'Schooltype'=>'1',
             'blockCode'=>'0',
             'villageCode'=>'0',
             'townCode'=>'0',
             'wardCode'=>'0',
             'schoolCategory'=>'0',
             'search'=>'Search',
             )
         ));

// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec ($ch);

echo $server_output;

curl_close ($ch);
?>
