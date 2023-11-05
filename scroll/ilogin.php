<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=EB Garamond' rel='stylesheet'>
    <title>Investor Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@500&display=swap');
      </style>
      <script src="https://unpkg.com/scrollreveal@4"></script>
    <style>
        html{
            scroll-behavior: smooth;
        }
        body{
            background-image: url("invest.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }
        .login{
            background-color:#7dc5e3;
            font-size: 18px;
            font-family: 'Space Grotesk', sans-serif;
            width:91%;
            margin-left:3.2%;
            border:0.1px solid black;
            border-radius:10px;
            margin-top:5%;
        }
        .login:hover{
            background-color: #55b6e0;
            box-shadow: 1px 3px 18px rgba(0,0,0,0.3);
            cursor:pointer;
        }
        .input{
            width:90%;
            height:30px;
            border:0.5px solid black;
            border-radius:5px;
            margin:2%;
            padding:3px;
            margin-left:3%;
            font-family: 'Space Grotesk', sans-serif;
        }
        .lab{
            margin-left:3%;
            font-size:20px;
        }
        .out{
           /* margin:-1%;*/
            border-radius:10px;
            min-height:100vh;
        }
        .bx2{
            box-shadow: 1px 3px 18px rgba(0,0,0,0.3);
            border-radius:20px;
            background-color: #01aae3;
            margin:1%;
            padding:20px;
            flex:1;
            padding:20px;
            margin-left: 30%;
            margin-right: 30%;
            width:450px;
            height:350px;
            background: transparent;
            border: 2px solid rgba(255,255,255,.5);
            backdrop-filter: blur(40px);
            visibility: hidden;
            transition: height .2s ease;
             overflow: hidden;
        }
        .bx2.active{
            height:650px;
        }
        .bx2 .form1{
            transition: transform .18s ease;
            transform: translateY(0);
        }
        .bx2.active .form1{
            transition: none;
            transform: translateY(-400px);
        }
        .bx2.active .form2{
            transition: transform .18s ease;
            transform: translateY(-360px);
        }
        body{
            font-family: 'Space Grotesk', sans-serif;
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
            background-color: #e3effb;
        }
        .box2{
            flex:6;
            border-top-left-radius: 35px;
            border-bottom-right-radius: 35px;
            background-color: #7cc5e6;
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
        .box1{
            visibility: hidden;
        }
        .na{
            visibility: hidden;
        }
        .bx2 .form2{
            transform: translateY(400px);
            transition: none;
        }
    </style>
</head>
<body>
    <div class="out">
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
        <div class="bx2">
            <div class="form1">
            <h1 style="margin-left:15%;font-family: 'IBM Plex Mono', monospace;color:#2e1f62">Welcome <b style="color:#5e5ff7;">Investor!</b></h1>
            <hr>
            <form action="ilogverify.php" method="POST">
                <label class="lab" for="">IID (Investor Identity Documnet)</label>
                <input class="input" type="text" name="iiid" placeholder="Enter your IID" required>
                <label class="lab" for="">Password</label>
                <input class="input" type="password" name="pwd" placeholder="Enter your Password" required>
                <input class="login" type="submit" name="submit" value="Log In">
            </form>
            <h4 align="center">Didn't have an account?  <a class="reg-link" style="text-decoration:none;" href="#">Register</a></h4>
            </div>
        <div class="form2">
            <h1 align="center" style="font-family: 'IBM Plex Mono', monospace;color:#2e1f62">Explore the <b style="color:#5e5ff7;">Best Ideas!</b></h1>
            <hr>
            <form action="iregverify.php" method="POST">
                <label class="lab" for="">Name</label>
                <input class="input" name="name" type="text" placeholder="Enter your Name" required>
                <label class="lab" for="">Email</label>
                <input class="input" name="email" type="email" placeholder="Enter your Email" required>
                <label class="lab" for="">Select Your Gender</label>
                <br>
                <select style="margin:1%;margin-left:3%;" name="gen">
                    <option style="font-family: 'IBM Plex Mono'" value="male" selected>Male</option>
                    <option style="font-family: 'IBM Plex Mono'" value="female">Female</option>
                    <option style="font-family: 'IBM Plex Mono'" value="other">Other</option>
                </select>
                <br>
                <label class="lab" for="">Government ID</label>
                <input name="gov" class="input" type="text" placeholder="Enter any Govt Id(Aadhar card,Pan card,Driving Licence)">
                <label class="lab" for="">Date Of Birth</label>
                <input name="dob" class="input" type="date" placeholder="Enter your date Of Birth" required>
                <label class="lab" for="">Create Your Password</label>
                <input name="pass" class="input" type="password" placeholder="Password" required>
                <input class="login" type="submit" name="submit" value="Sign Up">
            </form>
            <h4 align="center">Already have an account?  <a class="log-link" style="text-decoration:none;" href="#">Login</a></h4>
        </div>

        </div>
    </div>
    <script>
        const k=document.querySelector('.bx2');
        const k1=document.querySelector('.log-link');
        const k2=document.querySelector('.reg-link');
        k2.addEventListener('click',()=>{
            k.classList.add('active');
        });
        k1.addEventListener('click',()=>{
            k.classList.remove('active');
        });
        ScrollReveal().reveal('.box1', { duration: 5000});
        ScrollReveal().reveal('.na', { interval: 400,reset:true});
        ScrollReveal().reveal('.bx2',{ duration: 2000,reset:true});
      </script>    
</body>
</html>