<?php

$name = $_GET['name'];
$email_address = $_GET['email'];
$phone = $_GET['phone'];
$message = $_GET['message'];


$to = 'gabrielc007@gmail.com';
$email_subject = "Website Contact Form:" . $name;
$email_body = "You have received a new message from your website contact form.\n\n Here are the details:\n\nName: "  . $name
 . "\n\nEmail: " . $email_address . "\n\nPhone: " . $phone . "\n\nMessage:\n " . $message;
$headers = "From: noreply@yourdomain.com\n";
$headers .= "Reply-To: " . $email_address;
mail($to,$email_subject,$email_body,$headers);
echo "test";
return true;
?>
