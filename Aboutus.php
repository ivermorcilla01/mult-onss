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

</head>

<body >
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
            <h1 data-animation="bounceIn" data-delay="0.2s">About Us</h1>
            <!-- breadcrumb Start-->
<!-- breadcrumb End -->
        </div>
    </div>
</div>
</div>          
</div>
</div>
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

</style>
</section>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          
                    <li class="breadcrumb-item"><a href="notes.php">K to 12</a></li>



                </ol>

            </nav>

          

<div class="men"><div class="menubar">



  <div class="core">
    
<!-- Courses area start -->



<style>
* {box-sizing: border-box;}


/* Slideshow container */
.slideshow-container {
  position: relative;
  background: #f1f1f1f1;
  margin-top: 50px;
  
  
}

/* Slides */
.mySlides {
  display: none;
  padding: 10px;
  text-align: center;

}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}
.prev{
    position: absolute;
  left: 0;
  border-radius: 3px 0 0 3px;

}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
}

/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    padding: 20px;
    background: #ddd;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
.actives, .dot:hover {
  background-color: #717171;
}

/* Add an italic font style to all quotes */
q {font-style: italic;}

/* Add a blue color to the author */
.author {color: cornflowerblue;}
</style>

<style type="text/css">.sht{ padding:50px; }</style>
</head>
 <div class="sht"><?php include_once('teacher.php')  ?>
</div><div class="fk"> <button style="color:black" onclick="openFullscreen(); ">Open PICTURE in Fullscreen Mode</button>

  <div class="slideshows-container" id="m">
   
<div class="mySlide">
    <h2>Ang Aking Pamayanan Noon at Ngayon</h2>
    <img src="img/bgy.jpg" style="width:40%; height: 200px;">
  <h1>Barangay MABINI</h1>
 
</div>

<div class="mySlide">
  <pre>Mga Bumubuo ng Kagamitang Pampagkatuto
     Manunulat:  Anamarie F. Hernandez   Guro II -  Mabini ES
     Mga Tagasuri:   Nelly L. Atienza at Aleli T. Briones
        Pampurok na Koordinator sa Aralin Panlipunan
   
     Tagapamatnubay:    Nelly L. Atienza  Punongguro 
     Mga Tagapamahala:  Editha M. Malihan
  Pansangay na Tagamasid sa Araling Panlipunan
Lorna R. Medrano, Ph.D. Hepe ng Tagapagpaganap ng Kurikulum
      Mga Tagapayo:   Catherine V. Maranan, Ed.D.
OIC- Pangalawang Tagapamanihala ng mga Paaralan
                Homer N. Mendoza
OIC – Pansangay na Tagapamanihala ng mga Paaralan</pre> <q>Paunang Salita
       Ang Aking Pamayanan Noon at Ngayon ay inihanda para sa mga batang mag-aaral sa IKALAWANG BAITANG sa Sangay ng Lungsod ng Lipa.
            Dito ay mauunawaan at malalaman ang mga pangyayari at pagbabagong naganap sa sariling pamayanan mula noon hanggang taong 2020. Tatdalakayin dito ang topograpiya gaya ng anyong lupa at tubig, uri ng edukasyon, pamamahala, populasyon, libangan, komunikasyon, produkto, transportasyon, hanapbuhay, tradisyon, kultura, klima, mga istruktura at likas na yaman sa pamayanan pati na rin ang mga kilalang tao na tumulong sa kaunlaran ng barangay.  
</q>

</q><br><br>
</div>

<div class="mySlide">
 <img src="pic/1.jpg" style="margin-right: 10px;"><img src="pic/2.jpg"><br>Noong unang panahon, ayon sa sali’t saling kwento ng mga matatanda, ang barangay na ito ay tinatawag na “MASIIT”. Ang dahilan ng pagtawag dito na Masiit ay sapagkat maraming puno dito na lubhang maraming siit o maliliit na sanga.
         Dahilan sa pagsisikap ng ilan sa mga taga-barangay, sila ay nagharap ng isang resolusyon upang ang pangalang Masiit ay mapalitan. Ito ay mapunyaging naitaguyod ng mga tao at mula nga noon ang dating Barangay Masiit ay naging Barangay Mabini.
         Tahimik at maayos ang pamumuhay sa Barangay Mabini. Malaya silang gumagawa, nakikilahok sa mga panlipunan at pampamahalaang gawain.

  
</div>
<div class="mySlide">
<img src="pic/3.jpg"><br>Ang Barangay Mabini ay matatagpuan sa dakong timog-kanluran ng Lungsod ng Lipa. Ito ay may layong anim (6) na kilometro mula sa nasabing lungsod. Ito ay may kabuuang sukat na humigit kumulang sa 2.75 kilometro kwadrado. Ito ay may mga burol at malapit sa sapa sa gawing kanluran. Hugis bilohaba ang barangay na ito.           
Ang mga kalapit na barangay nito ay ang mga sumusunod: sa gawing timog ay Barangay Calamias, sa kanluran ay Barangay Adya at Barangay Quezon, sa hilagang kanluran ay ang Barangay Cumba, sa timog-silangan ay ang Barangay Rizal, sa silangan ay ang Barangay San Guillermo at sa hilaga ay ang Barangay Sampaguita.

  
</div>

<div class="mySlide">
<img src="pic/4.jpg"><br>Ang Barangay Mabini, Lungsod ng Lipa ay kabilang sa ika-anim na Distrito ng Lalawigan ng Batangas na may walong (8) purok.
A 1. ANYONG TUBIG
           Ang Barangay Mabini ay may 2 anyong tubig.  Dito kumuha ng tubig na inumin ang ating mga ninuno. Mayroon ding bukal na inumin subalit sa pagdaan ng panahon itong bukal na ito ay natabunan ng mga bato at buhangin dahilan sa pagbaha sa ilog.  Mayroon ding anyong tubig dito at ito ay tinatawaag na ilog Mabini kung saan kumukuha ng pandilig, pampainom sa hayop at dito 


  
</div>
<div class="mySlide">
  rin sa ilog na ito naglalaba ang karamihan sa mga naninirahan dito. <br>
<img src="pic/5.jpg"><br><br><img src="pic/6.jpg">


  
</div>
<div class="mySlide">
  <h1>A 2. ANYONG LUPA</h1>
 Ito ay may mga burol na malapit sa ilog. Mayroon din malalawak na kapatagan na tinataniman ng mga palay, mais, tubo at iba’t-ibang uri ng halaman dito.
        Ang mga pangkaraniwang tanim nila rito lalo na sa mga loobang bahagi ay mga mangga, kape, santol, saging at paminta. Dahil sa matabang lupa at masisipag na mamamayan, ang Barangay Mabini ay sagana sa mga lokal na materyales tulad ng kawayan at kahoy.   
 <br>
<img src="pic/7.jpg">

</div>
<div class="mySlide">
  
<img src="pic/8.jpg"><br>Palayan
<br>
<img src="pic/9.jpg"><br>Maisan


</div>
<div class="mySlide">
  
<img src="pic/10.jpg"><br>Gulayan
<br>
<img src="pic/11.jpg"><br>Tubuhan


</div>
<div class="mySlide">
  
<img src="pic/12.jpg"><br>Manggahan
<br>
<img src="pic/13.jpg"><br>Sagingan


</div>

<div class="mySlide">
  
<img src="pic/14.jpg"><br>Kapehan
<br>
<img src="pic/15.jpg"><br>Pamintahan
</div>

<div class="mySlide">
  
<img src="pic/16.jpg"><br>Santol
<br>
<img src="pic/17.jpg"><br>Niyugan
</div>
<div class="mySlide">
  
<img src="pic/18.jpg"><br>Kawayanan
<br>

</div>
<div class="mySlide">
     Ito ay may pagbabago sa ngayon ang dating palayan, maisan, kapihan at pamintahan ay naging subdivision.
  
<img src="pic/19.jpg"><br><br>
<br>
<img src="pic/20.jpg"><br>MABINI HEIGHTS SUBDIVISION
</div>
<div class="mySlide">
  
<img src="pic/21.jpg"><br>VALLEY VERDE VILLA<br>KLIMA
<br>
<img src="pic/22.jpg"style="margin-right: 10px;"><img src="pic/23.jpg"><br>Uri ng panahon sa aking komunidad
</div>
<div class="mySlide">
           Sa ating komunidad ay may dalawang uri ng panahon. Ito ay ang tag-ulan at tag-init. Ang tag-init ay nararanasan mula sa buwan ng Nobyembre hanggang buwan ng Abril. Mula naman buwan ng Mayo hanggang Oktubre ay nararanasan ang tag-ulan. Nakararanas din tayo ng taglamig o malamig na simoy ng hangin sa buwan ng Nobyemre hanggang Pebrero.
            Nakararanas din tayo ng iba’t ibang kalamidad tulad ng bagyo, lindol, sunog, baha, at pagsabok ng bulkan. Malaki ang epekto ng mga kalamidad na ito sa ating komunidad. Kapag may baha at bagyo, nasisira ang mga pananim, maraming natutumbang mga puno at pananim. Kapag tag-init naman, natutuyo ang mga pananim at nagkakaroon ng sunog. Marami rin ang nagkakasakit kapag matindi ang init tulad ng lagnat, sore eyes, allergy at iba pa.

  
<img src="pic/24.jpg" style="margin-right:10px;" alt="lagnat">

<img src="pic/25.jpg" alt="sore eyes">&nbsp;&nbsp;<img src="pic/26.jpg" alt="allergy"><br>          Ang lugar na pinupuntahan kapag may kalamidad ang mga evacuation center, paaralan at warehouse. 
</div>



<a class="prev" onclick="plusSlide(-1)">❮</a>
<a class="next" onclick="plusSlide(1)">❯</a>

</div>

<div class="dots-container">
  <span class="dots" onclick="currentSlides(1)"></span> 
  <span class="dots" onclick="currentSlides(2)"></span> 
  <span class="dots" onclick="currentSlides(3)"></span> 
</div>

<script>
var slideInd = 1;
showSlide(slideInd);

function plusSlide(n) {
  showSlide(slideInd += n);
}

function currentSlides(n) {
  showSlide(slideInd = n);
}

function showSlide(n) {
  var i;
  var slides = document.getElementsByClassName("mySlide");
  var dots = document.getElementsByClassName("dots");
  if (n > slides.length) {slideInd = 1}    
  if (n < 1) {slideInd = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" actives", "");
  }
  slides[slideInd-1].style.display = "block";  
  dots[slideInd-1].className += " actives";
}
</script>

</body>
</html> 


<div class="slideshow-container">

<div class="mySlides">
 <h1>KASAYSAYAN NG BARANGAY MABINI</h1><br>
  <q>

    Noong unang panahon, ayon sa salit-saling kwentong mga matatanda, ang barangay na ito ay tinatawag na MASIIT. Ang dahilan ng pagtawag ditto na Masiit ay sapagkat maraming puno dito na lubhang maraming siit o maliliit na sanga.

    Bagamat noong una ay walang sasakyan dito kundi paragos, ang mga tao ay kinakikitaan na ng angking kasipagan. Dinala nila kanilang mga kalakal sa kabayanan sa pamamagitan ng pagsusunong.

    Dahilan sa pagsisikap ng ilan sa mga taga-barangay, sila ay nagharap ng isang resolusyon upang ang pangalang Masiit ay mapalitan. Ito ay mapunyaging naitaguyod ng mga tao at mula nga noon ang dating Barangay Masiit at nagging Barangay Mabini.

    Tahimik at maayos ang pamumuhay sa Barangay Mabini. Malaya silang gumagawa, nakikilahok sa mga panlipunan at pampamahalaang Gawain.
</q>
  <p class="author">/p>
</div>

<div class="mySlides">
  <q>Ang dating maalikabok at baku-bakung kalsada at nalatagan ng aspalto. Nagkaroon ng daloy ng elektrisidad at ang mga bahay ay nagliwanag sa mga ilaw dagitab.

    Ang Barangay Mabini ay matatagpuan sa dakong timog-kanluran ng Lungsod ng Lipa. Ito ay may layong anim (6) na kilometro mula sa nasabing lungsod. Ito ay may kabuuang sukat na humigit kumulang sa 2.57 kilometro kwadrado. Ito ay may mga burol at dahil malapit sa sapa sag awing kanluran. Hugis bilohaba ang barangay na ito. Mayroon din malalawak na kapatagan na tinataniman ng mga palay, mais at iba’t-ibang uri ng halaman dito. Mayroon din anyong tubig dito at ito at tinatawaag na ilog Mabini kung saan kumukuha ng pandilig, pampainom sa hayop at dito rin sa ilog na ito naglalaba ang karamihan sa mga naninirahan dito. Ang mga kalapit na barangay dito ay ang mga sumusunod: sag awing timog ay Barangay Calamias, sa kanluran ay Barangay Adya at Barangay Quezon, sa hilagang kanluran ay ang Barangay Cumba, sa timog-silangan ay ang Barangay Rizal, sa silangan ay ang Barangay San Guillermo at sa hilaga ay ang Barangay Sampaguita. Dahil sa matabang lupa at masisipag na mamamayan, ang Barangay Mabini ay sagana sa mga lokal na materyales tulad ng kawayan at kahoy. Ang pangunahing hanapbuhay ng mga tao dito ay </q>
  <p class="author"></p>
</div>

<div class="mySlides">
  <q>¬¬ang pagsasaka. May ilang m¬¬anukan at babuyan na nakadaragdag ng kita. Ang mga pangkaraniwang tanim nila rito lalo na sa mga loobang bahagi ay mga mangga, kape, santol, saging at paminta.

    Tahimik na namumuhay ang mga Barangay Mabini. Nakikilahok sa mga panlipunan at pampahalaang Gawain. Dahilan sa mahusay na pagdidisiplina ng Tinenteng Torne, naging maganda ang takbo ng pamayanan. Nawala ang mga magnanakaw at iba pang gumagawa ng masama. Dala ng katandaan, nagbititw na sa tungkulin sa Tinenteng Torne. Pinalitan siya ni Tinenteng Itong.

    Sa panahon ng panunungkulan niya hindi nagbago and disiplina at kasipagan ng mga mamamayan. Sa panahon ng kanyang panunungkulan naganap ang pinakamasayang pista. Masanagang handaan ang makikita sa bawat tahanan. Lalong pinasaya ito ng masipag na banda ng musiko.
    Pagkalipas ng mahabang panahon ng panunungkulan, at mahinang kalusugan, si Tinenteng Agapito ay nahalinhan ng isa pa ring magiting na Tinente sa katauhan ni G. Francisco de Silva. Ang katawagang tinente ay napaltan ng katawagang kapitan kaya siya ay lalong kilala sa tawag na Kapitan Isko. Katulad ng dati, bagamat mayroong ialng walang sikap sa buhay, ang mamamayang dito ay patuloy sa </q>
  <p class="author"></p>
</div>
<div class="mySlides">
  <q>kanilang kasipagan. Sa pagsasaka, paghabi, pagsasawali ay kinakikitaan sila ng sipag at tiyaga. Ang dating maalikabok at malubak na kalsada at nalalatagan ng bato at aspalto. Hindi maikaila ang kaunlarang nakita sa kanyang kapanahunan.

    Bagama’t abala ang mga ta sa kanilang mga gawaing hindi nila nakakalimutan ang gma kinalimutang tradisyon gaya ng buwan ng Mayo. May Santakrusan na pinarikit ng Reyna Elena at mga sagala. Ang mga magsasaka naman ay naghahanda na para sa kani-kanilang linang. Ulan na lamang kanilang hinihintay. Kung hindi kaagad umulan, isang kaugalian ang isanasagawa ng mga matatandang babae. Sila ay nagnonobena at nagpoprosisyon at naliliguan nila ang Mahal na Birhen sa bukal ng Pansol. Pagkatapos na makapaghasik at magamasan ang mga linang, ang ilan ay naghihintay na lamangsa darating na anihan. May ilang mga magsasaka na humahanap ng ekstrang pagkakakitaan. Ang ilan naman ay nagpapahinga sa paggawa ng iba’t-ibang gawaing kapakipakinabang.

    Sapagkat kasabay yatang isinilang sa mundo ang iba’t-ibang bisyo, mapapansin din na may ilang kalalakihan na abala sa ganitong buhay. Mayroon din ilang kabataan ang nahihirati sa ganitong buhay.
</q>
  <p class="author"></p>
</div>
<div class="mySlides">
  <q>Taong 1972, patuloy ang mga taga Barangay Mabini sa tahinik na pamumuhay bagamat mayroon din pangilan-ngilan mga inuman at sugalan. Hindi lingid sa kaalaman ng lahat na sa Maynila at ibang lugal ay magulong-magulo na at kaalinsabay ang paglulunsad ng Proklamasyon 1081 biglang natahimik ang buong bansa. Nabigla ang lahat. Walang komunikasyon gaya ng radio, telebisyon, dyaryo a iba pa. napag-alaman ng mga tao na inilunsad na ang Batas Militar. Naragdagan ang disiplina ng mga taga Barangay Mabini. Sa mga programang inilunsad ng Baong Lipunan, masiglang nakilahok ang mga tagario, gaya ng Green Revolution, Cleanliness and Sanitation Family Planning, Tree Planting at marami pang iba.

    Sapagkat hindi nawawala kahit na yata kanino ang ugaling ningas-kugon, hindi gaano nagtagal ang pakikilahok ng mga tagario. Ang ilan ay nababalewala, ang iba naman ay balik sa dating gawa.

    Isang pampangunahing eleksiyon ang naganap. Katulad ng ibang mamamayan ang mga taga Barangay Mabini ay marunong din nakiliahoj sa pampulitikang Gawain. Nagtutungo sila sa mga presinto para bumoto. Mayroon din </q>
  <p class="author"></p>
</div>
<div class="mySlides">
  <q>mga lider pulitko rito. Muling isinilang ang ika-apat ng Republika.

    Makalipas ang ilang buwan, muli na naman makikita ang mga tao na nagtutungo sa presinto upang muling bumoto para sa kanilang kandidato na mamumuno sa nayon. Nagtagumpay si G. Agonia, kasama ang mga bagong taong nahalal bilang mga konsehal.

    Isa pa rin sa kaunlarang akikita sa mga nayon ay ang pagkakaroon ng elektrisidad, at ang pinakahuli ay ang patubig.

    Isang pagkilala ang ipinararating sa mga taong maituturing na may magandang alaala at bahagi sa nayon ng Barangay Mabini. Gaya nina Kapitan Almario Tenorio, Kapitan Francisco de Silva at Kapitan Bonifacio Agonio. Sa mga tao naming nagging pangulo ng PTA gaya nina Ginoong Ponciano Sabillo, Benito Mosca, Francisco de Silva at kanayunan at sa iba pang mga lider sibiko.

    Isa pa rin pagkilala ang ipinarating sa mga kabataang produkto ng ating paaralan na sa kasalukuyan ay may kanya-kanyang magagandang landas na tinatahak.
</q>
  <p class="author">- Thomas A. Edison</p>
</div>


<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
   <span class="dot" onclick="currentSlide(4)"></span> 
    <span class="dot" onclick="currentSlide(5)"></span> 
     <span class="dot" onclick="currentSlide(6)"></span> 
</div>
</div>
</div></div>
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" actives", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " actives";
}
</script>




<style>
* {box-sizing: border-box}


/* Slideshow container */
.slideshows-container {
  position: relative;
  background: #f1f1f1f1;
  overflow: auto;
  height: 430px;
  
}

/* Slides */
.mySlide {
  display: none;
  padding: 30px;
  text-align: center;
  
  
 

/* Next & previous buttons */


/* Position the "next button" to the right */


/* The dot/bullet/indicator container */
.dots-container {
    text-align: center;
    padding: 20px;
    background: #ddd;
}

/* The dots/bullets/indicators */
.dots {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}


.author {color: cornflowerblue;}
</style> 


</main></body></html>
</head>
</html>
<?php include_once('footer.php');?>
<style type="text/css">
  .men{
    .menubar{background: url(img/mab.jpg) ;
    background-blend-mode: soft-light;
    background-color: #9c9393;
    background-size: cover;
    background-attachment: fixed;

  }
     .breadcrumb{
      color: black;
      background-color: black;
     }
  
  

</style>

<?php include_once'footer.php'?>

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
    <script>
var elem = document.getElementById("m");
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
  }
}
</script>
<style type="text/css">
  #m{
    overflow: scroll;
 


  }
  
</style>