<?php
require "email.php";
$mail = new EMail;
$mail->Username = 'mail@yourdomain.com';
$mail->Password = 'mail password';
$mail->SetFrom($_GET['recipient'],$_GET['name']);  // Name is optional
$mail->AddTo("mail@yourdomain.com","Name"); // Name is optional
$mail->Subject = $_GET['subject'];
$mail->Message = $_GET['comment'];
$mail->Send();
?>
success