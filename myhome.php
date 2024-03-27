
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
<link rel="stylesheet" href="fullcalendar/fullcalendar.min.css" />
<script src="fullcalendar/lib/jquery.min.js"></script>
<script src="fullcalendar/lib/moment.min.js"></script>
<script src="fullcalendar/fullcalendar.min.js"></script>

<script>

$(document).ready(function () {
    var calendar = $('#calendar').fullCalendar({
        editable: true,
        events: "fetch-event.php",
        displayEventTime: false,
        eventRender: function (event, element, view) {
            if (event.allDay === 'true') {
                event.allDay = true;
            } else {
                event.allDay = false;
            }
        },
       
       

    });
});


</script>

<style>


#calendar {
    width: 80%;
    margin-top: 70px;
   background-color: #00118380;
   padding: 20px;
   border-radius: 5%;

   
}
#calendar  tr td { color: white;}




</style>
</head>


   


<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <title>Online Learning System </title>
   
    

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
     <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

    
</head>


<style>
.slider {
 overflow: hidden;
 
 height: 110vh;
 position: relative;
}
 
.slider .slide {
 position: absolute;
 top: 0;
 left: 0;
 width: 100%;
 height: 100%;
 background-size: cover;
 background-position: center;
 animation: slider 100.5s infinite;
}
 
.slider .slide:nth-child(1) {
   background-image: url('assets/img/i.jpg');
   animation-delay: -0s;
}

.slider .slide:nth-child(2) {
   background-image: url('assets/img/v.jpg');
   animation-delay: -20s;
}

.slider .slide:nth-child(3) {
   background-image: url('assets/img/a.jpg');
   animation-delay: -40s;
}

.slider .slide:nth-child(4) {
   background-image: url('assets/img/m.jpg');
   animation-delay: -60s;
}

.slider .slide:nth-child(5) {
   background-image: url('assets/img/p.jpg');
   animation-delay: -80s;
}

@keyframes slider {
 0%, 16%, 100% {
   transform: translateX(0);
   animation-timing-function: ease;
 }
 20% {
   transform: translateX(-100%);
   animation-timing-function: step-end;
 }
 96% {
   transform: translateX(100%);
   animation-timing-function: ease;
 }
}</style>
<style type="text/css">
  .breadcrumb{
    height: 50px;
    align-items: center;
    background:linear-gradient(to bottom, #071c6f 0%, #a1a6be 100%);
    margin-top: 215px;

  }
  .breadcrumb a{
    color: white;
    margin-left: 30px;
    

  }</style>
<body class="slider">
    <div class="slide"></div>
    <div class="slide"></div>
    <div class="slide"></div>
    <div class="slide"></div>
    <div class="slide"></div>
  <?php include_once('includes/header.php');?>
   
  <div class="men"><div class="menubar"><div class="core">
    
   
    <main>


<div class="containers">

      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="img/aa.jpg"></div>
          <div class="swiper-slide"><img src="img/bb.jpg"></div>
          <div class="swiper-slide"><img src="img/cc.jpg"></div>
          <div class="swiper-slide"><img src="img/dd.jpg"></div>
          <div class="swiper-slide"><img src="img/ee.jpg"></div>
          <div class="swiper-slide"><img src="img/ff.jpg"></div>
          <div class="swiper-slide"><img src="img/gg.jpg"></div>
          <div class="swiper-slide"><img src="img/hh.jpg"></div>
          <div class="swiper-slide"><img src="img/ii.jpg"></div>
          <div class="swiper-slide"><img src="img/jj.jpg"></div>
          <div class="swiper-slide"><img src="img/kk.jpg"></div>
          <div class="swiper-slide"><img src="img/ll.jpg"></div>
          <div class="swiper-slide"><img src="img/mm.jpg"></div>
          <div class="swiper-slide"><img src="img/nn.jpg"></div>
          <div class="swiper-slide"><img src="img/oo.jpg"></div>
          <div class="swiper-slide"><img src="img/pp.jpg"></div>
          <div class="swiper-slide"><img src="img/qq.jpg"></div>

         ...
         </div>
      <div class="swiper-pagination"></div> 
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

     </div></div><div class="headers"><nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="text-align:center;">
                    <li class="breadcrumb-item" style="text-align:center;"><a href="index.php">Home</a></li>
          
                    <li class="breadcrumb-item"><a href="notes.php">K to 12</a></li>



                </ol>

            </nav> </div>

<div class="main" style="margin-bottom: 300px;">
    
    <div class="left">
 <div class="response"></div>
    <div id='calendar'></div>

        </div>

<div class="right">
    

<div class="contain">
  <div class="mySlides">
    <div class="numbertext">1 / 10</div>
    <img src="img/act1.jpg" style="width:100%" height="240px">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 10</div>
    <img src="img/act2.jpg" style="width:100%"height="240px">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 10</div>
    <img src="img/act3.jpg" style="width:100%"height="240px">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 10</div>
    <img src="img/act4.jpg" style="width:100%"height="240px">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 10</div>
    <img src="img/act5.jpg" style="width:100%"height="240px">
  </div>
   <div class="mySlides">
    <div class="numbertext">6 / 10</div>
    <img src="img/act6.jpg" style="width:100%"height="240px">
  </div>
   <div class="mySlides">
    <div class="numbertext">7 / 10</div>
    <img src="img/act7.jpg" style="width:100%"height="240px">
  </div>
   <div class="mySlides">
    <div class="numbertext">8 / 10</div>
    <img src="img/act8.jpg" style="width:100%"height="240px">
  </div>
   <div class="mySlides">
    <div class="numbertext">9 / 10</div>
    <img src="img/act9.jpg" style="width:100%"height="240px">
  </div>
   
  <div class="mySlides">
    <div class="numbertext">10 / 10</div>
    <img src="img/act10.jpg" style="width:100%"height="240px">
  </div>
    
  
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="img/act1.jpg" style="width:100%;height: 50px;" onclick="currentSlide(1)" alt="Deepest gratitude to Ms. Marie Ignacio for her thoughtful birthday donation of school supplies for Kindergarten and Grade 3 pupils.">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/act2.jpg" style="width:100%;height: 50px;" onclick="currentSlide(2)" alt="Setting the tone for continuous collaboration
SPTA officers first meeting with Ma'am Edith F. Abdon">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/act3.jpg" style="width:100%;height: 50px;" onclick="currentSlide(3)" alt="Announcement">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/act4.jpg" style="width:100%;height: 50px;" onclick="currentSlide(4)" alt="Dates to Remember
DepEd Order No.003, s. 2024">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/act5.jpg" style="width:100%;height: 50px;" onclick="currentSlide(5)" alt="Thank you po Dr. Randy L. Palestina, EPS in TLE, for your invaluable visit and technical assistance at Mabini ES!">
    </div>    
     <div class="column">
      <img class="demo cursor" src="img/act6.jpg" style="width:100%;height: 50px;" onclick="currentSlide(6)" alt="Mabini ES Girl Scouts celebrate World Thinking Day with the theme Our World, Our Thriving Future: The Environment and Global Poverty">
    </div>    
     <div class="column">
      <img class="demo cursor" src="img/act7.jpg" style="width:100%;height: 50px;" onclick="currentSlide(7)" alt="- Congratulations,
Andrea Ysabelle U. Semira for securing the
3rd Place in the 2024 Division Festival of Talents (Story Retelling-English Grade 3),
coached by Mrs. Jelyn P. Aguirre.">
    </div>    
     <div class="column">
      <img class="demo cursor" src="img/act8.jpg" style="width:100%;height: 50px;" onclick="currentSlide(8)" alt="Thank you Dr. Santos Pagcaliwangan for invaluable dental services you provided to students of Mabini ES.  ">
    </div>    
     <div class="column">
      <img class="demo cursor" src="img/act9.jpg" style="width:100%;height: 50px;" onclick="currentSlide(9)" alt="Congratulations on reaching this exciting milestone of retirement, Ma'am Necing💖">
    </div>    
   
   <div class="column">
      <img class="demo cursor" src="img/act10.jpg" style="width:100%;height: 50px;" onclick="currentSlide(10)" alt="Mabini ES is one with the nation in celebrating 2024 National Women's Month
">
    </div>    
   
  </div>
</div>

</div><br><br><br><br><br>
<div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay="0.2s">Online learning<br> platform</h1>
                                    <p data-animation="fadeInLeft" data-delay="0.4s">Free Books Online</p>
                                    <a href="user/signup.php" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s">Join for Free</a>
                                </div></div>
   </div>
<div class="services-area">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="assets/img/icon/icon1.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>60+ UX courses</h3>
                                <p>The automated process all your website tasks.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="assets/img/icon/icon2.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Expert instructors</h3>
                                <p>The automated process all your website tasks.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="assets/img/icon/icon3.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Life time access</h3>
                                <p>The automated process all your website tasks.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
   </main></div></div></div>
   <style type="text/css">
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
   <style type="text/css">
       .boxs{
        margin-top: 150px;
        line-height: 50px;
        /*text-align: center;*/
       
       

       }
       .boxs a{
        color: black;
        text-decoration: underline;

       }
   </style>
<style type="text/css">
    body{
        background-color: #ebe3e3;
    }
p{
    color: white;
}

    img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.contain {
  position: relative;
top: 130px;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
  width: 100%;

}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 9.66%;
  text-indent: 14px;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}</style>
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" sactive", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    <style>
        .main{
            display: flex;
            flex-wrap: wrap;
            color: white;

            
            padding:0px 100px;
        }
        .left{
            flex: 50%;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        .right{
            flex: 50%;
        }
       *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: 'sans-serif', poppins;
       }
       .swiper-wrapper img
       {
        height: 500px;


        
       }
       .containers{
          
          justify-content: center;
          /*background-color: #222 ;*/
          width: 100%;
          padding: 120px;
          padding-top: 150px;
         height: 500px;
          opacity: 0.9;
         

       }

       .swiper{
          width:100%;
          height: fit-content;
       }
       .swiper-slide img{
          width: 100%;
       }
       .swiper .swiper-button-prev, .swiper-button-next{
          color: #f66335;
       }
       .swiper .swiper-pagination-bullet-active{
          background: #f66335;
       }
    </style>
</head>

   
   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
   <script>
      const swiper = new Swiper('.swiper', {
         autoplay:{
            delay:3000,
            disableOnInteraction: false,
         },
         loop: true,
         pagination: {
            el: '.swiper-pagination',
            clickable: true,
         },
         navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
         },
      });
   </script>
  

</body>
</html>


<?php include_once('footer.php');?>
<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    
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