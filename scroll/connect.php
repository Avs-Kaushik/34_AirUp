<?php
$host='localhost';
$username = 'team';
$password = 'team';
$dbname='airup';
$conn=mysqli_connect($host,$username,$password,$dbname);
if($conn)
{
    
}
else{
    die("Connection failed".mysqli_connect_error());
}
?>