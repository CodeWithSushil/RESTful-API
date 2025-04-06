<?php

//$url = 'http://localhost:8080/rest/v1/test';
$url = 'https://www.google.co.in';
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

echo '<pre>';
print_r($result);
echo '</pre>';

if(curl_error($ch)){
  echo "Error: ". curl_error($ch);
}

curl_close($ch);
