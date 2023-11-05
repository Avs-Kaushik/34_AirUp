<?php
session_start();
?>
<!doctype html>
<html>

<head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Secular+One&display=swap');
</style>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poiret+One&display=swap');
</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@800&display=swap" rel="stylesheet">
    <title>Entreprenuer's-Home</title>
    <script src="https://unpkg.com/scrollreveal@4"></script>
<style>
   @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk&display=swap');
           .head{
            padding:5px;
            display:flex;
            flex-direction: row;
            flex-wrap:wrap;
        }
        body
        {
         background-color: #fefcfe;
          background-size: 100% 30%;
          background-repeat: no-repeat;
          background-image: url('https://downloader.la/temp/[Downloader.la]-643473ed84b05.jpg');
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
        }
        .na{
            flex:1;
            margin:3%;
            padding:5px;
            text-align: center;
            cursor:pointer;
            width:400px;
            position:relative;
            top:20px;
            height:30px;
            padding-top:10px;
        }
        #naa{
            text-decoration:none;
            color:#f1ebfc;
            font-size:18px;
            font-family: 'Space Grotesk', sans-serif;
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
.lbt
{
  margin-top:22%;
  font:10px;
  background:transparent;
  border:0.1px solid white;
  color:white;
}
.lbt:hover{
  background-color:blue;
  cursor:pointer;
}
.naa2
{
   font-family: 'Space Grotesk', sans-serif;
background: rgb(63,94,251);
background: linear-gradient(90deg, rgba(63,94,251,1) 0%, rgba(252,70,107,1) 100%);
}

* {box-sizing: border-box;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  width: 100%;
  position: relative;
 height: 50%;
border-top-right-radius: 50px;
border-bottom-left-radius: 50px;
    background-color:black;
    margin-top: -0.5%;
}
.img1
{

border-bottom-left-radius: 50px;
}

/* Caption text */
.text {
  color: black;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
}



/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
  position:relative;
  top:20px;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}


.eout {
    display: flex;

}
.tx 
{
  font-family: 'Poiret One', cursive;
  font-size:60px;
}
.el {
 background-image: url('left.png');
 height:720px;
 background-repeat: no-repeat;
 background-size: 100%;
    flex: 1;
  margin-left: 1%;
  margin-top:1%;
  margin-bottom: 1%;
}  
.er {
    flex: 1;
    margin-top:1%;
  margin-bottom: 1%;
  background-image: url('https://cliply.co/wp-content/uploads/2019/03/371903250_ROCKET_LAUNCH_400px.gif');

background-size: 100%;
}  
.el{
    margin-right: 20px;
} 
.er {
    margin-right: 20px;
} 
.na6
{
  margin-top: -1%;
  position:relative;
  top:20px;
}
.afterimg1,.afterimg2,.afterimg3
{
  height:500px;
  float:right;
  background-color: whitesmoke;
  width: 27.8%;
  border-top-right-radius: 50px;
}
.afterimg1
{
  font-family: 'Poiret One', cursive;
  font-size: 25px;
  background: #aa4b6b;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3b8d99, #6b6b83, #aa4b6b);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #3b8d99, #6b6b83, #aa4b6b); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
.b1
{
  margin-top: 10%;
  margin-left:5%;
  margin-right: 5%;
  background: #2596be;
  color: white;
  padding: 5%;
  text-align: center;
  border-top-right-radius: 35px;
  border-bottom-left-radius:35px ;
}
.b2
{
  margin-top: 15%;
  margin-left:5%;
  margin-right: 5%;
  background: #beabe3;
  color: white;
  padding: 5%;
  text-align: center;
  border-top-right-radius: 35px;
  border-bottom-left-radius:35px ;
}
.b1t2
{
  margin-top: 10%;
  margin-left:5%;
  margin-right: 5%;
  background: #abdbe3;
  color: white;
  padding: 5%;
  height: 120px;
  text-align: center;
  background-image: url(https://i.vimeocdn.com/video/979321217-be2e9f80c0c92912d9f064b6f08148960a725bddf359223133b9e10a382bcea0-d_640);
 border-radius: 20px;
 background-size: 100%;
}
.b1t3
{
  margin-top: 10%;
  margin-left:5%;
  margin-right: 5%;
  background: #eeeee4;
  color: white;
  padding: 5%;
  text-align: center;
  border-radius: 20px;
  background-image: url(https://images.unsplash.com/photo-1507679799987-c73779587ccf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80);
  height: 120px;
  background-size: 100%;
}
.afterimg2
{
  font-family: 'Poiret One', cursive;
  font-size: 25px;
  background: #659999;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #f4791f, #659999);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #f4791f, #659999); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
.afterimg3
{
  font-family: 'Poiret One', cursive;
  font-size: 25px;
  background: #654ea3;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #eaafc8, #654ea3);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #eaafc8, #654ea3); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
.b3 
{
  margin-top: 15%;
  margin-left:5%;
  margin-right: 5%;
  background-image:url('https://media1.giphy.com/media/v1.Y2lkPTc5MGI3NjExZTEwNjYyNDE4MDRjZjRmYzJlNDQyYWE4MzUzZDIyNTFhMTMyNWVlMCZjdD1n/QLcCBdBemDIqpbK6jA/giphy.gif');
  color: white;
  padding: 5%;
  text-align: center;
  border-top-right-radius: 35px;
  border-bottom-left-radius:35px ;
  height: 190px;
}
.b2t2
{
  margin-top: 10%;
  margin-left:5%;
  margin-right: 5%;
  background: #abdbe3;
  color: white;
  padding: 5%;
  height: 190px;
  text-align: center;
  background-image: url(https://downloader.la/temp/[Downloader.la]-6435287b02939.jpg);
 border-radius: 20px;
 background-size: 100%;
}
.b3t3
{
  margin-top: 10%;
  margin-left:5%;
  margin-right: 5%;
  background: #abdbe3;
  color: white;
  padding: 7%;
  height: 70px;

  text-align: center;
  background-image: url(https://downloader.la/temp/[Downloader.la]-6435318031520.jpg);
 border-radius: 20px;
 background-size: 100%;
}
ul {
  list-style-type: none; /* Remove bullets */
  padding: 20%; /* Remove padding */
  margin-top: -3%; /* Remove margins */
}
.er{
  visibility:hidden;
  
}
.widget.e2r.e2o{
  visibility:hidden;
}
.er
{
  background-repeat: no-repeat;
 
}

.e2o
{
  display: flex;


height: 400px;

}
.video
{
  margin-top: -18%;
}
.e2l
{
  border-top-right-radius: 45px;
  border-bottom-left-radius:45px ;
  margin-right: 20px;
  flex: 1;
    font-family: 'Poiret One', cursive;
    margin-top:1%;
  margin-bottom: 1%;
  margin-left: 1%;
}
.intxt
{
background-color: white;
margin-left: 12%;
margin-top: -1.0%;
margin-right: 2%;
width:482px;
height:386px;
background-image: url(entdesp.png);
background-size: 100%;
border-top-right-radius: 45px;
  border-bottom-left-radius:45px ;
  font-family: 'Secular One', sans-serif;
}
.te 
{
  font-family: 'Secular One', sans-serif;
  margin-left: 2%;
  margin-top: 2%;
  margin-right: 2%;
  margin-bottom: 2%;
}
html
{
  scroll-behavior: smooth;
}
.na5,.na3,.na4,.na1
{
  margin-top:0.2%;
  position:relative;
  top:20px;
}
.e2r 
{
  font-family: 'Poiret One', cursive;

  margin-right: 1px;
  flex: 1;
  margin-top:1%;
  margin-bottom: 1%;
}
.btt 
{
  height:30px;
  border-radius: 10px;
  border: none;
  width: 25%;
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
                <div class="na na5"><a id="naa" href="http://localhost/form/courses.php">Hacakthons</a></div>
                <div class="na na3"><a id="naa" href="">Contact</a></div>
                <div class="na na4"><a id="naa" href="#">About</a></div>
                <?php if (empty($_SESSION["uname"])) {?>
                <div class="na na6"><a id="naa" href="g.php"><button class="lbt"><span id="naa2">Login</span></button></a></div>
                <?php }
                else {?>
                <div class="na na6"><a id="naa" href="pf.php"><img src="avatar.png" height="40px" width="40px"></a><!--php--></div>
                <?php }?>
              </div>
            </div>
        </div>
    </div>
<br>
    <div class="slideshow-container">

<div class="mySlides fade">
  <img class="img1" src="https://images.unsplash.com/photo-1518314916381-77a37c2a49ae?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80"height="500px" width="900px " >
  <div class="afterimg1">
   
  <div class="b1"> 
    Innovation Support <img src="https://cdn-icons-png.flaticon.com/512/6941/6941697.png" height="25" width="25">
  </div >
  <div class="b1t2">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br><br>
<a href="http://localhost/support/sup.php"><button style="border:none; height:20px; border-radius:10px; 

background: #b92b27;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #1565C0, #b92b27);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #1565C0, #b92b27); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

color:white; ">From AirUp-Learn More</button></a>
  </div>
  <div class="b1t3">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br><br>
<a href="http://localhost/support/sup.php"><button style="border:none; height:20px; border-radius:10px; 
background: #0F2027;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #2C5364, #203A43, #0F2027); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

color:white; ">From Investors-Learn More</button></a>
  </div>
  </div>
  </div>

</div>

<div class="mySlides fade">
  <img class="img1"src="https://images.unsplash.com/photo-1606857521015-7f9fcf423740?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" height="500px" width="900px ">
  <div class="afterimg2">
    
  <div class="b2">
    Developer Support <img src="https://cdn-icons-png.flaticon.com/512/6941/6941697.png" height="25" width="25">
  </div >
  <div class="b2t2">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br><br>
<a href="http://localhost/support/sup.php"><button style="border:none; padding:10px;height:40px; border-radius:10px; 

background: #8360c3;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #2ebf91, #8360c3);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #2ebf91, #8360c3); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

color:white; ">From AirUp-Learn More</button></a>
  </div>

  </div>
</div>

<div class="mySlides fade">
  <img class="img1"src="https://downloader.la/temp/[Downloader.la]-6434fa01984d8.jpg"  height="500px" width="900px ">
  <div class="afterimg3">
  <div class="b3">
    Innovate
  </div >
  <div class="b3t3">

<a href="#e2o"><button style="border:none; height:30px; width:100px; padding:5px;border-radius:10px; 
background: #74ebd5;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #ACB6E5, #74ebd5);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #ACB6E5, #74ebd5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

font-family: 'Poiret One', cursive;
 ">Enroll Now</button></a>
  </div>

  </div>

</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>
<br><br><br><br><br>
   <div class="eout">

  <div class="el">
  
  </div>
  
  <div class="er">
   <span class="tx">
   <ul>
  <li class="widget">Define</li>
  <li class="widget">&nbsp;&nbsp;&nbsp;|</li>
  <li class="widget">Design</li>
  <li class="widget">&nbsp;&nbsp;&nbsp;|</li>
  <li class="widget">Develop</li>
  <li class="widget">&nbsp;&nbsp;&nbsp;|</li>
  <li class="widget">Deploy</li>
</ul>  
  </span>
  </div>
   </div>

<div class="e2o" id="e2o">

<div class="e2l">

<div class="intxt">
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;
<a href="http://localhost/form/idea_sub.php"><button class="btt">Submit Now</button></a>

</div>


</div>

<div class="e2r"> 
<video width="650" height="600" class="video"autoplay loop muted>
  <source src="video1.mp4" type="video/mp4">
</video>
</div>

 </div>
 <script>
    ScrollReveal().reveal('.e2o', { duration: 5000 ,reset:true});

  ScrollReveal().reveal('.er', { duration: 5000 ,reset:true});
  ScrollReveal().reveal('.widget', { interval: 400 ,reset:true});
  ScrollReveal().reveal('.e2r', { interval: 5000 ,reset:true});

 </script>

</body>
<br>
<footer>
    <div class="fomain" id="con">
      <div class="fo1">
        <div class="bo bo1"><span id="ft">АЇЯ</span><span id="ft1">UP</span></div>
        <b><pre>
     An Startup based investment comapany,
     which acts as an medium between Investor
     and Entreprenuer.
        </pre></b>   
  
        <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Follow us:</h3>
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
       &nbsp;&nbsp;&nbsp;<input class="in" placeholder="  Email Address"type="text" height="40px" width="40px">
        <img src="https://cdn-icons-png.flaticon.com/512/9716/9716941.png" height="40px" width="40px">
        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src ="infi.png" height="90px" width="90px" >
       <p style="text-align: center ; font-size: small;">Copyright &copy; 2023, All Right Reserved <a href="#">Team INFINITI</a></p>
    </div>
    </div>
  </footer>
</html>