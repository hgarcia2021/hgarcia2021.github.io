<?php 
include "../confLang.php";
include "../php_partials/login_true.php";
?>
<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego 3 - Recomerçem</title>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/juegomoto.css">
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
    
      <audio id="fondo" src="../sounds/fondo.mp3"></audio>
      <audio id="choque" src="../sounds/choque.mp3"></audio>
      <audio id="sinvidas" src="../sounds/sinvidas.mp3"></audio>

      <div id="contenedorJuego">
        <div id="juego" class="container"> 
          <div id="botonStart" onclick="comenzar()"></div>
          <div id="gameover">
              <p id="textPuntos">
              </p>
          </div>
          <div id="win">
              <p id="textPuntosWin">
              </p>
          </div>
  
          <div id="titulo">
              <h3 id="textTitulo">¡ESQUÍVALOS!</h3>
          </div>
  
          <div id="crono">
              <h3 id="tituloTiempo">TIEMPO</h3>
              <p id="textCrono">0.00</p>
          </div>
  
          <div id="desc">
              <h3 id="tituloInstr">INSTRUCCIONES</h3>
              <p id="textInstr">Esquiva los coches moviendo el ratón para poder llevar la comida a su destino.<br>
                  Aguanta 120 segundos para conseguir la máxima puntuación.
                  Posicionate por el medio de la carretera para ver los coches que entran en pantalla.<br>
                  ¡Piensa más rápido que los coches!
              </p>
          </div> 
  
          <div id="vidas">
              <h3 id="tituloVidas">VIDAS</h3>
              <div id="contenedorVidas">
                  <img id="vida1" src="../img/corazon.png">
                  <img id="vida2" src="../img/corazon.png">
                  <img id="vida3" src="../img/corazon.png">
                  <img id="vida4" src="../img/corazon.png">
              </div>
              
          </div>
          <form action="../php_controllers/recomercemController.php" method="POST">
          <button id="volverajugarmoto" name="volverajugarmoto" type="submit" class="btn btn-primary" >VOLVER A JUGAR</button>
          <button id="salirmoto" name="salirmoto" type="submit" class="btn btn-primary" >SALIR DEL JUEGO</button>
          </form>
          
          
          <div id="carretera">
              <div id="linea1"></div>
              <div id="linea2"></div>
              <div id="linea3"></div>
              <div id="linea4"></div>
              <div id="moto"></div>
              <!-- ARRIBA -->
              <div id="coche1">
                  <img id="imgCoche1" src="../img/coche1.png">
              </div>
              <!-- ABAJO -->
              <div id="coche2">
                  <img id="imgCoche2" src="../img/coche2.png">
              </div>
              <!-- ABAJO -->
              <div id="coche3">
                  <img id="imgCoche3" src="../img/coche3.png">
              </div>
              <!-- ARRIBA -->
              <div id="coche4">
                  <img id="imgCoche4" src="../img/coche4.png"> 
              </div>
              <!-- ABAJO -->
              <div id="cocheMedio1">
                  <img id="imgcocheMedio1" src="../img/coche2.png">
              </div>
              <!-- ARRIBA -->
              <div id="cocheMedio2">
                  <img id="imgcocheMedio2" src="../img/coche4.png">
              </div>
              
              
          </div>
      </div>

      </div>
      
    
    
    <footer class="bg-dark text-center text-lg-start">
        <div class="text-center p-3" >
            <div id="footerLinks">
              <a href="https://github.com/MrFron/Recomercem" class="badge badge-primary">GitHub</a>
              <a href="../frontend/about.php" class="badge badge-primary">About</a>
            </div>
            <p class="card-text"></p> Copyright © 2020-2021 - Proyecto 1 ABP - Centre d’Estudis Politècnics<br> Fran Soriano Román · Hector Garcia Lopez · Illya Samoylenko Barabus · Daniel Moreno Fernandez </p>
          
        </div>
    </footer>
    

    
    
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="../js/juegomoto.js"></script>
</html>