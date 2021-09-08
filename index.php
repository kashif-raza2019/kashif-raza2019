<?php
  //session_start();
   function getIPAddress() {  
    //whether ip is from the share internet  
     if(!emptyempty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!emptyempty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
$ipAdd = getIPAddress();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Kashif Raza | Official Site Soon</title>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center">

      <h1>Website Under Construction</h1>
      <h3 id="webLink">www.kashifraza.tech</h3>
      <h2>I am working hard to improve my website and it will be ready to launch after<br /> Your IP is: <?php echo $ipAdd;?></h2>
      <div class="countdown d-flex justify-content-center" data-count="2021/7/1">
        <div>
          <h3>%D</h3>
          <h4>Days</h4>
        </div>
        <div>
          <h3>%H</h3>
          <h4>Hours</h4>
        </div>
        <div>
          <h3>%M</h3>
          <h4>Minutes</h4>
        </div>
        <div>
          <h3>%S</h3>
          <h4>Seconds</h4>
        </div>
      </div>

      <div class="social-links text-center">
        <a href="https://twitter.com/KashifR67453721" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="https://www.linkedin.com/in/kashif-raza-994232189/" class="linkedin"><i class="icofont-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End #header -->

  <main id="main">
    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact Me</h2>
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="icofont-google-map"></i>
                  <h4>Location:</h4>
                  <p>Indore<br>452001, MP (INDIA)</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p  class="mailLink"><a href="mailto: 19btc037@ietdavv.edu.in" style="text-decoration: none; color: #fff;">19btc037@ietdavv.edu.in</a></p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p>+91 7748922182</p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row  justify-content-center">

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Kashif Raza</span></strong>. All Rights Reserved 2021-2022
      </div>
    </div>
  </footer><!-- End #footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/jquery-countdown/jquery.countdown.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
