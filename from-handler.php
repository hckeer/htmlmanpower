<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'aayam.neupane1@gmail.com';

$emai_subject = 'New Form Submission';

$email_body = "User Name: $name.\n". 
               "User Email: $visitor_email.\n". 
               "Subject: $subject.\n". 
               "User Message: $message .\n";


$to = 'aayam.neupane1@gmail.com';
$header = "From: $email_from \r\n";
$header = "Replay-To $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
