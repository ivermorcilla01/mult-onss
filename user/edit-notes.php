<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['ocasuid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {

    $filename1=$_POST['filename1'];
    $filename2=$_POST['filename2'];
$filename3=$_POST['filename3'];
$filename4=$_POST['filename4'];
$filename5=$_POST['filename5'];
 $subject=$_POST['subject'];
 $notestitle=$_POST['notestitle'];
 $notesdesc=$_POST['notesdesc'];
  $eid=$_GET['editid'];
$sql="update tblnotes set filename1=:filename1,filename2=:filename2,filename3=:filename3,filename4=:filename4,filename5=:filename5, Subject=:subject,NotesTitle=:notestitle,NotesDecription=:notesdesc where ID=:eid";
$query=$dbh->prepare($sql);
$query->bindParam(':filename1',$filename1,PDO::PARAM_STR);
$query->bindParam(':filename2',$filename2,PDO::PARAM_STR);
$query->bindParam(':filename3',$filename3,PDO::PARAM_STR);
$query->bindParam(':filename4',$filename4,PDO::PARAM_STR);
$query->bindParam(':filename5',$filename5,PDO::PARAM_STR);


$query->bindParam(':subject',$subject,PDO::PARAM_STR);
$query->bindParam(':notestitle',$notestitle,PDO::PARAM_STR);
$query->bindParam(':notesdesc',$notesdesc,PDO::PARAM_STR);
$query->bindParam(':eid',$eid,PDO::PARAM_STR);
 $query->execute();
         echo '<script>alert("Notes has been updated")</script>';
         echo "<script>window.location.href ='manage-notes.php'</script>";
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
                                $eid=$_GET['editid'];
$sql="SELECT * from tblnotes where tblnotes.ID=:eid";
$query = $dbh -> prepare($sql);
$query->bindParam(':eid',$eid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                                

                                <br />
                                <div class="mb-3">
                                    <label for="exampleInputEmail2" class="form-label">Subject</label>
                                   
                                    <input type="text" class="form-control"  name="subject" value="<?php  echo htmlentities($row->Subject);?>" required='true'>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail2" class="form-label">Notes Title</label>
                                    <input type="text" class="form-control"  name="notestitle" value="<?php  echo htmlentities($row->NotesTitle);?>" required='true'>

                                  
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail2" class="form-label">Notes Description</label>
                                    <textarea class="form-control"  name="notesdesc" value="" required='true'><?php  echo htmlentities($row->NotesDecription);?></textarea>
                                </div>
                                 <div class="mb-3">
                                    <label for="exampleInputEmail2" class="form-label">Filename1</label>
                                   
                                    <input type="text" class="form-control"  name="filename1" value="<?php  echo htmlentities($row->filename1);?>" required='true'>
                                
                                   <a href="folder1/<?php echo $row->File1;?>"  target="_blank"> <strong style="color: red">View</strong></a> |
<a href="changefile1.php?editid=<?php echo $row->ID;?>" > &nbsp;<strong style="color: red" target="_blank">Edit</strong></a>

                                </div>
                               
                                    
                                 <div class="mb-3">
                                    <label for="exampleInputEmail2" class="form-label">Filename2</label>
                                   
                                     <input type="text" class="form-control"  name="filename2" value="<?php  echo htmlentities($row->filename2);?>" required='true'>
                                
                                    <a href="folder2/<?php echo $row->File2;?>" target="_blank"> <strong style="color: red">View</strong></a> |
<a href="changefile2.php?editid=<?php echo $row->ID;?>" > &nbsp;<strong style="color: red" target="_blank">Edit</strong></a>
                                   
                                </div>
                                
                                <div class="mb-3">
                                    <label for="exampleInputEmail2" class="form-label">Filename3</label>
                                   
                                    <input type="text" class="form-control"  name="filename3" value="<?php  echo htmlentities($row->filename3);?>" required='true'>
                                
                                    <a href="folder3/<?php echo $row->File3;?>"  target="_blank"> <strong style="color: red">View</strong></a> |
<a href="changefile3.php?editid=<?php echo $row->ID;?>" target="_blank"> &nbsp;<strong style="color: red">Edit</strong></a>
                                   
                                </div>


                                
                                <div class="mb-3">
                                    <label for="exampleInputEmail2" class="form-label">Filename4</label>
                                   
                                    <input type="text" class="form-control"  name="filename4" value="<?php  echo htmlentities($row->filename4);?>" required='true'>
                                
                                    <a href="folder4/<?php echo $row->File4;?>"target="_blank"> <strong style="color: red">View</strong></a> |
<a href="changefile4.php?editid=<?php echo $row->ID;?>" target="_blank"> &nbsp;<strong style="color: red">Edit</strong></a>
                                   
                               
                                    
                                <div class="mb-3">
                                    <label for="exampleInputEmail2" class="form-label">Filename5</label>
                                   
                                    <input type="text" class="form-control"  name="filename5" value="<?php  echo htmlentities($row->filename5);?>" required='true'>
                                
                                    <a href="folder5/<?php echo $row->File5;?>"target="_blank"> <strong style="color: red">View</strong></a> |
<a href="changefile5.php?editid=<?php echo $row->ID;?>" target="_blank"> &nbsp;<strong style="color: red">Edit</strong></a>
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