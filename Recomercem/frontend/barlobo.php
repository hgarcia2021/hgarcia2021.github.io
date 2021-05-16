<?php
 require_once('../php_libraries/bd.php');
 $ofertas = selectOfertaByRestaurante(4);
 include "../confLang.php";
  include "../php_partials/login_true.php";
?>

<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bar Lobo - Recomerçem</title>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/recomercem.css">
    <link  rel="icon"   href="../img/iconobirra.png" type="image/png" />
</head>
<body>
 <!-- -----------------------------------------NAVBAR----------------------------------------------------------------------- -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../index.php" id = "textTituloNav">
      <img src="../img/iconobirra.png" width="40" height="40" class="d-inline-block align-middle" alt="" loading="lazy" >
      <?php echo $lang['Recomencem'] ?>
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php"><?php echo $lang['Principal'] ?><span class="sr-only">(current)</span></a>
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
        <a class="nav-link" href="../frontend/baresRes.php"><?php echo $lang['Selection'] ?></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="../frontend/juegos.php"><?php echo $lang['Juegos'] ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../frontend/about.php"><?php echo $lang['About'] ?></a>
      </li>
  
      <?php admin_frontend(); ?> 
      
    </ul>

    <div style="height: 30px;">
      <?php login_frontend($lang); ?>
  </div>
</nav>
<!-- -----------------------------------------BODY----------------------------------------------------------------------- -->   
<img src="../img/barlobo2.jpg" class="img-fluid mx-auto d-block " id="bracafelogo">


  <div class="card m-3" style="height: 440px;">
    <div class="row g-0">
      <div class="col-md-5 col-sm-3" >
        <img src="../img/barlobo.jpg" id="imgMaps"class="rounded float-start" style="margin-left: 100px;">
      </div>
      <div class="col-md-7 col-sm-9">
        <div class="card-body">
          <h3 class="card-title" style="color: #e43b3e;"><?php echo $lang['titulo_barLobo'] ?></h3>
          <p class="card-text" style="font-size: large;"> <?php echo $lang['info_barLobo'] ?>
            </p>
            <a href="https://grupotragaluz.com/restaurante/bar-lobo/" class="btn" style="background-color: #F3B63E; color: black;"><?php echo $lang['visitar'] ?></a>
        </div>
      </div>
    </div>
  </div>




<div class="card m-3" style="height: 440px;" >
  <div class="row g-0">
    <div class="col-md-5 col-sm-3" >
      <img src="../img/menu-2.jpg" id="imgMaps"  alt="...">
    </div>
    <div class="col-md-7 col-sm-9">
      <div class="card-body">
        <h3 class="card-title" style="color: #e43b3e;"><?php echo $lang['menu'] ?></h3>
        <p class="card-text" style="font-size: large;">
              <?php echo $lang['tipos_comida_lobo'] ?>
          </p>
          <a href="https://grupotragaluz.com/wp-content/uploads/cartas/bar-lobo-es-web.pdf" class="btn" style="background-color: #F3B63E; color: black;"><?php echo $lang['mirar'] ?></a>
      </div>
    </div>
  </div>
</div>


<div class="card m-3" style="height: 440px;" >
  <div class="row g-0">
    <div class="col-md-5 col-sm-3" >
      <img src="../img/barlobo3.PNG" id="imgMaps" alt="...">
    </div>
    <div class="col-md-7 col-sm-9">
      <div class="card-body">
        <h3 class="card-title" style="color: #e43b3e;"><?php echo $lang['ubicacion'] ?></h3>
        <p class="card-text" style="font-size: large;">
            Pintor Fortuny 3
            08001 Barcelona <br>
            <?php echo $lang['clicar'] ?>
          </p>
          <a href="https://www.google.es/maps/place/Bar+Lobo/@41.3834022,2.1684099,16.75z/data=!4m5!3m4!1s0x12a4a2f68991e5a5:0xa248a773ea1adb86!8m2!3d41.383245!4d2.170511" class="btn" style="background-color: #F3B63E; color: black;">Ubicaciones</a>
      </div>
    </div>
  </div>
</div>

<div class="card m-3" style="height: 440px;" >
  <div class="row g-0">
    <div class="container">
      <div class="card-body">
        <h3 class="card-title text-center " style="color: #e43b3e;"><?php echo $lang['ofertas_disponibles'] ?></h3>
        
        <div class="container">
            <table class="table">
              <tr>
                <th style="color: #F3B63E;"><?php echo $lang['oferta'] ?></th>
                <th style="color: #F3B63E;"><?php echo $lang['puntos_necesarios'] ?></th>
              </tr>

                <?php foreach ($ofertas as $oferta) {?>

                    <tr>
                      <td><?php echo $oferta['nombre'] ?></td>
                      <td><?php echo $oferta['puntos'] ?></td>
                    </tr>

              <?php } ?>

              
            </table>
          </div>


      </div>
    </div>
  </div>
</div>

<!-- -----------------------------------------FOOTER----------------------------------------------------------------------- -->
  <footer class="bg-dark text-center text-lg-start">
    <div class="text-center p-3" >
        <div id="footerLinks">
            <a href="https://github.com/MrFron/Recomercem" class="badge badge-primary">GitHub</a>
            <a href="../frontend/about.php" class="badge badge-primary">About</a>
        </div>
        <p class="card-text"></p> Copyright © 2020-2021 - Proyecto 1 ABP - Centre d’Estudis Politècnics<br> Fran Soriano Román · Hector Garcia Lopez · Illya Samoylenko Barabus · Daniel Moreno Fernandez </p>
        <p><a href="barlobo.php?lang=es"><?php echo $lang['es'] ?></a> || <a href="barlobo.php?lang=en"><?php echo $lang['en'] ?></a> || <a href="barlobo.php?lang=ru"><?php echo $lang['ru'] ?></a> || <a href="barlobo.php?lang=cat"><?php echo $lang['cat'] ?></a></p>
    </div>
</footer>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>