<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from ='chegedan16@gmail.com';
$email_subject ='New Form';
$email_body="User Name:$name.\n"
$email_body="User Email:$visitor_email.\n"
$email_body="Subject:$subject.\n"
$email_body="User Message:$message.\n";

$to ='chegedan16@gmail.com';

$headers = "From: $email_from \r\n"
$headers .= "Reply_to: $visitor_email \r\n"
mail($to,$email_subject,$email_body,$headers);
header("Location: contact-us.html")

?>
