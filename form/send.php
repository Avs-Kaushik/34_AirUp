<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php'; 
require 'phpmailer/src/PHPMailer.php';

require 'phpmailer/src/SMTP.php';
$mail = new PHPMailer (true);

$mail->isSMTP();

$mail->Host = 'smtp.gmail.com';

$mail->SMTPAuth = true;

$mail->Username = 'avskaushik123@gmail.com';

$mail->Password = 'ldnrvctzgyfmbfcm'; 
$mail->SMTPSecure = 'ss1';


$mail->port =465;
$mail->setFrom('avskaushik123@gmail.com');


$mail->addAddress($_POST["email"]);
$mail->isHTML(true);
$mail->Subject=$_POST["Payment Confirmation!"];
$mail->Body = $_POST[""];
$mail->send();
?>