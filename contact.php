
<?php
    include('conn.php');
    session_start();
    if (!isset($_SESSION['userid']) ||(trim ($_SESSION['userid']) == '')) {
    dheader('location:index.php');
    exit();
    }
    
    $uquery=mysqli_query($conn,"SELECT * FROM `user` WHERE userid='".$_SESSION['userid']."'");
    $urow=mysqli_fetch_assoc($uquery);
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
<title>Online Learning System </title>

<link rel="manifest" href="site.webmanifest">

<!-- CSS here -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/slicknav.css">
<link rel="stylesheet" href="assets/css/flaticon.css">
<link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
<link rel="stylesheet" href="assets/css/gijgo.css">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/animated-headline.css">
<link rel="stylesheet" href="assets/css/magnific-popup.css">
<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
<link rel="stylesheet" href="assets/css/themify-icons.css">
<link rel="stylesheet" href="assets/css/slick.css">
<link rel="stylesheet" href="assets/css/nice-select.css">
<link rel="stylesheet" href="assets/css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body style="background-color: #ebe3e3;">
<?php include_once('includes/header.php');?>
<!-- Header End -->
<main>
<!--? slider Area Start-->
<section class="slider-area slider-area2">
<div class="slider-active">
<!-- Single Slider -->
<div class="single-slider slider-height2">
<div class="container">
<div class="row">
    <div class="col-xl-8 col-lg-11 col-md-12">
        <div class="hero__caption hero__caption2">
            <h1 data-animation="bounceIn" data-delay="0.2s">Contact</h1>
            <!-- breadcrumb Start-->

            

            <!-- breadcrumb End -->
        </div>
    </div>
</div>
</div>          
</div>
</div>
</section>
 <style type="text/css">
  .breadcrumb{
    height: 50px;
    align-items: center;
    background:linear-gradient(to bottom, #071c6f 0%, #a1a6be 100%);

  }
  .breadcrumb a{
    color: white;
    margin-left: 30px;


  }
   .men{
    .menubar{background: url(img/mab.jpg) ;
    background-blend-mode: soft-light;
    background-color: #9c9393;
    background-size: cover;
  }
     .breadcrumb{
      color: black;
      background-color: black;
     }
  

</style>
<nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          
                    <li class="breadcrumb-item"><a href="notes.php">K to 12</a></li>



                </ol>

            </nav>
<div class="men"><div class="menubar"><div class="core">

<!-- Courses area start -->
<div class="courses-area section-padding40">
<div class="container">
<div class="row justify-content-center">
<div class="col-xl-7 col-lg-8">
<div class="section-tittle text-center mb-55">

<div class="m" style="text-align:center;">

    <pre style="font-size: 20px; font-weight: bold;">
Contact Information
Location: PUROK 2, MABINI LIPA CTY BATANGAS
FB: DEPED TAYO MABINI ELEMENTARY SCHOOL- LIPA CITY
Number: (O43) 726-5118
Email: Mabinielementaryschool1109680 @gmail.com

  </pre></div></div></div></div></div></div></div></div>
   <?php include_once('footer.php');?>
<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="./assets/js/jquery.barfiller.js"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->    
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>