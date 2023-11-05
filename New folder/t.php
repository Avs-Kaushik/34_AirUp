<?php
session_start();
$host = 'localhost';
$username = 'team';
$password = 'team';
$dbname = 'airup';
$conn = mysqli_connect($host, $username, $password, $dbname);?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <style>
  @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap');
            .head{
            padding:5px;
            display:flex;
            flex-direction: row;
            flex-wrap:wrap;
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
            margin-top:2%;
            height:60px;
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
            position:relative;
            padding-top:20px;
        }
        .na:hover{
            background-color:#F2F7A1;
            color:black;
            position:relative;
            cursor:pointer;
            text-align:center;
            border-radius:35px 0px 35px 0px;
            box-shadow:1px 3px 18px rgba(255, 255, 255, 0.582);
            padding-top:20px;
        }
        #naa{
            text-decoration:none;
            color:#f1ebfc;
            font-size:18px;
            font-family: 'Space Grotesk', sans-serif;
        }
        .na:hover #naa{
            color:black;
            position:relative;
        }
        .na1{
            background-color:#F2F7A1;
            color:black;
            position:relative;
            cursor:pointer;
            text-align:center;
            border-radius:35px 0px 35px 0px;
            box-shadow:1px 3px 18px rgba(255, 255, 255, 0.582);
        }
        .na1 #naa{
          color:black;
          position:relative;
        }
        .fomain {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  width: 100%;
  background-color:#c2dcff;
  border-bottom-left-radius: 40px;
    border-top-right-radius: 40px;
    font-family: 'Comfortaa', cursive;
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
.naa2
{
   font-family: 'Space Grotesk', sans-serif;
background: rgb(63,94,251);
background: linear-gradient(90deg, rgba(63,94,251,1) 0%, rgba(252,70,107,1) 100%);
}
th,tr,td{
    margin:2%;
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
                <div class="na na1"><a id="naa" href="http://localhost/check/homepage.php" >Home</a></div>
                <div class="na na5"><a id="naa" href="" >Hacakthons</a></div>
                <div class="na na3"><a id="naa" href="http://localhost/support/sup.php" >Contact</a></div>
                <div class="na na4"><a id="naa" href="#con" >About</a></div>
                <?php if(!isset($_SESSION['uname'])) {?>
                <div class="na na6"><a id="naa" href="http://localhost/scroll/ilogin.php"><button class="lbt "><span id="naa2">Login</span></button></a></div>
                <?php }
                else {?>
                <div class="na na6"><a id="naa" href="http://localhost/invest/logout.php"><img src="avatar.png" height="40px" width="40px"></a><!--php--></div>
                <?php }?>
              </div>
            </div>
        </div>
    </div>
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img" data-parallax="scroll" data-image-src="int.jpg"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <p>Learn About Us</p>
                            <h2>Worldwide Startup Connections</h2>
                        </div>
                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-2">Mission</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-3">Vision</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="tab-content-1" class="container tab-pane active">
                                    We are a global company. Slowly trying to imporve and bring new ideas onto the air. We connect investors with ideas and bind them with the investments.This page is the investors page where the investor can see various ideas and check about the new idea.
                                </div>
                                <div id="tab-content-2" class="container tab-pane fade">
                                Business refers to an enterprising entity or organization that carries out professional activities. They can be commercial, industrial, or others. For-profit business entities do business to earn a profit, while non-profit ones do it for a charitable mission.

.
                                </div>
                                <div id="tab-content-3" class="container tab-pane fade">
                                    Our work aims to break the vicious cycle of poverty and social isolation and to restore hope for a better future. We believe that every person has the right to access resources and opportunities in order to live and develop with dignity and to become an active and contributing member of our society..
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-home"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">100</h3>
                                <p>Investors</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-charity"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">300</h3>
                                <p>Entrepenuers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-kindness"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">10000</h3>
                                <p>Our Goal</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-donation"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">30</h3>
                                <p>Closed deals</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->
        
        
        <!-- Causes Start -->
        <div class="causes">
            <div class="container">
                <div class="section-header text-center">
                    <p>Bid on</p>
                    <h2>Live Auction</h2>
                </div>
                <div class="owl-carousel causes-carousel">
                    <?php
                $res = mysqli_query($conn,"select * from ideas");
                if (mysqli_num_rows($res) > 0) {
                    $c=0;
                    $imgs=["hel.jpg","hem.jpg","hen.jpg","facts.jpg","hel.jpg","hem.jpg","hen.jpg","facts.jpg"];
                    while ($i = mysqli_fetch_assoc($res))
                     {
                        $tempis=$imgs[$c];
                        $c++;?>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/<?=$tempis?>" width="400px" height="300px" alt="Image">
                        </div>
						<div class="causes-progress">
                        <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="<?=$i['eqt']?>" aria-valuemin="0" aria-valuemax="100">
                                    <?php echo"<span>{$i['eqt']}</span>";?>
                                </div>
                            </div>
						<div class="progress-text">
							<?php echo"<p><strong>Expires in:</strong>{$i['day']}d</p>";?>
							<?php echo"<p><strong>Orginal ask:</strong>{$i['amt']}</p>";?>
                            <?php echo"<p><strong>Equity:</strong>3%</p>";?>
						</div>
                        </div>
                        <div class="causes-text">
                            <?php echo"<h3>{$i['idea_name']}</h3>";?>
                            <?php echo"<p>{$i['prob_st']}</p>";?>
                        </div>
                        <div class="causes-btn">
                            <a class="btn btn-custom">Learn More</a>
                            <a class="btn btn-custom" href='m.php?a=<?=$i['sid']?>'>Bid Now</a>
                        </div>
                    </div>
                    <?php }}?>
                </div>
            </div>
        </div>
        <!-- Causes End -->        
        <!-- Event Start -->
        <div class="event">
            <div class="container">
                <div class="section-header text-center">
                    <p>Be ready</p>
                    <h2>Upcoming Events</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="event-item">
                            <img src="img/g.jpg" alt="Image">
                            <div class="event-content">
                                <div class="event-meta">
                                    <p><i class="fa fa-calendar-alt"></i>17-April-2023</p>
                                    <p><i class="far fa-clock"></i>8:00 - 10:00</p>
                                    <p><i class="fa fa-map-marker-alt"></i>India</p>
                                </div>
                                <div class="event-text">
                                    <h3>The Infinity Store</h3>
                                    <p>
                                        Rip-off version of swiggy-instamart which delivers groceries from local stores.
                                    </p>
                                    <a class="btn btn-custom" href="">Alert</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="event-item">
                            <img src="img/g1.jpg" alt="Image">
                            <div class="event-content">
                                <div class="event-meta">
                                    <p><i class="fa fa-calendar-alt"></i>21-April-2023</p>
                                    <p><i class="far fa-clock"></i>8:00 - 10:00</p>
                                    <p><i class="fa fa-map-marker-alt"></i>India</p>
                                </div>
                                <div class="event-text">
                                    <h3>The Smart Ambulance</h3>
                                    <p>
                                        An ambulance which dodges the traffic and reaches hospital within time.
                                    </p>
                                    <a class="btn btn-custom" href="">Alert</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event End -->


        <!-- Team Start -->
        
        
        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header text-center">
                    <p>Testimonial</p>
                    <h2>What people are talking about our website</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="img/swami-ramdev.png" alt="Image">
                            <div class="testimonial-name">
                                <h3>Yoga Guru Baba Ramdev</h3>
                                <p>Co-founder, Patanjali Ayurved Ltd.</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                                
            Narayan Seva Sansthan has treated around 3,70,000 polio afflicted children to stand on their own and made a world record. This is a pious ritual of Flawless Service in which Narayana Seva Sansthan is continuously engaged.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="img/1.png" alt="Image">
                            <div class="testimonial-name">
                                <h3>mukesh dhirubhai ambani</h3>
                                <p>Reliance Industries Ltd.</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                               
            I had heard a lot about Narayana Seva Sansthan and I respect them for their wonderful work.
            My blessings are with you and hope you have a good treatment.
            
        
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="img/ravishankar-thumb.png" alt="Image">
                            <div class="testimonial-name">
                                <h3>SRI SRI RAVI SHANKAR</h3>
                                <p>Founder art of living foundation</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Narayan Seva Sansthan is working hard day and night for the welfare of the poor mass community.
 
            Narayan Seva Sansthan has only one motto i.e; to bring back the happiness on the faces of more and more people, serving people of our own country and making their lives better and easier.
            
                            </p>
                        </div>
                    </div>

                     <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="img/Modi.jpg" alt="Image">
                            <div class="testimonial-name">
                                <h3>Narendra Modi</h3>
                                <p>Prime Minister</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                               The world is seeing India with a ray of hope and our diaspora can play a crucial role in further spreading it
            
                            </p>
                        </div>
                    </div>
                   
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        <!-- Footer Start -->
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
      <table id="to">
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
        <img src ="infi.png" height="90px" width="90px" style="margin-left:-15%;">
       <p style="text-align: center ; font-size: small;">Copyright &copy; 2023, All Right Reserved <a href="#">Team INFINITI</a></p>
    </div>
    </div>
  </footer>
        <!-- Footer End -->
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/parallax/parallax.min.js"></script>
        <script>
			function getTimeRemaining(endtime) {
		const total = Date.parse(endtime) - Date.parse(new Date());
		const seconds = Math.floor((total / 1000) % 60);
		const minutes = Math.floor((total / 1000 / 60) % 60);
		const hours = Math.floor((total / (1000 * 60 * 60)) % 24);
		const days = Math.floor(total / (1000 * 60 * 60 * 24));
		
		return {
		total,
		days,
		hours,
		minutes,
		seconds
		};
		}
		
		function initializeClock(id, endtime) {
		const clock = document.getElementById(id);
		const daysSpan = clock.querySelector('.days');
		const hoursSpan = clock.querySelector('.hours');
		const minutesSpan = clock.querySelector('.minutes');
		const secondsSpan = clock.querySelector('.seconds');
		
		function updateClock() {
		const t = getTimeRemaining(endtime);
		
		daysSpan.innerHTML = t.days;
		hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
		minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
		secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
		
		if (t.total <= 0) {
		clearInterval(timeinterval);
		}
		}
		
		updateClock();
		const timeinterval = setInterval(updateClock, 1000);
		}
		
		const deadline = '2023-04-15T00:00:00'; // set the deadline date and time
		initializeClock('countdown', deadline); </script>
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
