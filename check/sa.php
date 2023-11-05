<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .head{
            padding:5px;
            display:flex;

        }
        body
        {
         background-color: #fefcfe;
          background-size: 100% 30%;
          background-repeat: no-repeat;
        }
        .head{
            padding:5px;
            display:flex;
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
    </style>
</head>
<body>
<div class="head">
        <div class="box box1">&nbsp;&nbsp;<span id="ft">АЇЯ</span><span id="ft1">UP</span></div>
        <div class="box box2">
          <div class="temp">
            <div class="navi">
                <div class="na na1"><a id="naa" href="http://localhost/check/homepage.php">Home</a></div>
                <div class="na na5"><a id="naa" href="">Hacakthons</a></div>
                <div class="na na3"><a id="naa" href="">Contact</a></div>
                <div class="na na4"><a id="naa" href="#con">About</a></div>
                <?php if (!isset($_POST['name'])) {?>
                <div class="na na6"><a id="naa" href=""><button class="lbt "><span id="naa2">Login</span></button></a></div>
                <?php }
                else {?>
                <div class="na na6"><a id="naa" href="http://localhost/scroll/elogin.php"><img src="avatar.png" height="40px" width="40px"></a><!--php--></div>
                <?php }?>
              </div>
            </div>
        </div>
    </div>
</body>
</html>