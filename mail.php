<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTODebug = 2;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'sadafkhan0106@gmail.com';
$mail->Password = your password;
$mail->setFrom('sadafkhan0106@gmail.com','PHPMailer');
$mail->addReplyTO('sadafkhan0106@gmail.com','PHPMailer');
$mail->Subject = 'Confirm your email address';
$mail->msgHTML = '<p>Confirm your email address</p>';
?>
