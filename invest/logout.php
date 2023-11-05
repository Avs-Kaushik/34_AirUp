<?php
session_start();
session_destroy();
header("Location:http://localhost/check/homepage.php");
?>