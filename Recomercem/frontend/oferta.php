
<?php 
include "../confLang.php";
include "../php_partials/login_true.php";
require_once("../php_libraries/bd.php");

if (isset($_POST['update'])) 
{
    $form = true;

    $oferta = selectUnaOferta($_POST['id_oferta'],$_POST['id_restaurante']);
    $id_oferta = $oferta[0]['id_oferta'];
    $nombre = $oferta[0]['nombre'];
    $puntos = $oferta[0]['puntos'];
    $codigo = $oferta[0]['codigo'];
    $id_restaurante = $oferta[0]['id_restaurante'];
    

}
else
{
    $form = false;
    $Max = selectOfertaMax();
  
    $idMax =  $Max[0]['idmax'];
  
  
}

?>

<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oferta - Recomerçem</title>
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


<div class="container" style="margin-top: 10px; margin-bottom: 35px;" >

    <?php require_once('../php_partials/mensajes.php'); ?>

    <div class="card mt-2">
        <div class="card-header bg-secondary text-white"> <?php echo $lang['añadir_oferta'] ?>
        </div>
            <form action="../php_controllers/ofertaController.php" method="POST">
            <div class="form-group row">
                    <label for="id_restaurante" class="col-sm-3 col-form-label" style="margin-left: 20px;"><?php echo $lang['id_res'] ?></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="id_restaurante" name="id_restaurante" placeholder="Identificador del restaurante" required="required" value=<?php if($form==true){echo $id_restaurante;} ?>>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="id_oferta" class="col-sm-3 col-form-label" style="margin-left: 20px;"><?php echo $lang['id_oferta'] ?></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="id_oferta" name="id_oferta" placeholder="Identificador de la oferta" required="required" readonly value=<?php if($form==true){echo $id_oferta;}else{echo $idMax;} ?>>
                    </div>
                </div>
               
                <div class="form-group row">
                    <label for="nombre" class="col-sm-3 col-form-label" style="margin-left: 20px;"><?php echo $lang['Nombre'] ?></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la oferta" required="required" value=<?php if($form==true){echo $nombre;} ?> >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="puntos" class="col-sm-3 col-form-label" style="margin-left: 20px;"><?php echo $lang['puntos'] ?></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="puntos" name="puntos" placeholder="Puntos de la oferta" required="required" value=<?php if($form==true){echo $puntos;} ?>>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="codigo" class="col-sm-3 col-form-label" style="margin-left: 20px;"><?php echo $lang['Codigo'] ?></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Codigo de la oferta" required="required"value=<?php if($form==true){echo $codigo;} ?>>
                    </div>
                </div>

                <div class="float-right">
                    <div class="btn-group" role="group" aria-label="Basic example" style="margin-bottom: 50px;">
                        <button type="submit" class="btn btn-warning" name=<?php if($form==true){echo "update";}else{echo "insert";} ?>><?php echo $lang['aceptar'] ?></button>
                        <a href="./administracion.php" class="btn btn-secondary"><?php echo $lang['cancelar'] ?></a>
                    </div>
                </div>
            </form>
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
        <p><a href="oferta.php?lang=es">Espa~ol</a> || <a href="oferta.php?lang=en">Ingles</a> || <a href="oferta.php?lang=ru">Ruso</a></p>
    </div>
</footer>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="extensions/editable/bootstrap-table-editable.js"></script>
</html>