<?php
    include "../confLang.php";
    include "../php_partials/login_true.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego 1 - Recomerçem</title>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/csshector.css">
    <link  rel="icon"   href="../img/iconobirra.png" type="image/png" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php" id = "textTituloNav">
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

    <div class="container" id="todo">
        <div id="pantalla">
            
            <div class="carro" id="carro">
                <img id="fondo"src="../img/carrito3.gif">
            </div>
            <div class="cuadrado" id="cuadrado1">
                <img id="img1" src="pan.png">
            </div>
            <div class="cuadrado" id="cuadrado2">
                <img id="img2" src="bomba.png">
            </div>
            <div class="cuadrado" id="cuadrado3">
                <img id="img3" src="pescado.png">
            </div>
            <div class="cuadrado" id="cuadrado4">
                <img id="img4" src="carne.png">
            </div>
            <div id="inicio">
                <span type="button" class="boton" id="btnIniciar" onclick="iniciar()" >Iniciar</span>
                <div id="instrucciones"><p>Intenta conseguir el maximo de ingredientes possibles para poder preparar el pedido. Pero cuidado con las bombas!</p></div>
            </div>



             <div id="gameover"><p id="perder">Has perdido todas las vidas!<br><a>Tu puntuacion: <a id= puntos>0</a></a></p>
              <form action="../php_controllers/recomercemController.php" method="POST">
                  <button class="boton" id="btnreiniciar" name="volverajugarsuper" type="Submit">Volver a jugar</button>
                  <button class="boton" id="btnsalir" name="salirsuper" type="Submit">Salir del juego</button>
              </form>

            </div>

            <div id="win"><p id="perder">Felicidades! Has conseguido el maximo de puntos possibles</p>
              <form action="../php_controllers/recomercemController.php" method="POST">
                  <button class="boton" id="btnreiniciar" name="volverajugarsuper" type="Submit">Volver a jugar</button>
                  <button class="boton" id="btnsalir" name="salirsuper" type="Submit">Salir del juego</button>
              </form>
            </div>




        </div>
        <div id="items">
            <div class="item" id="vidas"><h3>Vidas:</h3>
                <div class="vida" id="vida1">
                    <img id="imgvida1" src="../img/vida1.png">
                  </div>
                  <div class="vida" id="vida2">
                    <img id="imgvida2" src="../img/vida1.png" >
                  </div>
                  <div class="vida" id="vida3">
                    <img id="imgvida3" src="../img/vida1.png" >
                  </div>
            </div>
            <div class="item" id="Pactual"><h3>Puntuación:</h3><p id="puntuacion">0</p></div>
            <div class="item" id="Record"><h3>Tu Record:</h3><p id="textCrono">0</p></div>
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
  <script src="../js/funcionesHector.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>