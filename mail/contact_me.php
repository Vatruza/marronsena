<?php
// Check for empty fields
if(empty($_POST['nombre'])  		||
   empty($_POST['email']) 		||
   empty($_POST['mensaje'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['nombre'];
$email_address = $_POST['email'];
$message = $_POST['mensaje'];
	
// Create the email and send the message
$to = 'yourname@yourdomain.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $nombre";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $nombre\n\nEmail: $email_address\n\nMensaje:\n$mensaje";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>