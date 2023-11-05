<?php 
session_start();
?>
<!doctype html>
<html>
<head>
<title>Investor's-Home</title>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poiret+One&display=swap');
body
{
    font-family: 'Poiret One', cursive;
    background-color: whitesmoke;
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
            background-color: #b3f1c0;
            margin-left: 40%;
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

  background-color: white;
 
}
.t
{
  border-left-style: solid;
  border-left-color:#1e81b0;
  border-left-width:thick;
}
.fo2{
  border-top-right-radius: 40px;
    
  flex: 33.33%;
  background-color: white;

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

.naa2
{
   font-family: 'Space Grotesk', sans-serif;
background: rgb(63,94,251);
background: linear-gradient(90deg, rgba(63,94,251,1) 0%, rgba(252,70,107,1) 100%);
}
.lbt
{
  margin-top: -10%;
  border-top-left-radius: 15px;
  border-bottom-right-radius: 15px;
  height: 100%;
  width: 100%;
  border: none;
  background: rgb(63,94,251);
background: linear-gradient(90deg, rgba(63,94,251,1) 0%, rgba(252,70,107,1) 100%);
color:white;
}
.lbt:hover{
  cursor:pointer;
}
.io {
    display: flex;
    background-color: #f1f2f4;
    height: 400px;
    width:100%;
    border-bottom-left-radius: 55px;
  border-top-right-radius: 55px;
  background-image: url(invest.jpg);
  background-repeat: no-repeat;
background-size: 100%;

}

.il {
    flex: 1;

    margin-right: 20px;
}  
.ir {
    flex: 1;
   background-color:#f1f2f4 ;
margin-right: 40px;
    margin-top:4%;
    margin-bottom: 5%;
    background-size:442px 657px;
    background-repeat: no-repeat;
    border-radius: 40px;
}  
.irt
{

    margin-top:50px;
    margin-left: 20px;
    margin-right: 20px;
    font-size:36px;
}
.columns {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  width: 100%;


}
.t 
{
height: 122;
width: 527;
margin-left: 300px;
margin-right: 300px;
font-family: 'Quicksand', sans-serif;
    font-size: 24px;
    text-align: center;
}
.c1 {
  flex: 30.33%;
  margin-top: 1%;
 margin-bottom: 1%;
 margin-right: 1%;
 margin-left: 2%;
  background-image: url(https://images.unsplash.com/photo-1642432556591-72cbc671b707?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80);
  background-size: 100%;
  height:400px;
  border-radius: 35px;
  font-family: 'Poiret One', cursive;
}
.c1b,.c2b,.c3b
{
  height: 35px;
  width: 150px;
  border-radius: 10px;
  border:none;
  
}
.c1b
{
  background: #7F7FD5;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
color:white;
}
.c2b
{
  background: #11998e;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #38ef7d, #11998e);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #38ef7d, #11998e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
color:white;
}
.c3b
{
  background: #654ea3;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #eaafc8, #654ea3);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #eaafc8, #654ea3); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
color:white;
}
.c1t,.c2t,.c3t
{
  border-top-right-radius:45px ;
  border-bottom-left-radius: 45px;
  margin-top: 55%;
  margin-left: 8%;
  margin-right: 8.2%;
 height: 300px;
  background-color:white;
  font-family: 'Poiret One', cursive;
}
.c1t1
{
  background-color: #ddf1f4;
  margin-left:3%;
  margin-right:3%;
  text-align:center;
  border-top-right-radius: 15px;
  border-bottom-left-radius: 15px;

}
.c1t2
{
  margin-left:2%;
  margin-right:1%;
  border-left-color: #abdbe3;
  border-left-style: solid;
  border-left-width:thick;
  text-align: center;
  margin-top: 1%;
  margin-bottom: 1%;
  padding: 10px;
}
.c2t2
{
  margin-top: 1%;
  margin-bottom: 1%;
  margin-left:2%;
  margin-right:1%;
  border-left-color: #1c1c1e;
  border-left-style: solid;
  border-left-width:thick;
  text-align: center;
}
.c2t1
{
  background-color: #ddf1f4;
  margin-left:3s%;
  margin-right:3%;
  text-align:center;
  border-top-right-radius: 15px;
  border-bottom-left-radius: 15px;
  margin-left:3%;
  margin-right:3%;
}
.c3t1
{
  background-color: #ddf1f4;
  margin-left:3%;
  margin-right:3%;
  text-align:center;
  border-top-right-radius: 15px;
  border-bottom-left-radius: 15px;
  margin-left:3%;
  margin-right:3%;
}
.c3t2
{
  margin-top: 1%;
  margin-bottom: 1%;
  margin-left:2%;
  margin-right:1%;
  border-left-color:#71a2a5;
  border-left-style: solid;
  border-left-width:thick;
  text-align: center;
}
h3
{
  font-size: 30px;
            font-family: Arial, Helvetica, sans-serif;
          
            background: linear-gradient(to right, #7f7fd5, #86a8e7, #91eae4); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
}
.c2 {  
  background-size: 100%;
  background-size: 100% 100%; 
  flex: 30.33%;
  margin-top: 1%;
 margin-bottom: 1%;
 margin-right: 2%;
 margin-left: 2%;
 font-family: 'Poiret One', cursive;
  background-color: green;
  height:400px;
  border-radius: 35px;
  background-image: url(https://images.unsplash.com/photo-1642432556591-72cbc671b707?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80);

}

.c3 {
  flex: 30.33%;
  margin-top: 1%;
 margin-bottom: 1%;
 margin-right: 1%;
 margin-left: 1%;
  background-color: pink;
  height:400px;
  border-radius: 35px;
  font-family: 'Poiret One', cursive;
    background-image: url(https://media.zenfs.com/en/moneywise_327/154e156beaa810aadc7362478b7c5eb7);

}
.exo {
    border-radius: 10px;
    display: flex;

}

.exl {
   margin-top: 1%;
   margin-bottom: 1%;
    flex: 1;
    margin-left: 3%;
    margin-right: 20px;
    background-image: url(int.png);
    height: 450px;
   background-size: 100%;
}  
.topbt
{
  height: 30px;
  width:205px;
  background-color: #372b25;
  border-radius: 10px;
  color:white;
  border: none;
  height: 40px;
  color:white;
  background: #B993D6;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #8CA6DB, #B993D6);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #8CA6DB, #B993D6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
.exbt:hover
{
  color:white;
  background: #ddd6f3;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #faaca8, #ddd6f3);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #faaca8, #ddd6f3); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
.topbt:hover
{
  color:white;
  background: black;  /* fallback for old browsers */

}
.exbt
{
  border: none;
  border-radius: 10px;
  width: 150px;
  height: 35px;
  background: #30E8BF;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FF8235, #30E8BF);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FF8235, #30E8BF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
.exr
{
  margin-top: 1%;
   margin-bottom: 1%;
  flex: 1;
  margin-left: -3%;
    margin-right: 35px;
}

</style>
<style>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap');
</style>
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
                <div class="na na4"><a id="naa" href="#con">About</a></div>
                <?php if (empty($_SESSION['iid'])) {?>
                <div class="na na6"><a id="naa" href="http://localhost/scroll/ilogin.php"><button class="lbt "><span id="naa2">Login</span></button></a></div>
                <?php }
                else {?>
                <div class="na na6"><a id="naa" href="logout.php"><img src="avatar.png" height="40px" width="40px"></a><!--php--></div>
                <?php }?>
              </div>
            </div>
        </div>
    </div>
    <br> 
<div class="io">

  <div class="il">
  </div>
  
  <div class="ir">
  <div class="irt">
    <span class="" style="font-size:55px;">Investment at AirUp</span>
    <br>
    <span style="font-size:30px;">
      At AirUp Investors can able to invest into 
      countries best Startup innovations . . .
    </span>
    <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp;<button onclick="go()" class="topbt">Learn  More</button>
  </div>
  </div>
  
</div>
<br><br><br>
<div class="t">
<span style=" font-family: 'Quicksand', sans-serif;">AI and blockchain technology can empower investors to make more accurate predictions about future market trends, enabling them to take preventative measures against financial attacks and safeguard their profits.</span>
</div>
<br><br><br>
<div class="columns">
  <div class="c1">
      <div class="c1t">
        <br>
        <div class="c1t1"><h3>AirUp</h3></div>
   
        <div class="c1t2">
        AI can be a powerful tool for investors, as it can help them to make better investment decisions by analyzing large amounts of data and identifying patterns that humans may not be able to recognize. 

        </div>
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
       &nbsp;<button class="c1b">Learn More</button>
      </div>
  </div>
  <div class="c2">
   <div class="c2t">
   <br>
   <div class="c2t1"><h3>AirUp X Block Chain</h3></div>
   
   <div class="c2t2">
Blockchain technology has created new investment opportunities for investors, particularly through the emergence of cryptocurrencies and blockchain-based platforms. 
   </div>
   <br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
       &nbsp;<button class="c2b">Learn More</button>          
  </div>
  </div>
  <div class="c3">
  <div class="c3t">
  <br>
   <div class="c3t1"><h3>AirUp X HFT</h3></div>
   
   <div class="c3t2">
High-frequency trading (HFT) is a type of algorithmic trading that uses powerful computers and advanced mathematical models to execute trades at very high speeds.    </div>
   <br><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
       &nbsp;<button class="c3b">Learn More</button>          
  </div>
  </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
<div class="exo">

  <div class="exl">
    <br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="#">  <button class="exbt">Explore Now</button></a>
  </div>
  
  <div class="exr">


  <video width="620" height="450" autoplay loop muted >
  <source src="https://media.istockphoto.com/id/1334289823/video/digital-city-futuristic-background-with-stock-exchange-market-candlestick-graph-chart-and.mp4?s=mp4-640x640-is&k=20&c=Af-NQs5kQc6ZHBvozYqQHnBZbe8k63ZJ_HqLeqCHGhA=" type="video/mp4">
  </video>


  </div>
  
</div>


</body>
<br><br>
<footer>
    <div class="fomain" id="con">
      <div class="fo1">
        <div class="bo bo1"><span id="ft">АЇЯ</span><span id="ft1">UP</span></div>
        <b><pre>
     An Startup based investment comapany,
     which acts as an medium between Investor
     and Entreprenuer.
        </pre></b>   
  
        <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Follow us:</h2>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="https://cdn-icons-png.flaticon.com/128/3536/3536505.png" height="40px" width="40px"> &nbsp;&nbsp;&nbsp;<img src="https://cdn-icons-png.flaticon.com/128/2111/2111463.png" height="40px" width="40px">&nbsp;&nbsp;&nbsp; <img height="40px" width="40px" src="https://cdn-icons-png.flaticon.com/512/3256/3256013.png">
      </div>
      <div class="fo2">
        <br>
      <h2>&nbsp;&nbsp;Useful Links</h2>
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
        
      <h2 style="text-align:center;">Subscribe Us</h2>
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input class="in" placeholder="  Email Address"type="text" height="40px" width="40px">
        <img src="https://cdn-icons-png.flaticon.com/512/9716/9716941.png" height="40px" width="40px">
        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src ="infi.png" height="90px" width="90px" >
       <p style="text-align: center ; font-size: small;">Copyright &copy; 2023, All Right Reserved <a href="#">Team INFINITI</a></p>
    </div>
    </div>
  </footer>
</html>
<script>
  function go()
  { 
window.location = "http://localhost/New%20Folder/t.php";  
  }
</script>