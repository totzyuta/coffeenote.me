<?php
	
$request = $_POST['request'];
	
// Create the email and send the message
$to = 'yuta.totz@gmail.com'; 
$email_subject = "Website Request Form";
$email_body = $request;
$headers = "From: noreply@coffee-note.com\n"; 
$headers .= "Reply-To";	
if(mb_send_mail($to,$email_subject,$email_body,$headers)) {
  return true;
}else {
  return false;			
}
?>
