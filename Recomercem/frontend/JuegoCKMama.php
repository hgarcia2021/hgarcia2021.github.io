<?php 
include "../confLang.php";
include "../php_partials/login_true.php";
?>
<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego 2 - Recomerçem</title>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/recomercem.css">
    <link  rel="icon"   href="../img/iconobirra.png" type="image/png" />
    <!----------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="../style/cssIllya.css">
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

      <div class="container" style="background-image: url('../img/wall.png'); background-repeat: no-repeat; background-position: center center;">  
        <div class="row">
            <div class="col">
                <div id="espaciado">
                    
                    <div>
                    <div class="col">&nbsp;</div> 
                    <div class="row">
                        <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1" style="background-image: url('../img/Rainbow-Six-Siege-background-Download-free-HD-.jpg');"><img src="../img/cooltext371451571164398.png"></img></span>
                          </div>
                        <div class="col" id="crono" style="background-image: url('../img/papirus.png')">Segundos</div>
                    </div>
                    <div class="row">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" style="background-image: url('../img/Rainbow-Six-Siege-background-Download-free-HD-.jpg');"><img src="../img/pedidos.png"></img></span>
                      </div>
                        <div class="col" id="puntuacion" style="background-image: url('../img/papirus.png')">0</div>
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" style="background-image: url('../img/Rainbow-Six-Siege-background-Download-free-HD-.jpg');"><img src="../img/fallos.png"></img></span>
                      </div>
                        <div class="col"  id="fallos" style="background-image: url('../img/papirus.png')">0</div>
                    </div>
                    </div>

                    <div class="col">&nbsp;</div>
                    <div class="col">
                        <div class="col"  id="Receta">&nbsp;</div>    
                    </div>
                   <div class="col" id="resultado" style="background-image: url('../img/blank-menu.png');  background-repeat: no-repeat; background-position: center center;">
                    <div class="col" id="Resultado" style="display: none;">&nbsp;</div>  
                   </div>
                </div>
            </div>
            
            <div class="col"> 
                <div class="col">&nbsp;</div>  
                    <div class="col" id="espaciado3">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><button class="list-group-item list-group-item-action text-center" id="Lechuga" onclick="check_Ingrediente(this.id, uptadedArr,puntos)"><img src="../img/lechuga.png"></button></td>
                                    <td><button class="list-group-item list-group-item-action text-center" id="Carne" onclick="check_Ingrediente(this.id,uptadedArr,puntos)"><img src="../img/carne.png"></button></td>
                                    <td><button class="list-group-item list-group-item-action text-center" id="Queso" onclick="check_Ingrediente(this.id,uptadedArr,puntos)"><img src="../img/queso.png"></button></td>
                                </tr>
                                <tr>
                                    <td><button class="list-group-item list-group-item-action text-center" id="Pan" onclick="check_Ingrediente(this.id,uptadedArr,puntos)"><img src="../img/pan.png"></button></td>
                                    <td><button class="list-group-item list-group-item-action text-center" id="Tomate" onclick="check_Ingrediente(this.id,uptadedArr,puntos)"><img src="../img/tomate.png"></button></td>
                                    <td><button class="list-group-item list-group-item-action text-center" id="Spagghetti" onclick="check_Ingrediente(this.id,uptadedArr,puntos)"><img src="../img/spagget.png"></button></td>
                                </tr>
                                <tr>
                                    <td><button class="list-group-item list-group-item-action text-center" id="Pescado" onclick="check_Ingrediente(this.id,uptadedArr,puntos)"><img src="../img/pescado.png"> </button></td>
                                    <td><button class="list-group-item list-group-item-action text-center" id="Aceite" onclick="check_Ingrediente(this.id,uptadedArr,puntos)"><img src="../img/aceite.png"></button></td>
                                    <td><button class="list-group-item list-group-item-action text-center" id="Manzana" onclick="check_Ingrediente(this.id,uptadedArr,puntos)"><img src="../img/manzana.png"></button></td>
                                </tr>
                                <tr>
                                    <td><button class="list-group-item list-group-item-action text-center" id="Platano" onclick="check_Ingrediente(this.id,uptadedArr,puntos)"><img src="../img/platano.png"></button></td>
                                    <td><button class="list-group-item list-group-item-action text-center" id="Hamburguesa" onclick="check_Ingrediente(this.id,uptadedArr,puntos)"><img src="../img/burguer.png"></button></td>
                                    <td><button class="list-group-item list-group-item-action text-center" id="Arroz" onclick="check_Ingrediente(this.id,uptadedArr,puntos)"><img src="../img/arroz.png"></button></td>
                                </tr>
                                <tr>
                                    <td><button class="list-group-item list-group-item-action text-center" id="Fresa" onclick="check_Ingrediente(this.id,uptadedArr,puntos)"><img src="../img/fresa.png"></button></td>
                                    <td><button class="list-group-item list-group-item-action text-center" id="Nata" onclick="check_Ingrediente(this.id,uptadedArr,puntos)"><img src="../img/nata.png"></button></td>
                                    <td><button class="list-group-item list-group-item-action text-center" id="Frambuesa" onclick="check_Ingrediente(this.id,uptadedArr,puntos)"><img src="../img/frambu.png"></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>

        </div> 
    </div>
    <div  style="display: none; position: absolute; left: 50px;" id="ganar">
      <img src="../img/winner.png">
      <div class="col" style="color: black; font-weight: bold; background-color: #a50000;">
          Estos son los puntos que has ganado: <div id="puntu"></div>
      </div>
      <div class="container">
        <form action="../php_controllers/recomercemController.php" method="POST">
              <button id="volverajugarckm" name="volverajugarckm" type="submit" class="btn btn-primary" >VOLVER A JUGAR</button>
              <button id="salirckm" name="salirckm" type="submit" class="btn btn-primary" >SALIR DEL JUEGO</button>
        </form>
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
      
    </div>
</footer>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="../js/globalIllya.js"></script>
<script src="../js/funcionesIllya.js"></script>
</html> 