<?php
session_start();
if(empty($_SESSION["fname"]))
{
  header("Location:facebook.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="top1.css">
    </head>
    <style>
    a {
      margin-right: 20px;
    }
    #icon222{
        margin-left: 880px;
        width: 50px;
        height: 40px;
        margin-top: 25px;
    }
    #icon{
        margin-right: 30%;
    }
    .flexbox {
      display: flex;
      justify-content: right;
    }

    .content {
      background-color: lightblue;
      height: 100px;
      display: flex;

    }

    .z {
      margin-top: 30px;
      margin-left:90px;
    }

    .z:hover {
      height: 50px;
      background-color: lightgoldenrodyellow;
      margin: 0px;
    }


    nav {
      background-color: skyblue;
    }
  </style>

<div class="content">
    <div class="flexbox" align="right">
        <img id="icon" src="">
        <input type="image" id="icon222" src="icon222.jpeg">
      <div class="z"><a 
          target="main" >Home</a></div>
      <div class="z"><a href="top11.php">Pictures</a></div>
      <div class="z"><a>View Pics</a></div>
    </div>
  </div>
  

<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
<body>
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-center">UPLOAD IMAGE</h3>
                    <form class="my-5" method="post" enctype="multipart/form-data">
                       <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" >
                       <input type="submit" name="upload" value="UPLOAD" class="btn
                       btn-success my-3">
                    </form>
  
<?php
if(isset($_POST['upload'])){
$target_dir = "posts/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["fname"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["upload"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    #echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["fname"])). " has been uploaded.";
    $email=$_SESSION["email"];
    $fname=$_SESSION["fname"];
    $file="posts/".$_FILES["fileToUpload"]["fname"];
    $host='localhost';
    $username = 'DEEPIKA';
    $password = 'DEEPIKA';
    $dbname='facebook';
    $flag=0;
    $conn=mysqli_connect($host,$username,$password,$dbname);
    if($conn)
    {
        #echo "Connection Successful.";
    }
    else{
        die("Connection failed".mysqli_connect_error());
    }

    $sql="INSERT INTO image(file,fname) VALUES('$file','$fname')";
    $upload=mysqli_query($conn,$sql);
    if($upload)
    {
        echo "<img id='in' src=$file alt='Uploaded Image'>";
    }
    else{
        echo "Error occured";
    }
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}}?>
<?php 
$host='localhost';
$username = 'DEEPIKA';
$password = 'DEEPIKA';
$dbname='facebook';
$flag=0;
$conn=mysqli_connect($host,$username,$password,$dbname);
if($conn)
{
    #echo "Connection Successful.";    

                  $sel= "SELECT * FROM image";
                  $que=mysqli_query($conn,$sel);?>
<?php
                  while($row = mysqli_fetch_array($que)){
                    echo "<img src=".$row['file']." width='100px' height='100px'>";

                  }
                }
                else{
                  die("Connection failed".mysqli_connect_error());
                }
 ?>
               </div>
                <div class="col-md-6">
                <h3 class="text-center">Display IMAGE</h3>  
               </div>
            </div>

        </div>
    </div>
    
    </div>
</body>
</html>