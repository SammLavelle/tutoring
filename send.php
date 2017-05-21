<?php 

$to = "sjlavelle@hotmail.co.uk";
$subject = "Samm Tutoring request";

$name 		= $_POST['name'];
$email 		= $_POST['email'];
$message 	= $_POST['message'];

$name    = htmlspecialchars($name);
$email   = htmlspecialchars($email);
$message = htmlspecialchars($message);

$message = 'Email: ' . $email . '<br/><br/>' . $message;

echo mail($to, $subject, $message, "From: no-reply@sjlavelle.co.uk");

?>