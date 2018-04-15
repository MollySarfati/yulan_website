<?php

if (!empty($_POST)){
    
// Get cURL resource
$ch = curl_init();

// Set url
curl_setopt($ch, CURLOPT_URL, 'https://zapier.com/hooks/catch/bidd01/');

// Set method
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');

// Set options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Create body
$body = [
  "email" => $_POST["email"],
  "phone" => $_POST["phone"],
  "project" => $_POST["project"],
  "name" => $_POST["name"],
  ];
$body = http_build_query($body);

// Set body
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);

// Send the request & save response to $resp
$resp = curl_exec($ch);

if(!$resp) {
  die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
} else {
  echo "Response HTTP Status Code : " . curl_getinfo($ch, CURLINFO_HTTP_CODE);
  echo "\nResponse HTTP Body : " . $resp;
}

// Close request to clear up some resources
curl_close($ch);


	header('Location: http://yulan.us/?thanks=1');
	exit;

} else {
	header('Location: http://yulan.us/');
	exit;
}
