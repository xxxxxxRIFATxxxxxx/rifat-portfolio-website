<?php
//get data from form  

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "youremail@mail.com";
$subject = "Mail From Rifat Portfolio Website";
$txt = "Name = " . $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@rifatportfolio.com" . "\r\n" .
    "CC:";
if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
//redirect
header("Location:index.html");
