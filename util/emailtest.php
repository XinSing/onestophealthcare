<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP(); 
$mail->Host = 'smtp.gmail.com';
$mail->Port = '587';
$mail->SMTPAuth = true;
$mail->Username = 'noreply.onestophealthcare@gmail.com'; // full gmail account
$mail->Password = 'abcd88888888'; 		// password
$mail->SMTPSecure = 'tls'; 

$mail->From = 'noreply.onestophealthcare@gmail.com';		// full gmail account
$mail->FromName = 'One Stop Health Care';			// sender name
$mail->addAddress('xinsing_92@siswa.um.edu.my');  	// Add recipient

$mail->Subject = 'Title of the email';
$mail->Body    = 'the Content, can use html tags';

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';