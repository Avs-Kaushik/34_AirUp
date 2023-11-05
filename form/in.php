<?php
session_start();
include('connect.php');
$sid=$_SESSION["SID"];
$iid=$_SESSION["iid"];
$eid=mysqli_fetch_array(mysqli_query($conn,"SELECT eid from ideas where sid='$sid'"))[0];
$at=$_POST["amt"];
$eq=$_POST["eqty"];
$db=$_POST["debt"];
$in=$_POST["interest"];
$oaa=$_POST["oaa"];
$oae=$_POST["oae"];
$ok=mysqli_query($conn,"INSERT INTO profile(eid,sid,oaa,oae,iid,eamnt,equity,damnt,debt) VALUES('$eid','$sid','$oaa','$oae','$iid','$at','$eq','$db','$in')");
echo "<script>alert('Bid laid successfully!');</script>";
header("refresh:0.2;url=http://localhost/New%20Folder/t.php");
?>