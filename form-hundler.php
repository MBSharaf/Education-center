<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$massage = $_POST['massage'];


$email_from = 'info@educationcenter.com';
$email_subject = 'new form submission';
$email_body = "user name: $name.\n".
              "user email: $visitor_email.\n".
              "subject: $subject.\n".
              "user massage: $massage.\n";

$to = 'Msharf576@gmail.com';
$header = "From: $email_from \r\n";  
$header .= "reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$header);
header("location: contact.html");

              
?>