<?php
// If you are using Composer
require '../vendor/autoload.php';

$errors = "";

// Name
if (empty($_POST["name"])) {
    $errors = "Name is required ";
} else {
    $name = $_POST["name"];
}

// Email
if (empty($_POST["email"])) {
    $errors .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// Subject
if (empty($_POST["subject"])) {
    $errors = "Subject is required ";
} else {
    $Subject = $_POST["subject"];
}

// Message
if (empty($_POST["message"])) {
    $errors .= "Message is required ";
} else {
    $message = $_POST["message"];
}

$email = new \SendGrid\Mail\Mail();
$email->setFrom("contact@joshuapare.com",$_POST["email"]);
$email->setSubject($_POST["subject"]);
$email->addTo("joshuabpare@gmail.com", "Joshua Pare");
$email->addContent("text/plain", $_POST["message"]);

$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);

try {
  $response = $sg->client->mail()->send()->post($email);
  // print $response->statusCode() . "\n";
  // print_r($response->headers());
  // print $response->body() . "\n";
} catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
}

if (($response->statusCode() == 202) && ($errors == "")){
  echo 'success';
}
else{
   echo $errors;
}

?>