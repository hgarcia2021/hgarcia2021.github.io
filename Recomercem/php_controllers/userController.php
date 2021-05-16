<?php 

session_start();

require_once('../php_libraries/bd.php');

if (isset($_POST['insert'])) 
    {
        if($_POST['nom_usuario'] == "" || $_POST['contr'] == "" || $_POST['admin'] == "" ||  $_POST['puntos'] == "" || $_POST['mail'] == "")
        {
            $usuarios['nom_usuario'] = $_POST['nom_usuario'];
            $usuarios['contr'] = $_POST['contr'];
            $usuarios['admin'] = $_POST['admin'];
            $usuarios['puntos'] = $_POST['puntos'];
            $usuarios['mail'] = $_POST['mail'];
            $_SESSION['usuario'] = $usuarios;
        
 
            header("Refresh:0; url = '../frontend/usuario.php'");
            
            
        }
        else
        {
            $contr = $_POST['contr'];
            $contrEncriptada = encryption($contr);
            insertUsuarioAdmin($_POST['id_usuario'],$_POST['nom_usuario'],$contrEncriptada,$_POST['admin'],$_POST['puntos'],$_POST['mail']);

            if (isset($_SESSION['error'])) 
            {
                
                header('Location: ../frontend/usuario.php');
                exit();
            }
            else
            {

                header('Location: ../frontend/adminUser.php');
                exit();

            }

        }
    }
elseif (isset($_POST['delete'])) 
    {
    deleteUsuario($_POST['id_usuario']);
    header('Location: ../frontend/adminUser.php');
    exit();

    }
elseif(isset($_POST['update']))
    {
        $contr = $_POST['contr'];
        $contrEncriptada = encryption($contr);
        updateUsuarios($_POST['id_usuario'],$_POST['nom_usuario'],$contrEncriptada,$_POST['admin'],$_POST['puntos'],$_POST['mail']);
        header('Location: ../frontend/adminUser.php');
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
        
	


?>