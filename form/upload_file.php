<?php  
session_start();
include('connect.php');
$eid=$_SESSION["eid"];
$in=$_POST["idea_name"];
$pb=$_POST["prob"];
$sl=$_POST["short_sol"];
$dl=$_POST["det_sol"];
$bs=$_POST["business"];
$cp=$_POST["comp"];
$pr=$_POST["proff"];
$eq=$_POST["eq"];
$amt=$_POST["amt"];
$day=$_POST["days"];
$amt=$_POST["amt"];
$siid=mysqli_num_rows(mysqli_query($conn,"SELECT * from ideas"));
$siid++;
$sid="S".strval($siid);
if(!empty($_POST['pat'])){
    $stat=1;
   } else {
$stat = 0;
}
$allowedExts = array("mp4");
$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
if (($_FILES["file"]["type"] == "video/mp4")&&($_FILES["file"]["size"] < 200000000)&&in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      $file="upload/" . $_FILES["file"]["name"];
      $temp=mysqli_query($conn,"INSERT INTO ideas(eid,idea_name,prob_st,short_sol,det_sol,business,comp,patent,file,sid,day,amt,eqt) VALUES('$eid','$in','$pb','$sl','$dl','$bs','$cp','$stat','$file','$sid','$day','$amt','$eq')");
      if($stat==0)
      {
        echo "<script>alert('Successfully Uploaded the idea. As you have said that your idea doesn't have any kind of patent, to secure it please check the process for getting provisonal patent. Thank You');</script>";
      header("refresh:1;url=http://localhost/check/homepage.php");
      }
      else{
      if($temp)
      {
        echo '<script>
        import { Sepolia } from "@thirdweb-dev/chains";
        import { ThirdwebSDK } from "@thirdweb-dev/sdk";
        const sdk = new ThirdwebSDK(Sepolia, {
          secretKey: "-_E2sUDaQNYlXMbp27rIM_2M2OBz9yrivTNLKiClcc5E-qpN8rz2zvWEq4KaVArlieRVYMjM0-DQrKEEGl7kMA",
        });
        const contractAddress = "0x591672C56A6a7da16d2F9495Df2dFB9675f61517";
        const contract = await sdk.getContract(contractAddress);
        
        // Handle form submission for idea submission
        async function submit_Idea(formData) {
          try {
            // Extract data from the form or formData as needed
            const _ideaData = 'echo $in;';
            // Call the submitIdea function
            const data = await contract.call("submitIdea", [_ideaData]);
        
            // Handle the result if needed
            console.log("Idea submitted:", data);
          } catch (error) {
            console.error("Error submitting idea:", error);
          }
        }
              </script>';
      echo "<script>alert('Successfully Uploaded the idea');</script>";
      header("refresh:0.1;url=http://localhost/check/homepage.php");
      }
      else{
        echo "<script>alert('Error occured');</script>";
      header("refresh:0.1;url=http://localhost/form/idea_sub.php");
      }
    }
    }
  }
else
  {
  echo "<scripr>alert('Invalid file. File must be of .mp4 type and limited size(<200mb)')</script>";
  header("refresh:0.1s;url=http://localhost/form/idea_sub.php");
  }
?>