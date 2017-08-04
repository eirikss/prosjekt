<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>


    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title><?= isset($PageTitle) ? $PageTitle : "Mjapp.no"?></title>
    <!-- Additional tags here -->
    <?php if (function_exists('customPageHeader')){
      customPageHeader();
    }?>



<!-- Bootstrap uses HTML elements and CSS properties that require the HTML5 doctype.

Always include the HTML5 doctype at the beginning of the page, along with the lang attribute and the correct character set:-->
  <title>SKSK 200 år</title>
  <meta charset="utf-8">
  <!-- Denne er med for å: Bootstrap 3 is designed to be responsive to mobile devices. Mobile-first styles are part of the core framework. 

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.2.1.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/rememberMe.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body onLoad="checkCookie()">
<!--Start på meny-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span> Team SylFar</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="registrer.php">Registrer skjema</a></li>


        <?php if (isset($_SESSION['username'])) { ?>
        <li><a href="registrer2.php">Registrer (klipp/lim)</a></li>
        <li><a href="utskrift.php">Scoreboard <span class="glyphicon glyphicon-print"></span></a>
        <?php } else { ?>
          <?php } ?>

        

        </li>
     </ul>
      <ul class="nav navbar-nav navbar-right">
      <?php if (isset($_SESSION['username'])) { ?>
        <li><p class="navbar-text">Logget inn som <?php echo $_SESSION['username']; ?></p></li>
        <li><a href="logout.php">Logg ut <span class="glyphicon glyphicon-log-out"></span></a></li>
        <?php } else { ?>
        <li><a href="main_login.php">Logg inn <span class="glyphicon glyphicon-log-in"></span> </a></li>
        <li><a href="signup.php">Registrer deg <span class="glyphicon glyphicon-user"></span></a></li>
        <?php } ?>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--Slutt på meny-->

