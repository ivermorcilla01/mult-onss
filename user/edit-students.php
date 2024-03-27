<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['ocasuid']==0)) {
header('location:logout.php');
} else{
if(isset($_POST['submit']))
{
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

$id=$_GET['id'];
$sql="update enroll set school_year=:school_year,grade=:grade,lrn=:lrn,returnee=:returnee,psa=:psa, lastname=:lastname,firstname=:firstname,middlename=:middlename,extension=:extension,birthdate=:birthdate,gender=:gender,age=:age,birthplace=:birthplace,disability=:disability,current_address=:current_address,permanent_address=:permanent_address,fa_l=:fa_l,fa_f=:fa_f,fa_m=:fa_m,fa_c=:fa_c,ma_l=:ma_l,ma_f=:ma_f,ma_m=:ma_m,ma_c=:ma_c,g_completed=:g_completed,s_attended=:s_attended,l_yrcompleted=:l_yrcompleted,school_id=:school_id,sem=:sem,track=:track,strand=:strand,apply=:apply,signature=:signature,date=:date where id=:id";
$query=$dbh->prepare($sql);
$query->bindParam(':school_year',$school_year,PDO::PARAM_STR);
$query->bindParam(':grade',$grade,PDO::PARAM_STR);
$query->bindParam(':lrn',$lrn,PDO::PARAM_STR);
$query->bindParam(':returnee',$returnee,PDO::PARAM_STR);
$query->bindParam(':psa',$psa,PDO::PARAM_STR);
$query->bindParam(':lastname',$lastname,PDO::PARAM_STR);
$query->bindParam(':firstname',$firstname,PDO::PARAM_STR);
$query->bindParam(':middlename',$middlename,PDO::PARAM_STR);
$query->bindParam(':extension',$extension,PDO::PARAM_STR);
$query->bindParam(':birthdate',$birthdate,PDO::PARAM_STR);
$query->bindParam(':gender',$gender,PDO::PARAM_STR);
$query->bindParam(':age',$age,PDO::PARAM_STR);
$query->bindParam(':birthplace',$birthplace,PDO::PARAM_STR);
$query->bindParam(':disability',$disability,PDO::PARAM_STR);
$query->bindParam(':current_address',$current_address,PDO::PARAM_STR);
$query->bindParam(':permanent_address',$permanent_address,PDO::PARAM_STR);
$query->bindParam(':fa_l',$fa_l,PDO::PARAM_STR);
$query->bindParam(':fa_f',$fa_f,PDO::PARAM_STR);
$query->bindParam(':fa_m',$fa_m,PDO::PARAM_STR);
$query->bindParam(':fa_c',$fa_c,PDO::PARAM_STR);
$query->bindParam(':ma_l',$ma_l,PDO::PARAM_STR);
$query->bindParam(':ma_f',$ma_f,PDO::PARAM_STR);
$query->bindParam(':ma_m',$ma_m,PDO::PARAM_STR);
$query->bindParam(':ma_c',$ma_c,PDO::PARAM_STR);
$query->bindParam(':g_completed',$g_completed,PDO::PARAM_STR);
$query->bindParam(':s_attended',$s_attended,PDO::PARAM_STR);
$query->bindParam(':l_yrcompleted',$l_yrcompleted,PDO::PARAM_STR);
$query->bindParam(':school_id',$school_id,PDO::PARAM_STR);
$query->bindParam(':sem',$sem,PDO::PARAM_STR);
$query->bindParam(':track',$track,PDO::PARAM_STR);
$query->bindParam(':strand',$strand,PDO::PARAM_STR);
$query->bindParam(':apply',$apply,PDO::PARAM_STR);
$query->bindParam(':signature',$signature,PDO::PARAM_STR);
$query->bindParam(':date',$date,PDO::PARAM_STR);
$query->bindParam(':id',$id,PDO::PARAM_STR);
$query->execute();
echo '<script>alert("Notes has been updated")</script>';
echo "<script>window.location.href ='manage-students.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>ONSS || Update Notes</title>

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet">
</head>

<body>
<div class="container-fluid position-relative bg-white d-flex p-0">

<?php include_once('includes/sidebar.php');?>


<!-- Content Start -->
<div class="content">
<?php include_once('includes/header.php');?>


<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
<div class="row g-4">
<div class="col-sm-12 col-xl-6">
<div class="bg-light rounded h-100 p-4">
<h6 class="mb-4">Update Notes</h6>
<form method="post">
<?php

$id=$_GET['id'];
$sql="SELECT * from enroll where enroll.id=:id";
$query = $dbh -> prepare($sql);
$query->bindParam(':id',$id,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>


<br />
<div class="mb-3">
<label for="exampleInputEmail2" class="form-label">school_year</label>

<input type="text" class="form-control"  name="school_year" value="<?php  echo htmlentities($row->school_year);?>" required='true'>
</div>

<div class="mb-3">
<label for="exampleInputEmail2" class="form-label">grade</label>

<input type="text" class="form-control"  name="grade" value="<?php  echo htmlentities($row->grade);?>" required='true'>
</div>
<div class="mb-3">
<label for="exampleInputEmail2" class="form-label">lrn</label>

<input type="text" class="form-control"  name="lrn" value="<?php  echo htmlentities($row->lrn);?>" required='true'>
</div>

<div class="mb-3">
<label for="exampleInputEmail2" class="form-label">psa</label>

<input type="text" class="form-control"  name="psa" value="<?php  echo htmlentities($row->psa);?>" >
</div>

<div class="mb-3">
<label for="exampleInputEmail2" class="form-label">lastname</label>

<input type="text" class="form-control"  name="lastname" value="<?php  echo htmlentities($row->lastname);?>" required='true'>
</div>

<div class="mb-3">
<label for="exampleInputEmail2" class="form-label">school_year</label>

<input type="text" class="form-control"  name="firstname" value="<?php  echo htmlentities($row->firstname);?>" required='true'>
</div>

<div class="mb-3">
<label for="exampleInputEmail2" class="form-label">middlename</label>

<input type="text" class="form-control"  name="middlename" value="<?php  echo htmlentities($row->middlename);?>" required='true'>
</div>

<div class="mb-3">
<label for="exampleInputEmail2" class="form-label">extension</label>

<input type="text" class="form-control"  name="extension" value="<?php  echo htmlentities($row->extension);?>" required='true'>
</div>

<div class="mb-3">
<label for="exampleInputEmail2" class="form-label">birthdate</label>

<input type="text" class="form-control"  name="birthdate" value="<?php  echo htmlentities($row->birthdate);?>" required='true'>
</div>

<div class="mb-3">
<label for="exampleInputEmail2" class="form-label">gender</label>

<input type="text" class="form-control"  name="gender" value="<?php  echo htmlentities($row->gender);?>" required='true'>
</div>

<div class="mb-3">
<label for="exampleInputEmail2" class="form-label">age</label>

<input type="text" class="form-control"  name="age" value="<?php  echo htmlentities($row->age);?>" required='true'>
</div>

<div class="mb-3">
<label for="exampleInputEmail2" class="form-label">birthplace</label>

<input type="text" class="form-control"  name="birthplace" value="<?php  echo htmlentities($row->birthplace);?>" required='true'>
</div>

<div class="mb-3">
<label for="exampleInputEmail2" class="form-label">disability</label>

<input type="text" class="form-control"  name="disability" value="<?php  echo htmlentities($row->disability);?>" required='true'>
</div>

<div class="mb-3">
<label for="exampleInputEmail2" class="form-label">current_address</label>

<input type="text" class="form-control"  name="current_address" value="<?php  echo htmlentities($row->current_address);?>" required='true'>
</div>

<div class="mb-3">
<label for="exampleInputEmail2" class="form-label">permanent_address</label>

<input type="text" class="form-control"  name="permanent_address" value="<?php  echo htmlentities($row->permanent_address);?>" required='true'>
</div>

<div class="mb-3">
<label for="exampleInputEmail2" class="form-label">fa_lastname</label>

<input type="text" class="form-control"  name="fa_l" value="<?php  echo htmlentities($row->fa_l);?>" required='true'>
</div>

<div class="mb-3">
<label for="exampleInputEmail2" class="form-label">fa_fistname</label>

<input type="text" class="form-control"  name="fa_f" value="<?php  echo htmlentities($row->fa_f);?>" required='true'>
</div>


<div class="mb-3">
<label for="exampleInputEmail2" class="form-label">fa_middlename</label>

<input type="text" class="form-control"  name="fa_m" value="<?php  echo htmlentities($row->fa_m);?>" required='true'>
</div>
<div class="mb-3">
<label for="exampleInputEmail2" class="form-label">fa_contact</label>

<input type="text" class="form-control"  name="fa_c" value="<?php  echo htmlentities($row->fa_c);?>" required='true'>
</div>
<div class="mb-3">
<label for="exampleInputEmail2" class="form-label">ma_lastname</label>

<input type="text" class="form-control"  name="ma_l" value="<?php  echo htmlentities($row->ma_l);?>" required='true'>
</div>
<div class="mb-3">
<label for="exampleInputEmail2" class="form-label">ma_firstname</label>

<input type="text" class="form-control"  name="ma_f" value="<?php  echo htmlentities($row->ma_f);?>" required='true'>
</div>
<div class="mb-3">
<label for="exampleInputEmail2" class="form-label">ma_middlename</label>

<input type="text" class="form-control"  name="ma_m" value="<?php  echo htmlentities($row->ma_m);?>" required='true'>
</div>
<div class="mb-3">
<label for="exampleInputEmail2" class="form-label">g_completed</label>

<input type="text" class="form-control"  name="g_completed" value="<?php  echo htmlentities($row->g_completed);?>" required='true'>
</div>
<div class="mb-3">
<label for="exampleInputEmail2" class="form-label">s_attended</label>

<input type="text" class="form-control"  name="s_attended" value="<?php  echo htmlentities($row->s_attended);?>" required='true'>
</div>
<div class="mb-3">
<label for="exampleInputEmail2" class="form-label">l_yrcompleted</label>

<input type="text" class="form-control"  name="l_yrcompleted" value="<?php  echo htmlentities($row->l_yrcompleted);?>" required='true'>
</div>
<div class="mb-3">
<label for="exampleInputEmail2" class="form-label">school_id</label>

<input type="text" class="form-control"  name="school_id" value="<?php  echo htmlentities($row->school_id);?>" required='true'>
</div>


<div class="mb-3">
<label for="exampleInputEmail2" class="form-label">sem</label>

<input type="text" class="form-control"  name="sem" value="<?php  echo htmlentities($row->sem);?>" required='true'>
</div>

<div class="mb-3">
<label for="exampleInputEmail2" class="form-label">track</label>

<input type="text" class="form-control"  name="track" value="<?php  echo htmlentities($row->track);?>" required='true'>
</div>

<div class="mb-3">
<label for="exampleInputEmail2" class="form-label">strand</label>

<input type="text" class="form-control"  name="strand" value="<?php  echo htmlentities($row->strand);?>" required='true'>
</div>

<div class="mb-3">
<label for="exampleInputEmail2" class="form-label">apply</label>

<input type="text" class="form-control"  name="apply" value="<?php  echo htmlentities($row->apply);?>" required='true'>
</div>

<div class="mb-3">

<label for="exampleInputEmail2" class="form-label">signature</label>

<input type="text" class="form-control"  name="signature" value="<?php  echo htmlentities($row->signature);?>" required='true'>
</div>

<div class="mb-3">

<label for="exampleInputEmail2" class="form-label">signature</label>

<input type="date" class="form-control"  name="date" value="<?php  echo htmlentities($row->date);?>" required='true'>
</div>




<?php $cnt=$cnt+1;}} ?>
<button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>
</div>
</div>
</div>
</div>
<!-- Form End -->


<?php include_once('includes/footer.php');?>
</div>
<!-- Content End -->


<?php include_once('includes/back-totop.php');?>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/chart/chart.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>
</html><?php }  ?>