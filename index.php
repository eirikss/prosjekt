
  <!--Start på meny skript-->
 <?php

$PageTitle="Velkommen - Mjapp -";

function customPageHeader(){?>
  <!--Arbitrary HTML Tags-->
<?php }

include_once('header.php');
require "loginheader.php";

?>

 
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<style>
body {
  font-family: arial, sans-serif;
}

/* Carousel Styling */
.slide1{
  background-image: url('Media/Skjold.jpg');
  height: 500px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
.slide2{
  background-image: url('Media/STB.jpg');
  height: 500px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
.slide3{
  background-image: url('Media/Fregatt.jpeg');
  height: 500px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
.carousel-caption h1{
  color: rgb(70,191,74);
  font-size: 5.4em;
  font-family: 'Pacifico', cursive;
  padding-bottom: .4em;
}
.carousel-caption p{
  font-size: 2em;
  color: rgb(70,170,185);
}
</style>
<!--
<div class="container">
  <div class="jumbotron">
  <img src="ntt-logo.png" id="nttLogo" alt="New Think Tank Logo">
  <span id="websiteTitle">New Think Tank</span>
  <p id="websiteSlogan">Video Tutorials on just about Anything</p>
  </div>
</div>
-->
 
<!-- Carousel -->
<!-- Surround everything with a div with the class carousel slide -->
<div id="theCarousel" class="carousel slide" data-ride="carousel">
 
  <!-- Define how many slides to put in the carousel -->
  <ol class="carousel-indicators">
    <li data-target="#theCarousel" data-slide-to="0" class="active"> </li >
    <li data-target="#theCarousel" data-slide-to="1"> </li>
    <li data-target ="#theCarousel" data-slide-to="2"> </li>
  </ol >
 
  <!-- Define the text to place over the image -->
  <div class="carousel-inner">
    <div class="item active" >
    <div class ="slide1"></div>
    <div class="carousel-caption">
      <h1>Torstein er fantastisk</h1>
      <p></p>
    </div>
  </div>
  <div class="item">
  <div class="slide2"></div>
  <div class="carousel-caption">
    <h1>Eirik er konge</h1>
  </div>
  </div>
  <div class="item">
  <div class="slide3"></div>
  <div class="carousel-caption">
 <h1>Eksamen er over</h1>
  <p>Livet starter nå!</p>
  </div>
  </div>
  </div>
 
  <!-- Set the actions to take when the arrows are clicked -->
  <a class="left carousel-control" href="#theCarousel" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left"> </span>
  </a>
  <a class="right carousel-control" href="#theCarousel" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
  </div>



<div class="container">
<div class="jumbotron">
  <p>Team ytelse registrering, statusoppdatering øvelser osv osv</p>
</div>

<div class="gridbox gridfooter">
            <div class="footer">
<p>Et produkt laget i forbindelse med bachelor av Sylfar</p>
            </div>
        </div>
</div>
</body>
</html>
