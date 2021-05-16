<?php 
if (!isset($_SESSION)) 
{
    session_start();
}

require_once('../php_libraries/bd.php');

    if(isset($_POST['crearCuenta']))
    {

        if($_POST['nombre'] == "" || $_POST['email'] == "" || $_POST['confirm_contr'] == "" || $_POST['contr'] == ""){
                $user['nombre'] = $_POST['nombre'];
                $user['mail'] = $_POST['email'];
                $_SESSION['user'] = $user;
            
                $_SESSION['error'] = "Porfavor, rellene todos los datos.";
                header("Refresh:0; url = '../frontend/CreateAcount.php'");
                
                
        }else{
            if ($_POST['confirm_contr'] == $_POST['contr']) {

                $contr = $_POST['contr'];
                $contrEncriptada = encryption($contr);
    
    
                insertUsuario($_POST['nombre'], $_POST['email'], $contrEncriptada);
    
                if (isset($_SESSION['error'])) {
                    header('Location: ../frontend/CreateAcount.php');
                    exit();
                }else{
                    $_SESSION['mensaje'] = "La cuenta ha sido creada correctamente.";
                    header('Location: ../index.php');
                    exit();
    
                }
                
                
            }else{
                $_SESSION['error'] = "Las contraseñas no son iguales";
                header('Location: ../frontend/CreateAcount.php');
                

            }
        }

        
        
        

    }




    if(isset($_POST['login']))
    {
        login();
    }



    function login(){
        $usuarios = selectUsuarios();
        $contr = encryption($_POST['contr_login']);
        $login = false;
        

        foreach ($usuarios as $usu)
        {
            if ($usu['mail'] == $_POST['mail_login'] && $usu['contr'] == $contr) {
                $login = true;
                $usuario = $usu;
            }
    
        }
        
        if ($login == true) {
            $_SESSION['login'] = true;
            $_SESSION['user_loged'] = $usuario;
            $_SESSION['juego'] = 0;
            $_SESSION['mensaje'] = "Bienvenido " . $usuario['nom_usuario'] . ".";

            if ($usuario['admin'] == 1) {
                $_SESSION['admin'] = true;
            }
            
            if ($_SESSION['user_loged']['puntosj1'] != null) {
                $_SESSION['juego'] = 1;
            }
            if ($_SESSION['user_loged']['puntosj2'] != null) {
                $_SESSION['juego'] = 2;
            }
            if ($_SESSION['user_loged']['puntosj3'] != null) {
                $_SESSION['juego'] = 3;
            }

            header('Location: ../index.php');
            exit();
        }

        $_SESSION['error'] = "Usuario y/o contraseña incorrectos.";
            header('Location: ../frontend/logIn.php');
            exit();

    }



    if(isset($_POST['volverajugarsuper']))
    {
        $_SESSION['juego'] = 1;
        header('Location: ../frontend/juegosuper.php');
        exit();
    }

    if(isset($_POST['salirsuper']))
    {
        $_SESSION['juego'] = 1;

        if (isset($_COOKIE["puntosJuegoSuper"])) {
            if ($_COOKIE["puntosJuegoSuper"] > $_SESSION['user_loged']['puntosj1']) {
                
                
                $_SESSION['user_loged']['puntosj1'] = $_COOKIE["puntosJuegoSuper"];

                $_SESSION['user_loged']['puntos'] = $_SESSION['user_loged']['puntosj1'] + $_SESSION['user_loged']['puntosj2'] + $_SESSION['user_loged']['puntosj3'] + $_SESSION['user_loged']['puntosj4'];

                updateUsuariosPuntos($_SESSION['user_loged']['id_usuario'], $_SESSION['user_loged']['nom_usuario'], $_SESSION['user_loged']['contr'], 
                $_SESSION['user_loged']['admin'], $_SESSION['user_loged']['puntos'], $_SESSION['user_loged']['mail'], $_SESSION['user_loged']['puntosj1'], $_SESSION['user_loged']['puntosj2'], $_SESSION['user_loged']['puntosj3'], $_SESSION['user_loged']['puntosj4']);



            }
            
        }

        

        

        
        header('Location: ../frontend/juegos.php');
        exit();
    }




    if(isset($_POST['volverajugarckm']))
    {
        $_SESSION['juego'] = 2;
        header('Location: ../frontend/JuegoCKMama.php');
        exit();
    }

    if(isset($_POST['salirckm']))
    {
        $_SESSION['juego'] = 2;

        if (isset($_COOKIE["puntosJuegoCKM"])) {
            if ($_COOKIE["puntosJuegoCKM"] > $_SESSION['user_loged']['puntosj2']) {
                
                
                $_SESSION['user_loged']['puntosj2'] = $_COOKIE["puntosJuegoCKM"];

                $_SESSION['user_loged']['puntos'] = $_SESSION['user_loged']['puntosj1'] + $_SESSION['user_loged']['puntosj2'] + $_SESSION['user_loged']['puntosj3'] + $_SESSION['user_loged']['puntosj4'];

                updateUsuariosPuntos($_SESSION['user_loged']['id_usuario'], $_SESSION['user_loged']['nom_usuario'], $_SESSION['user_loged']['contr'], 
                $_SESSION['user_loged']['admin'], $_SESSION['user_loged']['puntos'], $_SESSION['user_loged']['mail'], $_SESSION['user_loged']['puntosj1'], $_SESSION['user_loged']['puntosj2'], $_SESSION['user_loged']['puntosj3'], $_SESSION['user_loged']['puntosj4']);



            }
            
        }



        header('Location: ../frontend/juegos.php');
        exit();
    }

    



    if(isset($_POST['volverajugarmoto']))
    {
        $_SESSION['juego'] = 3;
        header('Location: ../frontend/juegomoto.php');
        exit();
    }

    if(isset($_POST['salirmoto']))
    {
        $_SESSION['juego'] = 3;

        if (isset($_COOKIE["puntosJuegoMoto"])) {
            if ($_COOKIE["puntosJuegoMoto"] > $_SESSION['user_loged']['puntosj3']) {
                
                
                $_SESSION['user_loged']['puntosj3'] = $_COOKIE["puntosJuegoMoto"];

                $_SESSION['user_loged']['puntos'] = $_SESSION['user_loged']['puntosj1'] + $_SESSION['user_loged']['puntosj2'] + $_SESSION['user_loged']['puntosj3'] + $_SESSION['user_loged']['puntosj4'];

                updateUsuariosPuntos($_SESSION['user_loged']['id_usuario'], $_SESSION['user_loged']['nom_usuario'], $_SESSION['user_loged']['contr'], 
                $_SESSION['user_loged']['admin'], $_SESSION['user_loged']['puntos'], $_SESSION['user_loged']['mail'], $_SESSION['user_loged']['puntosj1'], $_SESSION['user_loged']['puntosj2'], $_SESSION['user_loged']['puntosj3'], $_SESSION['user_loged']['puntosj4']);



            }
            
        }


        header('Location: ../frontend/juegos.php');
        exit();
    }

    

	
	function encryption($string){
        $METHOD = 'AES-256-CBC';
        $SECRET_KEY = '$RECOMERCEM@2021';
        $SECRET_IV = 526341;

			$output=FALSE;
			$key=hash('sha256', $SECRET_KEY);
			$iv=substr(hash('sha256', $SECRET_IV), 0, 16);
			$output=openssl_encrypt($string, $METHOD, $key, 0, $iv);
			$output=base64_encode($output);
			return $output;
    }
        
	function decryption($string){
        $METHOD = 'AES-256-CBC';
	    $SECRET_KEY = '$RECOMERCEM@2021';
	    $SECRET_IV = 526341;

			$key=hash('sha256', $SECRET_KEY);
			$iv=substr(hash('sha256', $SECRET_IV), 0, 16);
			$output=openssl_decrypt(base64_decode($string), $METHOD, $key, 0, $iv);
			return $output;
	}





?>