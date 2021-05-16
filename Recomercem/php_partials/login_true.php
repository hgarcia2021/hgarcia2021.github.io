


<?php 

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

function admin_index(){

if(isset($_SESSION['admin'])) { ?>

                
        <li class="nav-item">
        <a class="nav-link" href="frontend/administracion.php">Admin</a>
        </li>      
              
           
<?php }else{?>

<?php
}




}

function admin_frontend(){

        if(isset($_SESSION['admin'])) { ?>
        
                        
                <li class="nav-item">
                <a class="nav-link" href="../frontend/administracion.php">Admin</a>
                </li>      
                      
                   
        <?php }else{?>
        
        <?php
        }
        
        
        
        
        }




function login_index($lang){


        if(isset($_SESSION['login'])) { ?>

                
            <div class="container" >

                      
            <img src="./img/user.png" width="40" height="40" class="d-inline-block align-middle" alt="" loading="lazy">

            <a class="text-secondary" style="margin-left: 20px;" href="frontend/micuenta.php"><?php echo $_SESSION['user_loged']['nom_usuario']; ?></a>

            <div class="btn-group dropleft ml-3">

            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
            <?php echo $lang['Cuenta'] ?>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="php_partials/login_true.php?cerrarsesion=true" tabindex="-1" ><?php echo $lang['close_session'] ?></a>
                <a class="dropdown-item" href="frontend/micuenta.php" tabindex="-1" ><?php echo $lang['mi_cuenta'] ?></a>
            </div>
            </div>   

            </div>   
                      
                   
        <?php }else{?>
        

        <img src="./img/user.png" width="40" height="40" class="d-inline-block align-middle" alt="" loading="lazy">
      <div class="btn-group dropleft ml-3">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
          <?php echo $lang['Cuenta'] ?>
          </button>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="frontend/CreateAcount.php"><?php echo $lang['create_account'] ?></a>
              <a class="dropdown-item" href="frontend/logIn.php"><?php echo $lang['ini_session'] ?></a>

          </div>
        </div>

        <?php
        }




        


}



function login_frontend($lang){


        if(isset($_SESSION['login'])) { ?>

         <div class="container">
         
         <img src="../img/user.png" width="40" height="40" class="d-inline-block align-middle" alt="" loading="lazy">
         <a class="text-secondary" style="margin-left: 20px;" href="../frontend/micuenta.php"><?php echo $_SESSION['user_loged']['nom_usuario']; ?></a>
        <div class="btn-group dropleft ml-3">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
          <?php echo $lang['Cuenta'] ?>
          </button>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="../php_partials/login_true.php?cerrarsesion=true" tabindex="-1" ><?php echo $lang['close_session'] ?></a>
              <a class="dropdown-item" href="../frontend/micuenta.php" tabindex="-1" ><?php echo $lang['mi_cuenta'] ?></a>
          </div>
        </div>
         
         </div>       
           
                      
                   
        <?php }else{?>
        

        <img src="../img/user.png" width="40" height="40" class="d-inline-block align-middle" alt="" loading="lazy">
      <div class="btn-group dropleft ml-3">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
          <?php echo $lang['Cuenta'] ?>
          </button>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="../frontend/CreateAcount.php"><?php echo $lang['create_account'] ?></a>
              <a class="dropdown-item" href="../frontend/logIn.php"><?php echo $lang['ini_session'] ?></a>

          </div>
        </div>

        <?php
        }




        


}


function login_juegos($lang){


  if(isset($_SESSION['login'])) { ?>

   <div class="container">
   <p class="text-secondary" style="margin-right: 20px;">Puntos totales:  <?php echo $_SESSION['user_loged']['puntos']; ?></p>
   <img src="../img/user.png" width="40" height="40" class="d-inline-block align-middle" alt="" loading="lazy">
   <a class="text-secondary" style="margin-left: 20px;" href="../frontend/micuenta.php"><?php echo $_SESSION['user_loged']['nom_usuario']; ?></a>
  <div class="btn-group dropleft ml-3">
    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
    <?php echo $lang['Cuenta'] ?>
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="../php_partials/login_true.php?cerrarsesion=true" tabindex="-1" ><?php echo $lang['close_session'] ?></a>
        <a class="dropdown-item" href="../frontend/micuenta.php" tabindex="-1" ><?php echo $lang['mi_cuenta'] ?></a>
    </div>
  </div>
   
   </div>       
     
                
             
  <?php }else{?>
  

  <img src="../img/user.png" width="40" height="40" class="d-inline-block align-middle" alt="" loading="lazy">
<div class="btn-group dropleft ml-3">
    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
    <?php echo $lang['Cuenta'] ?>
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="../frontend/CreateAcount.php"><?php echo $lang['create_account'] ?></a>
        <a class="dropdown-item" href="../frontend/logIn.php"><?php echo $lang['ini_session'] ?></a>

    </div>
  </div>

  <?php
  }




  


}


function cerrar_sesion(){

  session_destroy();
  header('Location: ../index.php');
  exit();
  
  
  }
  
  if (isset($_GET['cerrarsesion'])) {
    cerrar_sesion();
  }


function juegos($lang){



  if(isset($_SESSION['login'])) { ?>

    <?php if($_SESSION['juego'] === 0){ ?>


      <div class="container">
        <div class="row">
          <div class="col-md-6">
              <div id="juego1" class="card" style="width: 35rem;">
                  <img class="card-img-top" src="../img/juego1.PNG" alt="Card image cap" >
                  <div class="card-body">
                    <p class="card-text"><?php echo $lang['parafo1_juegos'] ?></p>
                    <a href="./juegosuper.php" class="btn btnjugar"><?php echo $lang['jugar'] ?></a>
                      <div style="float: right; color: #F3B63E;">

                          <p class="card-text" style="margin-right: 20px;">Puntos conseguidos:  <?php echo $_SESSION['user_loged']['puntosj1'];  ?></p>
                          
                      </div>
                  </div>
                </div>
          </div>
          <div class="col-md-6">
              <div id="juego2" class="card" style="width: 35rem;">
                  <img class="card-img-top" src="../img/juego3.PNG" alt="Card image cap" >
                  <div class="card-body">
                    <p class="card-text"><?php echo $lang['parafo2_juegos'] ?></p>
                    <a href="./JuegoCKMama.php" class="btn btnjugar disabled"><?php echo $lang['jugar'] ?></a>

                    <div style="float: right; color: #F3B63E;">

                          <p class="card-text" style="margin-right: 20px;">Puntos conseguidos:  <?php echo $_SESSION['user_loged']['puntosj2'];  ?></p>
                          
                    </div>

                  </div>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
              <div id="juego3" class="card" style="width: 35rem">
                  <img class="card-img-top" src="../img/juego2.PNG" alt="Card image cap" >
                  <div class="card-body">
                    <p class="card-text"><?php echo $lang['parafo3_juegos'] ?></p>
                    <a href="./juegomoto.php" class="btn btnjugar disabled"><?php echo $lang['jugar'] ?></a>

                    <div style="float: right; color: #F3B63E;">

                          <p class="card-text" style="margin-right: 20px;">Puntos conseguidos:  <?php echo $_SESSION['user_loged']['puntosj3'];  ?></p>
                          
                    </div>
                  </div>
              </div>
          </div>
          <div class="col-md-6">  
              <div id="juego4" class="card" style="width: 35rem;">
                  <img class="card-img-top" src="../img/juego4.PNG" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text"><?php echo $lang['parafo4_juegos'] ?></p>
                    <a href="./menujuegoventanas.html" class="btn btnjugar disabled"><?php echo $lang['jugar'] ?></a>

                    <div style="float: right; color: #F3B63E;">

                          <p class="card-text" style="margin-right: 20px;">Puntos conseguidos:  <?php echo $_SESSION['user_loged']['puntosj4'];  ?></p>
                          
                    </div>
                  </div>
              </div>
          </div>    
        </div>
      </div> 




    <?php } ?>

    <?php if($_SESSION['juego'] === 1){ ?>


<div class="container">
  <div class="row">
    <div class="col-md-6">
        <div id="juego1" class="card" style="width: 35rem;">
            <img class="card-img-top" src="../img/juego1.PNG" alt="Card image cap" >
            <div class="card-body">
              <p class="card-text"><?php echo $lang['parafo1_juegos'] ?></p>
              <a href="./juegosuper.php" class="btn btnjugar"><?php echo $lang['jugar'] ?></a>

              <div style="float: right; color: #F3B63E;">

                <p class="card-text" style="margin-right: 20px;">Puntos conseguidos:  <?php echo $_SESSION['user_loged']['puntosj1'];  ?></p>
                          
              </div>
            </div>
          </div>
    </div>
    <div class="col-md-6">
        <div id="juego2" class="card" style="width: 35rem;">
            <img class="card-img-top" src="../img/juego3.PNG" alt="Card image cap" >
            <div class="card-body">
              <p class="card-text"><?php echo $lang['parafo2_juegos'] ?></p>
              <a href="./JuegoCKMama.php" class="btn btnjugar"><?php echo $lang['jugar'] ?></a>

              <div style="float: right; color: #F3B63E;">

                <p class="card-text" style="margin-right: 20px;">Puntos conseguidos:  <?php echo $_SESSION['user_loged']['puntosj2'];  ?></p>
                          
              </div>
            </div>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
        <div id="juego3" class="card" style="width: 35rem">
            <img class="card-img-top" src="../img/juego2.PNG" alt="Card image cap" >
            <div class="card-body">
              <p class="card-text"><?php echo $lang['parafo3_juegos'] ?></p>
              <a href="./juegomoto.php" class="btn btnjugar disabled"><?php echo $lang['jugar'] ?></a>

              <div style="float: right; color: #F3B63E;">

                <p class="card-text" style="margin-right: 20px;">Puntos conseguidos:  <?php echo $_SESSION['user_loged']['puntosj3'];  ?></p>
                          
              </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">  
        <div id="juego4" class="card" style="width: 35rem;">
            <img class="card-img-top" src="../img/juego4.PNG" alt="Card image cap">
            <div class="card-body">
              <p class="card-text"><?php echo $lang['parafo4_juegos'] ?></p>
              <a href="./menujuegoventanas.html" class="btn btnjugar disabled"><?php echo $lang['jugar'] ?></a>
              <div style="float: right; color: #F3B63E;">

                <p class="card-text" style="margin-right: 20px;">Puntos conseguidos:  <?php echo $_SESSION['user_loged']['puntosj4'];  ?></p>
                          
              </div>
            </div>
        </div>
    </div>    
  </div>
</div> 




<?php } ?>

<?php if($_SESSION['juego'] === 2){ ?>


<div class="container">
  <div class="row">
    <div class="col-md-6">
        <div id="juego1" class="card" style="width: 35rem;">
            <img class="card-img-top" src="../img/juego1.PNG" alt="Card image cap" >
            <div class="card-body">
              <p class="card-text"><?php echo $lang['parafo1_juegos'] ?></p>
              <a href="./juegosuper.php" class="btn btnjugar"><?php echo $lang['jugar'] ?></a>
              <div style="float: right; color: #F3B63E;">

                <p class="card-text" style="margin-right: 20px;">Puntos conseguidos:  <?php echo $_SESSION['user_loged']['puntosj1'];  ?></p>
                          
              </div>
            </div>
          </div>
    </div>
    <div class="col-md-6">
        <div id="juego2" class="card" style="width: 35rem;">
            <img class="card-img-top" src="../img/juego3.PNG" alt="Card image cap" >
            <div class="card-body">
              <p class="card-text"><?php echo $lang['parafo2_juegos'] ?></p>
              <a href="./JuegoCKMama.php" class="btn btnjugar"><?php echo $lang['jugar'] ?></a>

              <div style="float: right; color: #F3B63E;">

                <p class="card-text" style="margin-right: 20px;">Puntos conseguidos:  <?php echo $_SESSION['user_loged']['puntosj2'];  ?></p>
                          
              </div>
            </div>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
        <div id="juego3" class="card" style="width: 35rem">
            <img class="card-img-top" src="../img/juego2.PNG" alt="Card image cap" >
            <div class="card-body">
              <p class="card-text"><?php echo $lang['parafo3_juegos'] ?></p>
              <a href="./juegomoto.php" class="btn btnjugar"><?php echo $lang['jugar'] ?></a>

              <div style="float: right; color: #F3B63E;">

                <p class="card-text" style="margin-right: 20px;">Puntos conseguidos:  <?php echo $_SESSION['user_loged']['puntosj3'];  ?></p>
                          
              </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">  
        <div id="juego4" class="card" style="width: 35rem;">
            <img class="card-img-top" src="../img/juego4.PNG" alt="Card image cap">
            <div class="card-body">
              <p class="card-text"><?php echo $lang['parafo4_juegos'] ?></p>
              <a href="./menujuegoventanas.html" class="btn btnjugar disabled"><?php echo $lang['jugar'] ?></a>

              <div style="float: right; color: #F3B63E;">

                <p class="card-text" style="margin-right: 20px;">Puntos conseguidos:  <?php echo $_SESSION['user_loged']['puntosj4'];  ?></p>
                          
              </div>
            </div>
        </div>
    </div>    
  </div>
</div> 




<?php } ?>

<?php if($_SESSION['juego'] === 3){ ?>


<div class="container">
  <div class="row">
    <div class="col-md-6">
        <div id="juego1" class="card" style="width: 35rem;">
            <img class="card-img-top" src="../img/juego1.PNG" alt="Card image cap" >
            <div class="card-body">
              <p class="card-text"><?php echo $lang['parafo1_juegos'] ?></p>
              <a href="./juegosuper.php" class="btn btnjugar"><?php echo $lang['jugar'] ?></a>

              <div style="float: right; color: #F3B63E;">

                <p class="card-text" style="margin-right: 20px;">Puntos conseguidos:  <?php echo $_SESSION['user_loged']['puntosj1'];  ?></p>
                          
              </div>
            </div>
          </div>
    </div>
    <div class="col-md-6">
        <div id="juego2" class="card" style="width: 35rem;">
            <img class="card-img-top" src="../img/juego3.PNG" alt="Card image cap" >
            <div class="card-body">
              <p class="card-text"><?php echo $lang['parafo2_juegos'] ?></p>
              <a href="./JuegoCKMama.php" class="btn btnjugar"><?php echo $lang['jugar'] ?></a>

              <div style="float: right; color: #F3B63E;">

                <p class="card-text" style="margin-right: 20px;">Puntos conseguidos:  <?php echo $_SESSION['user_loged']['puntosj2'];  ?></p>
                          
              </div>
            </div>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
        <div id="juego3" class="card" style="width: 35rem">
            <img class="card-img-top" src="../img/juego2.PNG" alt="Card image cap" >
            <div class="card-body">
              <p class="card-text"><?php echo $lang['parafo3_juegos'] ?></p>
              <a href="./juegomoto.php" class="btn btnjugar"><?php echo $lang['jugar'] ?></a>
              <div style="float: right; color: #F3B63E;">

                <p class="card-text" style="margin-right: 20px;">Puntos conseguidos:  <?php echo $_SESSION['user_loged']['puntosj3'];  ?></p>
                          
              </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">  
        <div id="juego4" class="card" style="width: 35rem;">
            <img class="card-img-top" src="../img/juego4.PNG" alt="Card image cap">
            <div class="card-body">
              <p class="card-text"><?php echo $lang['parafo4_juegos'] ?></p>
              <a href="./menujuegoventanas.html" class="btn btnjugar"><?php echo $lang['jugar'] ?></a>
              <div style="float: right; color: #F3B63E;">

                <p class="card-text" style="margin-right: 20px;">Puntos conseguidos:  <?php echo $_SESSION['user_loged']['puntosj4'];  ?></p>
                          
              </div>
            </div>
        </div>
    </div>    
  </div>
</div> 




<?php } ?>

            
      
                 
              
   <?php }else{ ?>
   

    <h1 style="margin: auto; text-align: center; margin-top: 20px; color: #F3B63E;">PARA JUGAR A LOS JUEGOS INICIE SESIÓN</h1>

    <div class="container">
        <div class="row">
          <div class="col-md-6">
              <div id="juego1" class="card" style="width: 35rem;">
                  <img class="card-img-top" src="../img/juego1.PNG" alt="Card image cap" >
                  <div class="card-body">
                    <p class="card-text"><?php echo $lang['parafo1_juegos'] ?></p>
                    <a href="./juegosuper.php" class="btn btnjugar disabled"><?php echo $lang['jugar'] ?></a>
                  </div>
                </div>
          </div>
          <div class="col-md-6">
              <div id="juego2" class="card" style="width: 35rem;">
                  <img class="card-img-top" src="../img/juego3.PNG" alt="Card image cap" >
                  <div class="card-body">
                    <p class="card-text"><?php echo $lang['parafo2_juegos'] ?></p>
                    <a href="./JuegoCKMama.php" class="btn btnjugar disabled"><?php echo $lang['jugar'] ?></a>
                  </div>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
              <div id="juego3" class="card" style="width: 35rem">
                  <img class="card-img-top" src="../img/juego2.PNG" alt="Card image cap" >
                  <div class="card-body">
                    <p class="card-text"><?php echo $lang['parafo3_juegos'] ?></p>
                    <a href="./juegomoto.php" class="btn btnjugar disabled"><?php echo $lang['jugar'] ?></a>
                  </div>
              </div>
          </div>
          <div class="col-md-6">  
              <div id="juego4" class="card" style="width: 35rem;">
                  <img class="card-img-top" src="../img/juego4.PNG" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text"><?php echo $lang['parafo4_juegos'] ?></p>
                    <a href="./menujuegoventanas.html" class="btn btnjugar disabled"><?php echo $lang['jugar'] ?></a>
                  </div>
              </div>
          </div>    
        </div>
      </div>

   <?php
   }




}


  

?>



           
           


