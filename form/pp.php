<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap');
  .head{
            padding:5px;
            display:flex;
            flex-direction: row;
            flex-wrap:wrap;
        }
        .box{
            margin:0.2%;
            padding:5px;
            background-color: white;
        }
        .box1{
            flex:1;
            padding:12px;
            border-radius:35px 0px 35px 0px;
        }
        .box2{
            flex:6;
            border-top-left-radius: 35px;
            border-bottom-right-radius: 35px;
            background-color: #b3f1c0;
            margin-left: 45%;
            height:50px;
            width:100px;
            margin-top:1.3%;
        }
        #ft{
            font-family: 'EB Garamond';
            margin:0.5%;
            margin-left:1%;
            font-size: 50px;
            color:#6D2FD1;
        }
        #ft1{
            font-family: 'EB Garamond';
            margin:0.5%;
            font-size: 50px;
            color:black;
        }
        
        .navi{
            margin-top:-3.5%;
            display:flex;
            flex-direction: row;
            flex-wrap: wrap;
        }
        .na{
            flex:1;
            margin:3%;
            padding:5px;
            text-align: center;
            cursor:pointer;
            width:400px;
            height:30px;
            padding-top:20px;
        }
        .na:hover{
            background-color:#F2F7A1;
            color:black;
            margin:3%;
            padding:5px;
            text-align: center;
            cursor:pointer;
            width:400px;
            height:30px;
            padding-top:20px;
            border-radius:35px 0px 35px 0px;
            box-shadow:1px 3px 18px rgba(255, 255, 255, 0.582);
        }
        #naa{
            text-decoration:none;
            color:black;
            font-size:18px;
            font-family: 'Space Grotesk', sans-serif;
        }
        .na:hover #naa{
            color:black;
        }
        .na1{
          background-color:#F2F7A1;
            color:black;
            margin:3%;
            padding:5px;
            text-align: center;
            cursor:pointer;
            width:400px;
            height:30px;
            padding-top:20px;
            border-radius:35px 0px 35px 0px;
            box-shadow:1px 3px 18px rgba(0,0,0,0.3);
        }
        .na1 #naa{
            color:black;
        }
        .fomain {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  width: 100%;
  background-color:#c2dcff;
  border-bottom-left-radius: 40px;
    border-top-right-radius: 40px;
}

.fo1{
  border-bottom-left-radius: 40px;
  flex: 33.33%;

  background-color: whitesmoke;
 
}
.fo2{
  border-top-right-radius: 40px;
    
  flex: 33.33%;
  background-color: whitesmoke;

}
.fo3{
  border-bottom-left-radius: 40px;
    border-top-right-radius: 40px;
  flex: 33.33%;

}
.bo{
  margin-left: 8%;
  margin-top: 5%;

   }
.bo1{
    flex:1;
    width:40%;

    border-radius:35px 0px 35px 0px;
    }
    table {
  border-spacing: 10px;
}
.in
{
width: 50%;
height: 13%;
border: none;
background-color: #e3edf9;
border-top-right-radius: 15px;
border-bottom-left-radius: 15px;
}
#g{
    border-collapse:collapse;
    font-size:20px;
    background-color:#ADD8E6;
}
table{
    margin-left:auto;
    margin-right:auto;
    font-family: 'Comfortaa', cursive;
}
th,td{
    padding:5px;
}
    </style>
</head>
<body>
<div class="head">
    <div class="box box1">&nbsp;&nbsp;<span id="ft">АЇЯ</span><span id="ft1">UP</span></div>
    <div class="box box2">
      <div class="temp">
        <div class="navi">
            <div class="na na1"><a id="naa" href="">Home</a></div>
            <div class="na na5"><a id="naa" href="">Hacakthons</a></div>
            <div class="na na3"><a id="naa" href="">Contact</a></div>
            <div class="na na4"><a id="naa" href="logout.php">Logout</a></div>
          </div>
        </div>
    </div>
</div>
<?php
$eid=$_SESSION['eid'];
$host='localhost';
$username = 'team';
$password = 'team';
$dbname='airup';
$conn = mysqli_connect($host, $username, $password, $dbname);
$res = mysqli_query($conn,"select * from ideas where eid='$eid'");
while ($i = mysqli_fetch_assoc($res)){
    $sid=$i['sid'];
    $eid=$i['eid'];
    $tit=$i['idea_name'];
    $des=$i['prob_st'];
    $oask=$i['amt'];
    $oeq=$i['eqt'];
    $s=$i['sid'];
    $r = mysqli_query($conn,"select * from profile where eid='$eid' and sid='$s'");
    if(mysqli_num_rows($r)>0){
      echo "<h2 align='center'>$tit</h2>";
        echo "<table id='g' cell-spacing='10px' border=1px solid black>>";
        echo "<tr><th>Entrepreneur ID:{$i['eid']}</th>   <th>StartUp ID:{$i['sid']}</th>   <th>Original Ask:{$i['amt']}</th>   <th>Equity(%):{$i['eqt']}</th></tr>";
        echo "</table>";
        echo "<br>";
    while($a = mysqli_fetch_assoc($r)){
        $iid=$a['iid'];
        echo "<form method='post' action='move.php'>";
        echo " <input type='hidden' name='sid' value={$sid}>";
        echo " <input type='hidden' name='des' value={$des}>";
        echo " <input type='hidden' name='iid' value={$iid}>";
        echo " <input type='hidden' name='eid' value={$eid}>";
        echo " <input type='hidden' name='tit' value={$tit}>";
        echo " <input type='hidden' name='oask' value={$oask}>";
        echo " <input type='hidden' name='oeq' value={$oeq}>";
        echo " <input type='hidden' name='reqask' value={$a['eamnt']}>";
        echo " <input type='hidden' name='reqeq' value={$a['equity']}>";
        echo " <input type='hidden' name='deb' value={$a['damnt']}>";
        echo " <input type='hidden' name='in' value={$a['debt']}>";
        echo "<table cell-spacing='2px' border=1px solid black>";
        echo "<tr><td>INVESTOR ID</td><td>EQUITY AMOUNT</td><td>EQUITY%</td><td>DEBT AMOUNT</td><td>DEBT INTEREST%</td><td>ACCEPTANCE</td></td>";
        echo "<tr><td>{$a['iid']}</td><td>{$a['eamnt']}</td><td>{$a['equity']}</td><td>{$a['damnt']}</td><td>{$a['debt']}</td><th><input type='submit' name='submit' value='Accept'></th></tr></table>";
        echo "</form>";
        echo "<br>";
    }}
}
?>
<footer>
  <div class="fomain" id="con">
    <div class="fo1">
      <div class="bo bo1"><span id="ft">АЇЯ</span><span id="ft1">UP</span></div>
      <b><pre>
     An Startup based investment comapany,
     which acts as an medium between Investor
     and Entreprenuer
      </pre></b>

      <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Follow us:</h3>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <img src="https://cdn-icons-png.flaticon.com/128/3536/3536505.png" height="40px" width="40px"> &nbsp;&nbsp;&nbsp;<img src="https://cdn-icons-png.flaticon.com/128/2111/2111463.png" height="40px" width="40px">&nbsp;&nbsp;&nbsp; <img height="40px" width="40px" src="https://cdn-icons-png.flaticon.com/512/3256/3256013.png">
    </div>
    <div class="fo2">
      <br>
    <h3>&nbsp;&nbsp;Useful Links</h3>
    <table>
      <tr>
        <td>Features</td>
        <td>About</td>
      <tr>
        <tr>
          <td>Development Support</td>
          <td>Innovation support</td>
        <tr>
          <tr>
            <td>Apply Provitional patent</td>
            <td>Apply AirUp patent</td>
          <tr>
            <tr>
              <td>Report Issue</td>
              <td>Feedback</td>
            <tr>
    </table>
    </div>
    <div class="fo3">
      <br>
      
    <h3 style="text-align:center;"><u>Subscribe Us</u></h3>
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="in" placeholder="  Email Address"type="text" height="40px" width="40px">
      <img src="https://cdn-icons-png.flaticon.com/512/9716/9716941.png" height="40px" width="40px">
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <img src ="infi.png" height="90px" width="90px" >
     <p style="text-align: center ; font-size: small;">Copyright &copy; 2023, All Right Reserved <a href="#">Team INFINITI</a></p>
  </div>
  </div>
</footer>
</body>
</html>