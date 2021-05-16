<?php 

session_start();

require_once('../php_libraries/bd.php');

if (isset($_POST['insert'])) 
    {
        insertOferta($_POST['id_restaurante'],$_POST['id_oferta'],$_POST['nombre'],$_POST['puntos'],$_POST['codigo']);

        if (isset($_SESSION['error'])) {
            
            header('Location: ../frontend/oferta.php');
            exit();
        }
        else
        {

            header('Location: ../frontend/administracion.php');
            exit();

        }

    }
elseif (isset($_POST['delete'])) 
    {
        
    deleteOferta($_POST['id_restaurante'],$_POST['id_oferta']);
    header('Location: ../frontend/administracion.php');
    exit();

    }
elseif(isset($_POST['update']))
{
    updateOferta($_POST['id_oferta'],$_POST['nombre'],$_POST['puntos'],$_POST['codigo']);
    header('Location: ../frontend/administracion.php');
    exit();
}


?>