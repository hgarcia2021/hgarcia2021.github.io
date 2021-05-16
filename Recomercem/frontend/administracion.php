<?php

  require_once('../php_libraries/bd.php');
  $ofertas = selectOfertasRestaurante();

  include "../confLang.php";
  include "../php_partials/login_true.php";

?>


<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Recomerçem</title>
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

<div class="d-flex" id="wrapper">
<div id="sidebar-wrapper" style="margin-right: 20px;">
    
      <div class="list-group list-group-flush">
        <a href="./administracion.php" class="list-group-item list-group-item-action">Ofertas</a>
        <a href="./adminUser.php" class="list-group-item list-group-item-action">Usuarios</a>
        
        
      </div>
    </div>

  <div class="container"style="margin-top: 10px; margin-bottom: 35px;" >

    <?php require_once('../php_partials/mensajes.php'); ?>

      <div class="row">
        <div style="margin-bottom: 20px;">
          <button type="button" class="btn btn-warning" onclick="location.href='./oferta.php'">Añadir Oferta</button>
        </div>
              <table class="table table-striped">
                  <tr>
                      <th style="color: #F3B63E;">Restaurante</th>
                      <th style="color: #F3B63E;">Id</th>
                      <th style="color: #F3B63E;">Nombre</th>
                      <th style="color: #F3B63E;">Puntos</th>
                      <th style="color: #F3B63E;">Codigo</th>
                      <th style="color: #F3B63E;">Borrar</th>
                      <th style="color: #F3B63E;">Editar</th>
                  </tr>

                  <?php foreach ($ofertas as $oferta) { ?>
                    <tr>
                      <td><?php echo $oferta['nomres'];?></td>
                      <td><?php echo $oferta['id_oferta']; ?></td>
                      <td><?php echo $oferta['nombre']; ?></td>
                      <td><?php echo $oferta['puntos']; ?></td>
                      <td><?php echo $oferta['codigo']; ?></td>
                      <td>
                        <form action="../php_controllers/ofertaController.php" method="POST">
                          <button type="submit" class="btn btn-danger" name="delete">Borrar</button>
                          <input type="hidden" id="id_restaurante" name="id_restaurante" value=<?php echo $oferta['id_restaurante'];?>>
                          <input type="hidden" id="id_oferta" name="id_oferta" value=<?php echo $oferta['id_oferta'];?>>
                        </form>
                      </td>
                      <td>
                        <form action="./oferta.php" method="POST" >
                          <button type="submit" class="btn btn-warning" onclick="location.href='./oferta.php'" name="update">Editar</button>
                          <input type="hidden" id="id_oferta" name="id_oferta" value=<?php echo $oferta['id_oferta'];?>>
                          <input type="hidden" id="id_restaurante" name="id_restaurante" value=<?php echo $oferta['id_restaurante'];?>>
                        </form>
                      </td>
                    </tr>
                <?php  } ?>
              </table>
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
      
    </div>
</footer>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="extensions/editable/bootstrap-table-editable.js"></script>
</html>