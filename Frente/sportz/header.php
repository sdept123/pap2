<?php 
  include 'db.inc.php';
  session_start();
?>

<head>
    <title>Sportz &mdash; Colorlib Sports Team Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
<div class="site-wrap">
<div class="site-mobile-menu">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-logo">
      <a href="#"><img src="images/transferir.png" alt="Image"></a>
    </div>
    <div class="site-mobile-menu-close mt-3">
      <span class="icon-close2 js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div>

<header class="site-navbar absolute transparent" role="banner">
  <div class="py-3 remove_space">
    <div class="container">
      <div class="row align-items-center">
        
      </div>
    </div>
  </div>
  <nav class="site-navigation position-relative text-right bg-black text-md-right" role="navigation">
    <div class="container position-relative">
      <div class="site-logo">
        <a href="index.php"><img src="images/logo.png" alt=""></a>
      </div>

      <div class="d-inline-block d-md-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

      <ul class="site-menu js-clone-nav d-none d-md-block">
        <li><a href="index.php">Home</a></li>                     
        <li><a href="jogos.php">Jogos</a></li>
        <li class="has-children">
            <a href="#">Equipa</a>
            <ul class="dropdown arrow-top">
              <li><a href="team1.php">EQUIPA PRINCIPAL</a></li>
              <li><a href="team2.php">JUNIORES</a></li>
              <li><a href="team3.php">JUVENIS</a></li>
              <li><a href="team4.php">INICIADOS</a></li>
            </ul>            
        </li>        
        <li><a href="noticias.php">Noticias</a></li>
        <li class="has-children">
          <a href="#">Clube</a>
          <ul class="dropdown arrow-top">
            <li><a href="historia.php">História</a></li>
            <li><a href="palmares.php">Palmarés</a></li>
            <li><a href="orgaossociais.php">Órgãos Sociais</a></li>
          </ul>            
        </li> 
        <li class="has-children">
          <a href="#">Perfil</a>
          <ul class="dropdown arrow-top">
            <?php
               if (!isset($_SESSION['tipouser'])){
                 echo "<li><a href='login.php'>LOGIN / REGISTO</a></li>";       
               }
               else{
                
               
                echo "<li><a href='logout.php'>Terminar Sessão</a></li>";
               }
              ?>              
          </ul>            
      </li>  
        <div class="site-logo">
          <a href="index.php"><img src="images/logo.png" alt=""></a>
        </div>
      </ul>
    </div>
  </nav>
</header>