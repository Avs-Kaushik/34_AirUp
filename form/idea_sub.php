<?php
session_start();
if(empty($_SESSION["uname"])){
  echo "<script>alert('Please Login first!');</script>";
  header("refresh:0.1;url=http://localhost/scroll/elogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
        body{
          background-image:url('bg.gif');
          background-repeat:no-repeat;
          background-position:center center;
          background-size:cover;
            color:#595260;
            font-family: 'Comfortaa', cursive;
            overflow-x:hidden;
        }
        input{
          background-color:#F6F1F1;
          font-family: 'Comfortaa', cursive;
        }
        html{
            scroll-behavior:smooth;
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
   #ft{
            font-family: 'EB Garamond';
            margin:0.5%;
            margin-left:1%;
            font-size: 50px;
            color:#6D2FD1;
        }
.bo1{
    flex:1;
    width:40%;

    border-radius:35px 0px 35px 0px;
    }
    table {
  border-spacing: 10px;
}
#ft1{
            font-family: 'EB Garamond';
            margin:0.5%;
            font-size: 50px;
            color:black;
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
.sample{
  height: 20vh;
  width:100%;
  margin:1%;
  box-shadow:1px 3px 18px rgb(0,0,0,0.3);
}
.boxx{
  padding:20px;
}
form{
  font-family: 'Comfortaa', cursive;
  border-radius:20px;
  padding:20px;
  margin:2%;
  margin-left:20%;
  margin-right:20%;
  background-color:#FFFFFF;
  box-shadow:1px 3px 18px rgb(0,0,0,0.3);
  transition: transform 0.2s ease-in-out;
}
form:hover{
  transform:translateY(20px);
}
#st{
  width:93%;
  height:20px;
  border-radius:10px;
  background-color:#ECF9FF;
  padding:5px;
  margin:2%;
  margin-top:1%;
  border:0.2px solid black;
}
#stt{
  width:93%;
  border-radius:10px;
  background-color:#ECF9FF;
  padding:5px;
  margin:2%;
  margin-top:1%;
  border:0.2px solid black;
}
#lab{
  margin-left:2%;
}
#sub{
  margin:2%;
  margin-left:9%;
  transition:transform .2s ease-in-out;
  padding:10px;
  border:0.1px solid black;
  border-radius:20px;
  font-size:20px;
}
#sub1{
  margin:2%;
  margin-left:40%;
  padding:10px;
  transition:transform .2s ease-in-out;
  border:0.1px solid black;
  border-radius:20px;
  font-size:20px;
}
#sub:hover{
  transform:translateX(10px);
  background-color:#03C988;
cursor:pointer;
color:white;
}
#sub1:hover{
  transform:translateX(10px);
  background-color:#D14D72;
cursor:pointer;
color:white;
}

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
            background-color: #146C94;
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
            color:#f1ebfc;
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
        #hide1,#hide2,#hide3,#hide4,#hide5,#hide6,#hide7,#hide8,#hide9,#hide10,#hide11,#hide12{
          display:none;
          margin-left:2%;
          font-size:10px;
          color:#210062;
        }
        #honn1:hover{
          cursor:pointer;
        }
        #honn2:hover{
          cursor:pointer;
        }
        #honn3:hover{
          cursor:pointer;
        }
        #honn4:hover{
          cursor:pointer;
        }
        #honn5:hover{
          cursor:pointer;
        }
        #honn6:hover{
          cursor:pointer;
        }
        #honn7:hover{
          cursor:pointer;
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
            <div class="na na5"><a id="naa" href="http://localhost/form/courses.php">Hacakthons</a></div>
            <div class="na na3"><a id="naa" href="">Contact</a></div>
            <div class="na na4"><a id="naa" href="">About</a></div>
          </div>
        </div>
    </div>
</div>
    <div class="boxx">
    <form action="upload_file.php" method="post" enctype="multipart/form-data">
    <h1 align="center" style="margin:1%;margin-botton:0.3%;">Your Idea. <b>Your <b style="color:#A5D7E8;">StartUp</b></b><ion-icon name="trending-up-outline"></ion-icon></h1>
      <hr>
      <label id="lab" for="">Idea Name: <img id="honn1" src="information.png" width="10px" height="10px" onclick="myfun('hide1');" alt=""></label>
      <div id="hide1">A name for the idea that is being submitted.</div>
      <input id="st" type="text" name="idea_name" required>
      <label id="lab" for="">Problem Statement:<img id="honn1" src="information.png" width="10px" height="10px" onclick="myfun('hide3');" alt=""></label>
      <div id="hide3">A brief description of the idea, including its intended market, target audience, and unique value proposition.</div>
      <textarea name="prob" id="stt" cols="50" rows="5" required></textarea>
      <label id="lab" for="">One Liner Solution:<img id="honn1" src="information.png" width="10px" height="10px" onclick="myfun('hide4');" alt=""></label>
      <div id="hide4">Short and Crisp Solution</div>
      <input id="st" type="text" name="short_sol" required>
      <label id="lab" for="">Detailed Solution:<img id="honn1" src="information.png" width="10px" height="10px" onclick="myfun('hide5');" alt=""></label>
      <div id="hide5">A detailed explanation of the solution that the idea proposes, including any unique features or benefits.</div>
      <textarea name="det_sol" id="stt" cols="50" rows="5" required></textarea>
      <label id="lab" for="">Business Model:<img id="honn1" src="information.png" width="10px" height="10px" onclick="myfun('hide6');" alt=""></label>
      <div id="hide6">A description of how the idea will make money, including potential revenue streams and pricing models.</div>
      <textarea name="business" id="stt" cols="40" rows="4" required></textarea>
      <label id="lab" for="">Competition: <img id="honn1" src="information.png" width="10px" height="10px" onclick="myfun('hide7');" alt=""></label>
      <div id="hide7"> A brief overview of any existing competitors, and how the proposed idea will differentiate itself in the market.</div>
      <input id="st" type="text" name="comp" required>
      <label id="lab" for="">Your Profession:<img id="honn1" src="information.png" width="10px" height="10px" onclick="myfun('hide8');" alt=""></label>
      <div id="hide8">What is your current profession</div>
      <input id="st" type="text" name="proff" required>
      <label id="lab" for="">Equity<img id="honn1" src="information.png" width="10px" height="10px" onclick="myfun('hide9');" alt=""></label>
      <div id="hide9">At what equity % are you willing</div>
      <input id="st" type="text" name="eq" required>
      <label id="lab" for="">Amount<img id="honn1" src="information.png" width="10px" height="10px" onclick="myfun('hide10');" alt=""></label>
      <div id="hide10">What is your Original Ask</div>
      <input id="st" type="text" name="amt" required>
      <label id="lab" for="">No of days(Until active auction)<img id="honn1" src="information.png" width="10px" height="10px" onclick="myfun('hide11');" alt=""></label>
      <div id="hide11">How may days you want to make display this in Auction</div>
      <input id="st" type="text" name="days" required>
      <label id="lab" for="">Debt if required<img id="honn1" src="information.png" width="10px" height="10px" onclick="myfun('hide12');" alt=""></label>
      <div id="hide12">Debt if you required else Put 0 if not required</div>
      <input id="st" type="text" name="debt" required>
      <label id="lab" for="file"><span>Video about your idea:</span></label>
      <input type="file" name="file" id="file" /> 
<br />
      <input name="pat" type="checkbox" value="1" style="margin:1.5%;margin-left:2.2%;">I do have Patent/Provisional Patent on this Idea!
      <br>
      <input id="sub" type="submit" name="submit" value="Post Idea">
      <input id="sub1" type="reset" name="reset" value="Reset Data">
    </form>
    </div>
</body>
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
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="in" placeholder="  Email Address"type="text" height="40px" width="40px">
      <img src="https://cdn-icons-png.flaticon.com/512/9716/9716941.png" height="40px" width="40px">
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <img src ="infi.png" height="90px" width="90px" >
     <p style="text-align: center ; font-size: small;">Copyright &copy; 2023, All Right Reserved <a style="text-decoration:none;" href="#">Team INFINITI</a></p>
  </div>
  </div>
</footer>
<script>
  function myfun(param){
    document.getElementById(param).style.display="block";
  }
</script>
</html>