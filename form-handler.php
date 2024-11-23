<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$subject = $_POST['message'];

$email_from = 'mcjustin143@gmail.com';
$email_subject = 'New Form Submission';
$email_body= "User Name : $name.\n";
"User Email : $visitor_email.\n";
"Subject: $subject.\n";
"User Message : $message.\n";

$to = '210101130016@cutm.ac.in';
$headers = "From $email_from \r\n";
$headers = "Reply-To : $visitor email\r\n";
mail($to,$email_subject,$email_body,$headers);
header("location:contact.html")
?>
