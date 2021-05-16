<?php
    include "../confLang.php";
    include "../php_partials/login_true.php";
?>
<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bares y restaurantes - Recomerçem</title>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/recomercem.css">
    <link  rel="icon"   href="../img/iconobirra.png" type="image/png" />
</head>
<body>


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


      <div class="container" style="margin-top: 10px; margin-bottom: 35px;" >
            <div class="row">
                <div class="card" style="width: 17rem;">
                    <img class="card-img-top" src="../img/ramen.png" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text"><?php echo $lang['parafo1_seleccion'] ?>
                        <br> <FONT COLOR="#F3B63E"><?php echo $lang['calle1_seleccion'] ?></FONT>
                      </p>
                      <a href="../frontend/ramen-ya.php" class="btn botonesVisitar"><?php echo $lang['visitar'] ?></a>
                    </div>
                  </div>


                 <div class="card" style="width: 17rem;">
                    <img class="card-img-top" src="../img/bracafe-portada.png" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text"><?php echo $lang['parafo2_seleccion'] ?> <br>
                        <FONT COLOR="#F3B63E"><?php echo $lang['calle2_seleccion'] ?></FONT></p>
                      <a href="../frontend/bracafe.php" class="btn botonesVisitar"><?php echo $lang['visitar'] ?></a>
                    </div>
                    </div>

                <div class="card" style="width: 17rem;">
                        <img class="card-img-top" src="../img/bLobo.png" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text"><?php echo $lang['parafo3_seleccion'] ?>
                              <br> <FONT COLOR="#F3B63E"><?php echo $lang['calle3_seleccion'] ?></FONT>
                          </p>
                          <a href="../frontend/barlobo.php" class=" align-self-end btn botonesVisitar"><?php echo $lang['visitar'] ?></a>
                        </div>
                </div>

                <div class="card" style="width: 17rem;">
                        <img class="card-img-top" src="../img/pinchos.png" alt="Card image cap">
                        <div class="card-body">
                        <p class="card-text"><?php echo $lang['parafo4_seleccion'] ?> <br> <FONT COLOR="#F3B63E"><?php echo $lang['calle4_seleccion'] ?></FONT></p>
                        <a href="../frontend/txapela.php" class=" align-self-end btn botonesVisitar"><?php echo $lang['visitar'] ?></a>
                        </div>
                  </div>
            </div>
      </div>
    


<!-- -----------------------------------------FOOTER----------------------------------------------------------------------- -->
  <!-- Illya-->
  <footer class="bg-dark text-center text-lg-start">
    <div class="text-center p-3" >
        <div id="footerLinks">
            <a href="https://github.com/MrFron/Recomercem" class="badge badge-primary">GitHub</a>
            <a href="../frontend/about.php" class="badge badge-primary">About</a>
        </div>
        <p class="card-text"></p> Copyright © 2020-2021 - Proyecto 1 ABP - Centre d’Estudis Politècnics<br> Fran Soriano Román · Hector Garcia Lopez · Illya Samoylenko Barabus · Daniel Moreno Fernandez </p>
        <p><a href="baresRes.php?lang=es"><?php echo $lang['es'] ?></a> || <a href="baresRes.php?lang=en"><?php echo $lang['en'] ?></a> || <a href="baresRes.php?lang=ru"><?php echo $lang['ru'] ?></a> || <a href="baresRes.php?lang=cat"><?php echo $lang['cat'] ?></a></p>
    </div>
</footer>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>