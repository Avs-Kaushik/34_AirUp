<?php
session_start();
$host='localhost';
$username = 'team';
$password = 'team';
$dbname='airup';
$conn = mysqli_connect($host, $username, $password, $dbname);?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Course Details - Mentor Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
<?php
  $sid=$_SESSION["SID"];
  $res = mysqli_query($conn,"select * from ideas where sid='$sid'");
  $i = mysqli_fetch_assoc($res);?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in" style="background-color:#7358ff ;margin-top: 0px;">
      <div class="container" style="background-color:#7358ff ;">
        <?php echo"<h2>{$i['idea_name']}</h2>" ?>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-8">
            <video autoplay controls height="330.91" width="696" src="<?=$i['file']?>" alt=""></video>
            <h3>Idea Description:</h3>
            <?php echo "<p>{$i['prob_st']}</p>";?>
          </div>
          <div class="col-lg-4">
            <img style="position:relative;left:20%;" src="gf.jpg" height="250px" width="250px">
            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Name</h5>
             <?php echo "<p>{$_SESSION["uname"]}</p>";?>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Profession</h5>
              <?php echo "<p>Student</p>";?>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Orginal Ask</h5>
              <?php echo "<p>{$i['eqt']}% for {$i['amt']}</p>";?>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Expires in</h5>
              <?php echo "<p>{$i['day']}days</p>";?>
            </div>
            <form action="in.php" method="post">
            <input type="hidden" id="custId" name="oaa" value=<?php echo $i["amt"];?>>
            <input type="hidden" id="custId" name="oae" value=<?php echo $i["eqt"];?>>
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Equity Amount</h5>
                <input type="text" name="amt">
              </div>
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Equity</h5>
                <input type="text" name="eqty">
              </div>
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Debt Amount</h5>
                <input type="text" name="debt">
              </div>
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Interest</h5>
                <input type="text" name="interest">
              </div>
              <div class="course-info d-flex justify-content-between align-items-center" >
                  <input type="submit" value="Bid now" style="background-color:#7358ff; color: white; box-shadow: none; border-radius: 7px;border: none;
                  transform: translateX(+200%);">
              </div>
              </form>
          </div>
        </div>

      </div>
    </section>
    <section id="cource-details-tabs" class="cource-details-tabs">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Highlights</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Share Holding</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Business Model</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Revenue Model</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Challenges</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>About</h3>
                    <p class="fst-italic">Artificial neural networks, usually simply called neural networks or neural nets, are computing systems inspired by the biological neural networks</p>
                    <p>Artificial neural networks, usually simply called neural networks or neural nets, are computing systems inspired by the biological neural networks that constitute animal brains. An ANN is based on a collection of connected units or nodes called artificial neurons, which loosely model the neurons in a biological brain.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/course-details-tab-1.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Company Stake Holders</h3>
                    <p class="fst-italic">Artificial neural networks, usually simply called neural networks or neural nets, are computing systems inspired by the biological neural networks</p>
                    <p>Artificial neural networks, usually simply called neural networks or neural nets, are computing systems inspired by the biological neural networks that constitute animal brains. An ANN is based on a collection of connected units or nodes called artificial neurons, which loosely model the neurons in a biological brain.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/course-details-tab-2.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Growth Of the Company</h3>
                    <p class="fst-italic">Artificial neural networks, usually simply called neural networks or neural nets, are computing systems inspired by the biological neural networks</p>
                    <p>Artificial neural networks, usually simply called neural networks or neural nets, are computing systems inspired by the biological neural networks that constitute animal brains. An ANN is based on a collection of connected units or nodes called artificial neurons, which loosely model the neurons in a biological brain.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/course-details-tab-3.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Unique Selling Point(USP)</h3>
                    <p class="fst-italic">Artificial neural networks, usually simply called neural networks or neural nets, are computing systems inspired by the biological neural networks</p>
                    <p>Artificial neural networks, usually simply called neural networks or neural nets, are computing systems inspired by the biological neural networks that constitute animal brains. An ANN is based on a collection of connected units or nodes called artificial neurons, which loosely model the neurons in a biological brain.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/course-details-tab-4.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Technical Issues</h3>
                    <p class="fst-italic">Artificial neural networks, usually simply called neural networks or neural nets, are computing systems inspired by the biological neural networks</p>
                    <p>Artificial neural networks, usually simply called neural networks or neural nets, are computing systems inspired by the biological neural networks that constitute animal brains. An ANN is based on a collection of connected units or nodes called artificial neurons, which loosely model the neurons in a biological brain.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/course-details-tab-5.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Cource Details Tabs Section -->

  </main>
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>