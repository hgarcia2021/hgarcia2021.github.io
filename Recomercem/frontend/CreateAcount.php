<?php 
include "../confLang.php";
include "../php_partials/login_true.php";
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
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/recomercem.css">
    <link rel="stylesheet" href="../style/cssLogIn.css">
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
<div class="container">

     <?php 
        require_once('../php_partials/mensajes.php'); 

        if(isset($_SESSION['user'])){
            $user = $_SESSION['user'];
            unset($_SESSION['user']);
        }
        else{
          $user = [
            'nombre' => "",
            'mail' => ""
          ];
        }

     ?>

    <div class="col ggeasy">
<form action="../php_controllers/recomercemController.php" method="POST">
    <div class="form-group">
      <label for="exampleInputEmail1"><?php echo $lang['correo'] ?></label>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="<?php echo $lang['correo'] ?>" value=" <?php echo $user['mail'] ?> ">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1"><?php echo $lang['Nombre'] ?></label>
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="<?php echo $lang['Nombre'] ?>" value="<?php echo $user['nombre'] ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"><?php echo $lang['contraseña'] ?></label>
        <input type="password" class="form-control" id="contr" name="contr" placeholder="<?php echo $lang['contraseña'] ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1"><?php echo $lang['conf_contra'] ?></label>
        <input type="password" class="form-control" id="confirm_contr" name="confirm_contr" placeholder="<?php echo $lang['conf_contra'] ?>">
      </div>
    <!-- <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> -->
    <button type="submit" class="btn btn-secondary" name="crearCuenta"><?php echo $lang['create_account'] ?></button>

    

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
        <p><a href="CreateAcount.php?lang=es"><?php echo $lang['es'] ?></a> || <a href="CreateAcount.php?lang=en"><?php echo $lang['en'] ?></a> || <a href="CreateAcount.php?lang=ru"><?php echo $lang['ru'] ?></a> || <a href="CreateAcount.php?lang=cat"><?php echo $lang['cat'] ?></a></p>
      
    </div>
</footer>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>