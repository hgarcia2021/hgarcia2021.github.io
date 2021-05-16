<?php
	require_once('../php_libraries/bd.php');
	$usuarios = selectUsuarios();
	$ofertas = selectOfertasRestaurante();
	
	include "../confLang.php";
  include "../php_partials/login_true.php";
?>

<html lang="es">
<head>
	<link rel="icon" href="../img/iconobirra.png" type="image/png" />
	<link rel="stylesheet" href="../style/bootstrap.min.css">
</head>
<link href="../css/perfilcss.css" rel="stylesheet">
<body>
  <!-- -----------------------------------------NAVBAR----------------------------------------------------------------------- -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../index.php" id = "textTituloNav" style="color: #E43B3E;">
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
      <?php login_juegos($lang); ?>
  </div>
</nav>

<?php require_once('../php_partials/mensajecanjeo.php'); ?>
<center>
	<div class="container">
	<img src="../img/logousuarios.png"></img>
	<br>
		<table class="table table-striped">
			<tr>
				<th style="display:none;">Id</th>
				<th>Nombre</th>
				<th>Email</th>
			<tr>
				
				<td><?php echo $_SESSION['user_loged']['nom_usuario'];?>
				<td><?php echo $_SESSION['user_loged']['mail'];?>
		
			</tr>
		</table>
		<br>
		<img src="../img/logoofertas.png" width="400" height="200"/><br />
		<br>
		<table class="table table-striped">
			<tr>
				<th>Restaurante</th>
				<th>Oferta</th>
				<th>Puntos</th>
				
				<th></th>
			</tr>
				<?php foreach ($ofertas as $oferta) { ?>
                    <tr>
                      <td><?php echo $oferta['nomres']; ?></td>
                      <td><?php echo $oferta['nombre']; ?></td>
                      <td><?php echo $oferta['puntos']; ?></td>
                      
                      <td>
                        <form action="../frontend/enviarcorreo.php" method="POST">
                          <button type="submit" class="btn btn-danger" name="submit">Canjear</button>
                          <input type="hidden" id="codigo" name="codigo" value=<?php echo $oferta['codigo'];?>>
                          <input type="hidden" id="id_oferta" name="id_oferta" value=<?php echo $oferta['id_oferta'];?>>
                          <input type="hidden" id="puntos" name="puntos" value=<?php echo $oferta['puntos'];?>>
                          <input type="hidden" id="nombre" name="nombre" value=<?php echo $oferta['nombre'];?>>
                        </form>
                      </td>
                    </tr>
                <?php  } ?>

		<?php
			$idoferta = $oferta['id_oferta'];
		?>
		</table>
	</div>
</center>

<!-- -----------------------------------------FOOTER----------------------------------------------------------------------- -->
<footer class="bg-dark text-center text-lg-start">
    <div class="text-center p-3" >
        <div id="footerLinks">
            <a href="https://github.com/MrFron/Recomercem" class="badge badge-primary">GitHub</a>
            <a href="../frontend/about.php" class="badge badge-primary">About</a>
        </div>
        <p class="card-text"></p> Copyright © 2020-2021 - Proyecto 1 ABP - Centre d’Estudis Politècnics<br> Fran Soriano Román · Hector Garcia Lopez · Illya Samoylenko Barabus · Daniel Moreno Fernandez </p>
        <p><a href="micuenta.php?lang=es"><?php echo $lang['es'] ?></a> || <a href="index.php?lang=en"><?php echo $lang['en'] ?></a> || <a href="index.php?lang=ru"><?php echo $lang['ru'] ?></a> || <a href="index.php?lang=cat"><?php echo $lang['cat'] ?></a></p>
    </div>
</footer>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>