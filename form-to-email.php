<?php
if(!isset($_POST['submit']))
{
    echo "error; you need to submit the form!";
}

$name= $_POST['name'];
$visitor_email = $_POST['email'];
$message - $_POST['message'];

//Validate
if(empty($name)||empty($visitor_email))
{
    echo "Name and email are mandatory!";
    exit;
}

$email_from = 'rbafna6507@gmail.com';
$email_subject = "New Form submission";
$email_body = "You have recieved a new message from the user $name.\n".
    "email address: $visitor_email\n".
    "Here is the message:\n $message".

$to = "rbafna6507@gmail.com";
$headers = "From: $email_from \r\n";

mail($to,$email_subject,$email_body,$headers);