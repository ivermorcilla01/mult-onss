   
   

<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

.flex-container {
  display: flex;
  flex-direction: row;
  font-size: 14px;
  padding: 10px;
  background-color: #4255A4;
  color: white;
  font-family: "Mulish", sans-serif;
}

.flex-item-left {
  
  padding: 10px;
  flex: 35%;
}

.flex-item-right {
    font-size: 30px;
  
  padding: 30px;
  flex: 60%;
 
}

/* Responsive layout - makes a one column-layout instead of two-column layout */
@media (max-width: 200px) {
  .flex-container {
    flex-direction: column;
  }
}
</style>
</head>
<body>


<div class="flex-container">
  <div class="flex-item-left"><a href="https://educatorsfiles.com/curriculum-guides-deped-k-to-12/
"  alt="kore">SCHOOL CURRICULUM GUIDE 
</a><br>
<a href="https://www.facebook.com/profile.php?id=100069399357174">FACEBOOK PAGE OF BARANGAY MABINI LIPA CITY </a><br>
<a href="https://www.facebook.com/depedsdolipacity/">FACEBOOK OF DEPED OF LIPA </a></div>
  <div class="flex-item-right">Learning Resources Hub</div>
</div>

</body>
</html>




  <!-- Scroll Up -->
  <div >
   <?php include('home.php') ?>
</div>