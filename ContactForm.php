<?php
$name =$_POST['name'];
$Person_email = $_POST['email'];
$Contact_Number = $_POST['Contact_No'];
$Message = $_POST['message'];

$email_from = 'krishhmail01@gmail.com';

$email_subject = "TriWeb Contact Form";

$email_body = "User Name : $name.\n".
              "User Email : $Person_email.\n".
              "User Contact Number : $Contact_Number.\n".
              "User Message : $Message.\n";

$to = "krishhmail01@gmail.com";
$headers = "From : $email_from \r\n ";
$headers = "Reply-To : $Person_email \r\n";

mail($to,$email_subject,$email_body,$headers);

headers("Location: Contact.html");

?>