<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
        body{
            background-color:#040511;
            color:#595260;
            font-family: 'Montserrat', sans-serif;
            overflow-x:hidden;
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
            background-color: #453C67;
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
        .bt{
          margin:1%;
          width:130px;
          height:40px;
          border-radius:60px;
          background-color:#FFFFFF;
          border:0px;
          padding:1px;
          text-align:center;
          color:black;
          font-family: 'Space Grotesk', sans-serif;
        }
        .bt:hover{
          cursor:pointer;
          background-color:#FFFFFF;
          color:black;
          box-shadow:1px 3px 18px white;
        }
        .btt{
          margin-left:38%;
          background-color:#FFD523;
          color:#2C2E43;
        }
        .btt1{
          background-color:#040511;
          color:#FFFFFF;
          border:1px solid white;
        }
        .cmp{
          display:flex;
          flex-wrap:wrap;
          flex-direction:row;
          margin-left:20%;
          margin-right:20%;
        }
        .l{
          flex:1;
          margin:2%;
          padding:5px;
          text-align:center;
        }
        .l:hover{
          cursor:pointer;
          color:white;
        }
        .cover{
          margin:2%;
          border-left:1px solid white;
        }
        .cover1{
          margin:2%;
          border-left:1px solid white;
        }
        .circ{
          border-radius:40px;
          width:30px;
          height:30px;
          background-color:white;
          margin-left:0.8%;
        }
        .show{
          display:flex;
          text-align:center;
          flex-direction:row;
          flex-wrap:wrap;
          margin-left:8%;
          margin-right:8%;
        }
        .cd{
          flex:1;
          margin:3%;
          box-shadow:1px 3px 18px black;
          border-radius:10px;
          background-color:#040511;
          padding:20px;
        }
        .cd:hover{
          box-shadow:1px 3px 18px grey;
        }
        .card{
          margin:3%;
          min-height:60vh;
        }
        .card1{
          flex:2;
        }
        .card2{
          flex:3;
        }
        .cover2{
          margin:2%;
          border-left:1px solid white;
        }
        .show1
        {
          display:flex;
          text-align:center;
          flex-direction:row;
          flex-wrap:wrap;
          margin-left:2%;
          margin-right:2%;
        }
        #hon{
          margin-left:-60%;
          margin-top:4%;
          border:0px;
          background-color:#FFD523;
          color:black;
          border-radius:40px;
          padding:20px;
          font-size:20px;
          font-family: 'Space Grotesk', sans-serif;
          transition: transform .3s ease-in-out;
        }
        #hon:hover{
          transform: translateX(20px);
          cursor:pointer;
        }
        .cd:hover{
          cursor:pointer;
        }
    </style>
    <script src="https://unpkg.com/scrollreveal@4"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <div class="head">
    <div class="box box1">&nbsp;&nbsp;<span id="ft">АЇЯ</span><span id="ft1">UP</span></div>
    <div class="box box2">
      <div class="temp">
        <div class="navi">
            <div class="na na1"><a id="naa" href="http://localhost/check/homepage.php">Home</a></div>
            <div class="na na5"><a id="naa" href="http://localhost/form/courses.php">Hacakthons</a></div>
            <div class="na na3"><a id="naa" href="">Contact</a></div>
            <div class="na na4"><a id="naa" href="">About</a></div>
          </div>
        </div>
    </div>
</div>
<div class="cover">
        <h1 align="center" style="font-size:60px;margin-bottom:1%;color:#FFFFFF;">Easily Upgrade Your Idea</h1>
        <h4 align="center">Now with our <b style="color:#FFD523;margin-top:1%;">Premium</b> Support facility, You can improve your idea</h4>
        <span><button class='bt btt'><b>Go Premium</b></button></span>
        <span><button class='bt btt1'>Request Demo</button></span>
        <br>
        <h6 align="center">TRUSTED BY OVER 1500 COMPANIES ACROSS THE WORLD</h6>
        <div class="cmp">
          <div class="l ll1">amazonn</div>
          <div class="l ll2">googlee</div>
          <div class="l ll3">faceboook</div>
          <div class="l ll4">yotube</div>
        </div>
        <img style="margin-left:10%;margin-right:10%;width:1000px;" src="kk1.jpg" alt="">
</div>
<div class="circ"></div>
<div class="cover1">
<h1 align="center" style="font-size:40px;margin-bottom:1%;color:#F2E3DB;">Get Exclusive Support</h1>
<div class="show">
  <div class="cd cd1">
    <h3 align="center" style="color:white;">Airup Support</h3>
    <img src="samp.png" style="margin-top:-4%;" width="110px" alt="">
    <hr>
    <p>Physical and financial Support, more prioritzed listings. Access to new technologies!</p>
  </div>
  <div class="cd cd2">
  <h3 align="center" style="color:white;">Investor Suggestions</h3>
  <img src="investor.png" style="margin-left:3%;margin-top:-1%;" width="110px" alt="">
  <hr>
  <p>Changes or Suggestions from Angel Investors. Chances of insdustrial standard modifications!</p>
  </div>
  <div class="cd cd3">
  <h3 align="center" style="color:white;">Dev Suggestions</h3>
  <img src="coding.png" style="margin-top:-1%;" width="110px" alt="">
  <hr>
  <p>Personalized Development team suggestions. Modifications of base idea for better implementation and greter exposure to industry.</p>
  </div>
</div>
<br>
<br><br>
<br><br>
</div>
<div class="circ"></div>
<div class="cover2">
  <div class="show1">
    <div class="card card1">
      <h1 align="left" style="font-size:40px;margin-top:0.1%;margin-bottom:0.1%;">One <b style="color:#FFD523">Premium</b></h1>
      <h3 align="left" style="font-size:38px;margin-top:0.1%;margin-bottom:0.1%;">Many Advantages</h3>
      <button id="hon"><b>Get Premium</b></button>
      <br><br><br> 
      <p style="text-align:left;">Its not enough just to plant the Idea its equally important to prioritize it and improve it. Who may guess it can grow so heavy that it can be next global company. </p>
    </div>
    <div class="card card2">
    <video width="600px" autoplay loop muted>
  <source src="sam.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>
    </div>
  </div>
</div>
    <script>
        ScrollReveal().reveal('.box1', { duration: 5000});
        ScrollReveal().reveal('.na', { interval: 400,reset:true});
        ScrollReveal().reveal('.bx2',{ duration: 2000,reset:true});
        ScrollReveal().reveal('.cover',{ duration: 3000,reset:true});
        ScrollReveal().reveal('.cover1',{ duration: 3000,reset:true});
        ScrollReveal().reveal('.circ',{duration:3000,reset:true});
        ScrollReveal().reveal('.cover2',{ duration: 3000,reset:true});
    </script>
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
</html>