<?php
session_start();
include('connect.php');
$psswd=$_POST["pwd"];
$eid=$_POST["eiid"];
$ar=mysqli_query($conn,"SELECT * from users WHERE eid='$eid' AND password='$psswd'");
if(mysqli_num_rows($ar)>0)
{
    $_SESSION["uname"]=mysqli_fetch_array(mysqli_query($conn,"SELECT name from users WHERE eid='$eid'"))[0];
    $_SESSION["email"]=mysqli_fetch_array(mysqli_query($conn,"SELECT email from users WHERE eid='$eid'"))[0];
    $_SESSION["eid"]=$eid;
    header('refresh:0.01;url=http://localhost/check/Entreprenuer-Home.php');
}
else
{
    echo "<script>alert('Invalid Credentials');</script>";
    header("refresh:0.1;url=http://localhost/scroll/elogin.php");
}
?>