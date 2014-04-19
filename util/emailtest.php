<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP(); 
$mail->Host = 'smtp.gmail.com';
$mail->Port = '587';
$mail->SMTPAuth = true;
$mail->Username = 'your gmail account'; // full gmail account
$mail->Password = 'yourpassword'; 		// password
$mail->SMTPSecure = 'tls'; 

$mail->From = '8rc.um.edu.my@gmail.com';		// full gmail account
$mail->FromName = 'Name of the sender';			// sender name
$mail->addAddress('yskoay_919@hotmail.com');  	// Add recipient

$mail->Subject = 'Title of the email';
$mail->Body    = 'the Content, can use html tags';

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';