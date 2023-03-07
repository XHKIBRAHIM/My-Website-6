<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$emai_from = 'info@yourwebsite.com';
$emai_subject = 'New Form Submission';
$emai_body = "User Name: $name.\n".
             "User Name: $visitor_email.\n".
             "Subject:$subject.\n".
             "User Message: $message.\n";
   $to  = 'xhkibrahim732@gmail.com';
   $headers = "From: $email_from \r\n";        
   $headers .= "Reply-To:$visitor_email \r\n"

   email($to,$emai_subject,$emai_body,$headers);
   header("Location: contact.html")
?>          