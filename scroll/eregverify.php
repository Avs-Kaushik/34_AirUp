<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php'; 
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
include('connect.php');
$nm=$_POST["name"];
$email=$_POST["email"];
$gen=$_POST["gen"];
$dob=$_POST["dob"];
$pass=$_POST["pass"];
$gov=$_POST["gov"];
$ct=mysqli_num_rows(mysqli_query($conn,"SELECT * from users"));
$new=$ct+10001;
$eid="E".strval($new);
if(mysqli_num_rows(mysqli_query($conn,"SELECT * from users where email='$email'"))<=0)
{
mysqli_query($conn,"INSERT into users(name,email,gender,dob,password,gov_id,eid) VALUES('$nm','$email','$gen','$dob','$pass','$gov','$eid')");
echo "<script>alert('Data saved successfully');</script>";
$mail = new PHPMailer (true);

$mail->isSMTP();

$mail->Host = 'smtp.gmail.com';

$mail->SMTPAuth = true;

$mail->Username = 'avskaushik123@gmail.com';

$mail->Password = 'gixgmgrmnowbpgzg'; 
$mail->SMTPSecure = 'ss1';


$mail->port =465;
$mail->setFrom('avskaushik123@gmail.com');


$mail->addAddress($_POST["email"]);
$mail->isHTML(true);
$mail->Subject="Registration Successful->Air Up";
$mail->Body = "Hello ".$nm.",<br><br>This is to inform you that you have successfully registered as an Entrepreneur.<br> Thank you for empowering us!<br> Here are some of your basic Details<br><br>Name: ".$nm." <br>Email: ".$email." <br>EID:".$eid."<br>Password: ".$pass." <br><br><br>Thank You.<br>Team AIRUP";
$mail->send();


header("refresh:0.1;url=http://localhost/scroll/elogin.php");
}
else{
    echo "<script>alert('Email Already used');</script>";
header("refresh:0.1;url=http://localhost/scroll/elogin.php");
}
?>