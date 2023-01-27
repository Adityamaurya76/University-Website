<?php
$name =$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from ='info@something.com'
$email_subject='New Form Submission'

$email_body="User Name: $name.\n". 
            "UserEmail:$visitor_email.\n". 
             "Subject:$subject.\n". 
             "user Message:$message.\n";

$to='adityamaurya244u@gmail.com';
$headers="Form: $email_from \r\n";

$headers .="Reply-To:$visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location:contact.html");

?>