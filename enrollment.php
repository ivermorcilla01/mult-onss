<?php
session_start();
error_reporting(0);
$conn=new PDO('mysql:host=localhost; dbname=onssdb', 'root', '') or die(mysql_error());

if(isset($_POST['submit'])!=""){

$school_year = $_POST['school_year'];
$grade = $_POST['grade'];
$lrn = $_POST['lrn'];
$returnee = $_POST['returnee'];
 $psa=$_FILES['file']['name'];
  $size=$_FILES['file']['size'];
  $type=$_FILES['file']['type'];
  $temp=$_FILES['file']['tmp_name'];
  $lastname = $_POST['lastname'];
  $firstname = $_POST['firstname'];
  $middlename = $_POST['middlename'];
  $extension = $_POST['extension'];
  $birthdate = $_POST['birthdate'];
   $gender = $_POST['gender'];
    $age = $_POST['age'];
     $birthplace = $_POST['birthplace'];
      $disability = $_POST['disability'];
      $current_address = $_POST['current_address'];
   $permanent_address = $_POST['permanent_address'];
  
  $fa_l = $_POST['fa_l'];
  $fa_f = $_POST['fa_f'];
  $fa_m = $_POST['fa_m'];
  $fa_c = $_POST['fa_c'];
  $ma_l = $_POST['ma_l'];
  $ma_f = $_POST['ma_f'];
  $ma_m = $_POST['ma_m'];
  $ma_c = $_POST['ma_c'];
  $g_completed = $_POST['g_completed'];
  $s_attended = $_POST['s_attended'];
  $l_yrcompleted = $_POST['l_yrcompleted'];
  $school_id = $_POST['school_id'];
  $sem = $_POST['sem'];
  $track = $_POST['track'];
  $strand = $_POST['strand'];
  $apply = $_POST['apply'];
  $signature = $_POST['signature'];
  $date = $_POST['date'];

  
  

//$signature = $_POST['signature'];
//$dates = $_POST['dates'];




 $move =  move_uploaded_file($temp,"upload/".$psa);
 if($move){
    $query=$conn->query("insert into enroll(school_year,grade,lrn,returnee,psa,lastname,firstname,middlename,extension,birthdate,gender,age,birthplace,disability,current_address,permanent_address,fa_l,fa_f,fa_m,fa_c,ma_l,ma_f,ma_m,ma_c,g_completed,s_attended,l_yrcompleted,school_id,sem,track,strand,apply,signature,date)values('$school_year','$grade','$lrn','$returnee','$psa','$lastname','$firstname','$middlename','$extension','$birthdate','$gender','$age','$birthplace','$disability','$current_address','$permanent_address','$fa_l','$fa_f','$fa_m','$fa_c','$ma_l','$ma_f','$ma_m','$ma_c','$g_completed','$s_attended','$l_yrcompleted','$school_id','$sem','$track','$strand','$apply','$signature','$date')");
    if($query){


    header("location:enrollment.php");
    }
    else{

    die(mysql_error());
    }
 }

}
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

<body>
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
            <h1 data-animation="bounceIn" data-delay="0.2s">Enrollment</h1>
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
    <h2>Enrollment System</h2>
  
</div>
</div>
</div>

               <form class="forms" enctype="multipart/form-data" action="" name="form" method="post" autocomplete="off" >
                 <div style="text-align:center;">
        <span class="step" id = "step-1">1</span>
        <span class="step" id = "step-2">2</span>
      
      </div>
            
        <div class="tab" id="tab-1">            <div class="mb-3">
                <label for="exampleInputEmail2" class="form-label" required=true>School Year</label>
                <input type="text"   class="form-control"  name="school_year" value="" >

             
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">Grade Level To enroll</label>
                <input type="Number" class="form-control"  name="grade" value="" required='true'>

             
            </div>
<div class="mb-3">
               <select class="form-control" name="lrn"><option>LRN</option><option>Yes</option><option>NO</option></select>

             
            </div>
<div class="mb-3">
                 <select class="form-control" name="returnee"><option>Returnee</option><option>Yes</option><option>NO</option></select>
  </div>
<div class="mb-3"><br><br><br><br>
                <label for="exampleInputEmail2" class="form-label">PSA</label>
                <input type="file" class="form-control"  name="file" value="" >

             
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">lastname</label>
                <input type="text"   class="form-control"  name="lastname" value="" ></div>

<div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">firstname</label>
                <input type="text"   class="form-control"  name="firstname" value="" >
</div>
<div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">middlename</label>
                <input type="text"   class="form-control"  name="middlename" value="" >
</div>
<div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">extension</label>
                <input type="text"   class="form-control"  name="extension" value="" >
</div>
<div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">birthdate</label>
                <input type="date"   class="form-control"  name="birthdate" value="" >
</div>
<div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">gender</label>
                <input type="text"   class="form-control"  name="gender" value="" >
</div>
<div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">age</label>
                <input type="Number"   class="form-control"  name="age" value="" >
</div>
<div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">birthplace</label>
                <input type="text"   class="form-control"  name="birthplace" value="" >
</div>

<div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">disability</label>
                <input type="text"   class="form-control"  name="disability" value="" >
</div>
<div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">current_address</label>
                <input type="text"   class="form-control"  name="current_address" value="" >
</div>
<div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">permanent_address</label>
                <input type="text"   class="form-control"  name="permanent_address" value="" >
</div>
<div class="index-btn-wrapper">
          <div class="index-btn" onclick="run(1, 2);">Next</div>
        </div>
</div>

<div class="tab" id="tab-2">
<div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">father Last Name</label>
                <input type="text"   class="form-control"  name="fa_l" value="" >
</div><div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">First Name</label>
                <input type="text"   class="form-control"  name="fa_f" value="" >
</div><div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">Middle Name</label>
                <input type="text"   class="form-control"  name="fa_m" value="" >
</div><div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">Contact</label>
                <input type="text"   class="form-control"  name="fa_c" value="" >
</div><div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">Last Name</label>
                <input type="text"   class="form-control"  name="ma_l" value="" >
</div><div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">First Name</label>
                <input type="text"   class="form-control"  name="ma_f" value="" >
</div><div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">Middle Name</label>
                <input type="text"   class="form-control"  name="ma_m" value="" >
</div><div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">Contact</label>
                <input type="text"   class="form-control"  name="ma_c" value="" >
</div><div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">Last Grade Level Completed</label>
                <input type="text"   class="form-control"  name="g_completed" value="" >
</div><div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">Last School Attended</label>
                <input type="text"   class="form-control"  name="s_attended" value="" >
</div><div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">Last School Year Completed</label>
                <input type="text"   class="form-control"  name="l_yrcompleted" value="" >
</div><div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">School ID</label>
                <input type="text"   class="form-control"  name="school_id" value="" >
</div><div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">Semester</label>
                <input type="text"   class="form-control"  name="sem" value="" >
</div><div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">Track</label>
                <input type="text"   class="form-control"  name="track" value="" >
</div><div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">Strand</label>
                <input type="text"   class="form-control"  name="strand" value="" >
</div><div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">Choose</label>
                <input type="text"   class="form-control"  name="apply" value="" >
</div><div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">Signature</label>
                <input type="text"   class="form-control"  name="signature" value="" >
</div><div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">Date</label>
                <input type="text"   class="form-control"  name="date" value="" >
</div>





                    <input type="submit" name="submit" id="submit" value="Submit" />
                    <div class="index-btn-wrapper">
          <div class="index-btn" onclick="run(2, 1);">Previous</div>
          <div class="index-btn" onclick="run(2, 3);">Next</div>
        </div>
            </form>
        <br />
        <br />
    </div>
       
    </div>
    </div>
    </div></form></div></div></div>
</body>
</html>


<style type="text/css">
   body{
  background: #ebe3e3;
}

.forms{
  background: #ffffff;
  margin: 0px auto;
 
  padding: 15px 40px 40px 40px;
  width: 70%;
}

.tab p{
  font-size: 20px;
  margin: 0 0 10px 0;
}

input{
  margin: 10px 0;
  padding: 10px;
  box-sizing: border-box;
  width: 100%;
  font-size: 17px;
  border: 1px solid #aaaaaa;
}

.index-btn-wrapper{
  display: flex;
}

.index-btn{
  margin: 20px 15px 0 0;
  background: #04AA6D;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  cursor: pointer;
  transition: 0.3s;
}

.index-btn:hover{
  opacity: 0.8;
}

.step{
  height: 30px;
  width: 30px;
  line-height: 30px;
  margin: 0 2px;
  color: white;
  background: green;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.25;
}

</style>
<script>
      // Default tab
      $(".tab").css("display", "none");
      $("#tab-1").css("display", "block");

      function run(hideTab, showTab){
        if(hideTab < showTab){ // If not press previous button
          // Validation if press next button
          var currentTab = 0;
          x = $('#tab-'+hideTab);
          y = $(x).find("input")
          for (i = 0; i < y.length; i++){
            if (y[i].value == ""){
              $(y[i]).css("background", "#ffdddd");
              return false;
            }
          }
        }

        // Progress bar
        for (i = 1; i < showTab; i++){
          $("#step-"+i).css("opacity", "1");
        }

        // Switch tab
        $("#tab-"+hideTab).css("display", "none");
        $("#tab-"+showTab).css("display", "block");
        $("input").css("background", "#fff");
      }
    </script>


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