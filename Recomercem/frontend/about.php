<?php
    include "../confLang.php";
    include "../php_partials/login_true.php";
?>

<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nosotros - Recomerçem</title>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/recomercem.css">
    <link  rel="icon"   href="../img/iconobirra.png" type="image/png" />
</head>
<body>
 <!-- -----------------------------------------NAVBAR----------------------------------------------------------------------- -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#" id = "textTituloNav">
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

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
	<center>
      <h1 style="color: #F3B63E;" class="display-3">¡Recomerçem!</h1>
      <!-- <p class="lead">
		Más de tres meses trabajando para este momento. El momento de presentar nuestro proyecto. Somos un grupo de 4 compañeros con el destino de ayudar
		a los pequeños comercios, aquellos que necesitan más que nadie.
		Todo a un click, con un diseño sencillo y explicaciones breves de los bares elegidos. 
		¿Jugamos? Tienes tres juegos para disfrutar (o sufrir) hasta conseguir los puntos necesarios para obtener tus descuentos. ¿Serás capaz? Veremos...
	  </p> -->
		<br>
	  <p class="lead"><?php echo $lang['info_about'] ?>
	  </p>
		<br>
	</center>
    </header>

    <!-- Page Features -->
    <div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img" src="../img/avatarfran.png" width="800" height="325" />
          <div class="card-body">
            <h4 style="color: #F3B63E;" class="card-title">Fran Soriano Román</h4>
            <p class="card-text"><?php echo $lang['fran'] ?></p>
          </div>
          <div class="card-footer">
            <a href="https://www.linkedin.com/in/fran-soriano-rom%C3%A1n-ba08871a9/" target="_blank" class="btn btn-danger">Linkedin</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img" src="../img/avatardani.png" alt="" width="800" height="325" />
          <div class="card-body">
            <h4 style="color: #F3B63E;" class="card-title">Daniel Moreno Fernandez</h4>
            <p class="card-text"><?php echo $lang['dani'] ?></p>
          </div>
          <div class="card-footer">
            <a href="https://www.linkedin.com/in/daniel-moreno-b7603b1b5/" target="_blank" class="btn btn-danger">Linkedin</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img" src="../img/avatarillya.png" width="800" height="325" />
          <div class="card-body">
            <h4 style="color: #F3B63E;" class="card-title">Illya Samoylenko Barabus</h4>
            <p class="card-text"><?php echo $lang['illya'] ?></p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-danger">Linkedin</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img" src="../img/avatarhector.png" width="800" height="325" />
          <div class="card-body">
            <h4 style="color: #F3B63E;" class="card-title">Hector Garcia Lopez</h4>
            <p class="card-text"><?php echo $lang['hector'] ?></p>
          </div>
          <div class="card-footer">
            <a href="https://www.linkedin.com/in/hector-garc%C3%ADa-l%C3%B3pez-56652a197/" target="_blank" class="btn btn-danger">Linkedin</a>
          </div>
        </div>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="bg-dark text-center text-lg-start">
    <div class="text-center p-3" >
        <div id="footerLinks">
            <a href="https://github.com/MrFron/Recomercem" class="badge badge-primary">GitHub</a>
            <a href="../frontend/about.php" class="badge badge-primary">About</a>
        </div>
        <p class="card-text"></p> Copyright © 2020-2021 - Proyecto 1 ABP - Centre d’Estudis Politècnics<br> Fran Soriano Román · Hector Garcia Lopez · Illya Samoylenko Barabus · Daniel Moreno Fernandez </p>
        <p><a href="about.php?lang=es"><?php echo $lang['es'] ?></a> || <a href="about.php?lang=en"><?php echo $lang['en'] ?></a> || <a href="about.php?lang=ru"><?php echo $lang['ru'] ?></a> || <a href="about.php?lang=cat"><?php echo $lang['cat'] ?></a></p>
    </div>
</footer>
    <!-- /.container -->
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>
