<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php'; 
require 'phpmailer/src/PHPMailer.php';

require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"]))
{ 
$mail = new PHPMailer (true);

$mail->isSMTP();

$mail->Host = 'smtp.gmail.com';

$mail->SMTPAuth = true;

$mail->Username = 'akhilvenkat27gopisetty@gmail.com';

$mail->Password = 'ldnrvctzgyfmbfcm'; 
$mail->SMTPSecure = 'ss1';


$mail->port =465;
$mail->setFrom('akhilvenkat27gopisetty@gmail.com');


$mail->addAddress($_POST["email"]);
$mail->isHTML(true);
$mail->Subject=$_POST["text1"];
$mail->Body = $_POST["text2"];
$mail->send();
}


?>