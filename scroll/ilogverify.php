<?php
session_start();
include('connect.php');
$psswd=$_POST["pwd"];
$iid=$_POST["iiid"];
$ar=mysqli_query($conn,"SELECT * from investors WHERE iid='$iid' AND password='$psswd'");
if(mysqli_num_rows($ar)>0)
{
    $_SESSION["uname"]=mysqli_fetch_array(mysqli_query($conn,"SELECT name from investors WHERE iid='$iid'"))[0];
    $_SESSION["email"]=mysqli_fetch_array(mysqli_query($conn,"SELECT email from investors WHERE iid='$iid'"))[0];
    $_SESSION["iid"]=$iid;
    header('Location:http://localhost/invest/Investors-Home.php');
}
else
{
    echo "<script>alert('Invalid Credentials');</script>";
    header("refresh:0.1;url=http://localhost/scroll/ilogin.php");
}
?>