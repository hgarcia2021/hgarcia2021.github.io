
<?php
    
    include "confLang.php";
    include "php_partials/login_true.php";
    
?>
<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Recomerçem</title>
    <style>
      body{
     font-family: "Arial"; 
     }
     
     </style>
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/recomercem.css">
    <link  rel="icon"   href="img/iconobirra.png" type="image/png" />
</head>
<body>
<!-- -----------------------------------------NAVBAR----------------------------------------------------------------------- -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php" id = "textTituloNav">
      <img src="./img/iconobirra.png" width="40" height="40" class="d-inline-block align-middle" alt="" loading="lazy" >
      <?php echo $lang['Recomencem'] ?>
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><?php echo $lang['Principal'] ?><span class="sr-only">(current)</span></a>
      </li>

      
      <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Nuestra selección
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Bar 1</a>
            <a class="dropdown-item" href="#">Bar 2</a>
            <a class="dropdown-item" href="#">Bar 3</a>
            <a class="dropdown-item" href="#">Bar 4</a>
          </div>
        </li> -->

      <li class="nav-item">
        <a class="nav-link" href="frontend/baresRes.php"><?php echo $lang['Selection'] ?></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="frontend/juegos.php"><?php echo $lang['Juegos'] ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="frontend/about.php"><?php echo $lang['About'] ?></a>
      </li>
  
      <?php admin_index(); ?> 
      
    </ul>

    <div style="height: 30px;">
      <?php login_index($lang); ?>
  </div>
</nav>
<!-- -----------------------------------------BODY----------------------------------------------------------------------- --> 
<?php require_once('php_partials/mensajes.php'); ?>  
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active" style="background-image: url('img/barlobo4.jpg')"></div>
    <div class="carousel-item" style="background-image: url('./img/txapelaportada.jpg')"></div>
    <div class="carousel-item" style="background-image: url('./img/bracafe.jpg')"> </div>
    <div class="carousel-item" style="background-image: url('./img/ramen.png')"></div>
  </div>
</div>
</header>
<!-- Page Content -->
<div class="container">
  <div id="titulo" class="row">
    <h1 style="color: #F3B63E;"><?php echo $lang['titulo_indice'] ?></h1>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <h2 id="titulo2"  style="color: #e43b3e;"><?php echo $lang['Recomencem'] ?></h2>
      <p id="parrafo1"> <?php echo $lang['parafo1_indice'] ?></p>
    
      <p> <?php echo $lang['parafo2_indice'] ?></p>
    </div>
    <div class="col-lg-6">
      <img class="img-fluid rounded" src="img/img2.jpg" width="450px">
      <img id="img2" class="img-fluid rounded" src="img/img1.jpg" height="700px" width="450px">
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-lg-6">
      <h3 id="titulo3" style="color: #F3B63E;"><?php echo $lang['parafo3_indice'] ?></h3>
      <p><?php echo $lang['parafo4_indice'] ?> </p>
      <p><?php echo $lang['parafo5_indice'] ?></p>
    </div>
    <div class="col-lg-6">
      <h3 id="titulo3" style="color: #F3B63E;"><?php echo $lang['parafo6_indice'] ?></h3>
      <p> <?php echo $lang['parafo7_indice'] ?></p>
      <p><?php echo $lang['parafo8_indice'] ?></p>
      <p><?php echo $lang['parafo9_indice'] ?></p>
    </div>
  </div>
</div>

<!-- -----------------------------------------FOOTER----------------------------------------------------------------------- -->
  <footer class="bg-dark text-center text-lg-start">
    <div class="text-center p-3" >
        <div id="footerLinks">
            <a href="https://github.com/MrFron/Recomercem" class="badge badge-primary">GitHub</a>
            <a href="./frontend/about.php" class="badge badge-primary">About</a>
        </div>
        <p class="card-text"></p> Copyright © 2020-2021 - Proyecto 1 ABP - Centre d’Estudis Politècnics<br> Fran Soriano Román · Hector Garcia Lopez · Illya Samoylenko Barabus · Daniel Moreno Fernandez </p>
        <p><a href="index.php?lang=es"><?php echo $lang['es'] ?></a> || <a href="index.php?lang=en"><?php echo $lang['en'] ?></a> || <a href="index.php?lang=ru"><?php echo $lang['ru'] ?></a> || <a href="index.php?lang=cat"><?php echo $lang['cat'] ?></a></p>
    </div>
</footer>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>