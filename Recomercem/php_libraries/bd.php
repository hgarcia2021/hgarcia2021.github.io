<?php

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

function errorMessage($e)
{
    if (!empty($e->errorInfo[1])) 
    {
        switch ($e->errorInfo[1]) {
            case 1062:
                $mensaje = 'Registro duplicado';
                break;
            case 1451:
                $mensaje = 'Registro con elementos relacionados';
                break;
            
            default:
                $mensaje = $e->errorInfo[1].' - '.$e->errorInfo[2];
                break;
        }
    }
    else
    {
        switch ($e->getCode()) {
            case 1044:
                $mensaje = 'Usuario y/o password incorrecto';
                break;
            case 1049:
                $mensaje = 'Base de datos desconocida';
                break;
            case 2002:
                $mensaje = 'No se encuentra el servidor';
                break;
            default:
                $mensaje = $e->getCode().' - '. $e->getMessage();
                break;
        }
    }

    return $mensaje;

}




function openBd(){
    
    $servername = "localhost";
    $username = "root";
    $password = "";

    
    $conexion = new PDO("mysql:host=$servername;dbname=recomercem", $username, $password);
    // set the PDO error mode to exception
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("set names utf8");
    
    return $conexion;
}

function closeBd()
{
    return null;
}

function selectAllOfertas()
{

    $conexion = openBd();
    $sentenciaText = "select * from ofertas";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado = $sentencia->fetchAll();
    $conexion = closeBd();
    return $resultado;
}
function selectUnaOferta($id_oferta,$id_restaurante)
{

    $conexion = openBd();
    $sentenciaText = " select ofertas_restaurante.id_restaurante, ofertas.id_oferta,ofertas.nombre,ofertas.puntos,ofertas.codigo 
    from ofertas, ofertas_restaurante
    where ofertas.id_oferta = ofertas_restaurante.id_oferta AND ofertas_restaurante.id_oferta= $id_oferta AND ofertas_restaurante.id_restaurante = $id_restaurante ";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado = $sentencia->fetchAll();
    $conexion = closeBd();
    return $resultado;
}
function selectOfertasRestaurante()
{
    $conexion = openBd();
    $sentenciaText = "select restaurantes.nombre as nomres, ofertas_restaurante.id_restaurante, ofertas.id_oferta,ofertas.nombre,ofertas.puntos,ofertas.codigo 
    from ofertas, ofertas_restaurante, restaurantes
    where ofertas.id_oferta = ofertas_restaurante.id_oferta AND ofertas_restaurante.id_restaurante=restaurantes.id_restaurante ";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado = $sentencia->fetchAll();
    $conexion = closeBd();
    return $resultado;
}

function selectOfertaByRestaurante($id)
{

    $conexion = openBd();
    $sentenciaText = "select * from ofertas 
    where id_oferta IN (SELECT id_oferta FROM ofertas_restaurante where id_restaurante = $id)";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $ofertas = $sentencia->fetchAll();
    $conexion = closeBd();

    return $ofertas;
}

function selectRestauranteByOferta($id)
{

    $conexion = openBd();
    $sentenciaText = "select nombre from restaurantes 
    where id_restaurante IN (SELECT id_restaurante FROM ofertas_restaurante where id_oferta = $id)";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $ofertas = $sentencia->fetchAll();
    $conexion = closeBd();

    return $ofertas;
}

function selectOfertaMax()
{
    $conexion = openBd();
    $sentenciaText = "select max(id_oferta)+1 as idmax from ofertas";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado = $sentencia->fetchAll();
    $conexion = closeBd();
    return $resultado;
}

function selectUsuarios()
{
    $conexion = openBd();
    $sentenciaText = "select * from usuarios";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado = $sentencia->fetchAll();
    $conexion = closeBd();
    return $resultado;

}
function selectUsuarioMax()
{
    $conexion = openBd();
    $sentenciaText = "select max(id_usuario)+1 as idmax from usuarios";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado = $sentencia->fetchAll();
    $conexion = closeBd();
    return $resultado;
}

function selectUnUsuario($id_usuario)
{
    $conexion = openBd();
    $sentenciaText = "select * from usuarios where id_usuario = $id_usuario";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado = $sentencia->fetchAll();
    $conexion = closeBd();
    return $resultado;
}

function insertUsuario($nombre, $mail, $contr)
{
    $duplicado = null;
    $usuarios = selectUsuarios();
    foreach ($usuarios as $usuario) {
        if($usuario['nom_usuario'] == $nombre){
            $_SESSION['error']="El nombre de usuario ya existe.";
            $duplicado = true;
        }
        if($usuario['mail'] == $mail){
            $_SESSION['error']="El mail ya está en uso.";
            $duplicado = true;
        }
    }

    if($duplicado == null){
        try{
            $conexion = openBd();
        
            $sentenciaText = "insert into usuarios (nom_usuario, contr, mail) values (:nom_usuario, :contr, :mail)";
            $sentencia = $conexion->prepare($sentenciaText);
        
            $sentencia->bindParam(':nom_usuario', $nombre);
            $sentencia->bindParam(':contr', $contr);
            $sentencia->bindParam(':mail', $mail);
            
        
            $sentencia->execute();
        }
        
            catch(PDOException $e)
            {
                $_SESSION['error']= errorMessage($e);
                $user['nombre'] = $nombre;
                $user['mail'] = $mail;
                $_SESSION['user'] = $user;
            }
        
            $conexion = closeBd();
    }
    


}

function insertUsuarioAdmin($id_usuario, $nombre, $contr, $admin, $puntos, $mail)
{
    $duplicado = null;
    $usuarios = selectUsuarios();
    foreach ($usuarios as $usuario) {
        if($usuario['nom_usuario'] == $nombre){
            $_SESSION['error']="El nombre de usuario ya existe.";
            $duplicado = true;
        }
        if($usuario['mail'] == $mail){
            $_SESSION['error']="El mail ya está en uso.";
            $duplicado = true;
        }
    }
    if($duplicado == null){
    try{
    $conexion = openBd();

    $sentenciaText = "insert into usuarios (id_usuario,nom_usuario, contr, admin, puntos, mail) values (:id_usuario, :nom_usuario, :contr, :admin, :puntos, :mail)";
    $sentencia = $conexion->prepare($sentenciaText);

    $sentencia->bindParam(':id_usuario', $id_usuario);
    $sentencia->bindParam(':nom_usuario', $nombre);
    $sentencia->bindParam(':contr', $contr);
    $sentencia->bindParam(':admin', $admin);
    $sentencia->bindParam(':puntos', $puntos);
    $sentencia->bindParam(':mail', $mail);
    

    $sentencia->execute();
    }

    catch(PDOException $e)
    {
        $_SESSION['error']= errorMessage($e);
        $usuarios['nom_usuario'] = $nombre;
        $usuarios['contr'] = $contr;
        $usuarios['admin'] = $admin;
        $usuarios['puntos'] = $puntos;
        $usuarios['mail'] = $mail;

        $_SESSION['usuario']=$usuarios;
    }

    $conexion = closeBd();

    }
}
function insertOferta($id_restaurante,$id_oferta,$nombre,$puntos,$codigo)
{
    try
    {

        $conexion = openBd();

        $sentenciaText = "insert into ofertas_restaurante(id_restaurante,id_oferta) values(:id_restaurante,:id_oferta)";
        $sentencia = $conexion->prepare($sentenciaText);
        $sentencia->bindParam(':id_restaurante', $id_restaurante);
        $sentencia->bindParam(':id_oferta', $id_oferta);
        $sentencia->execute();

        $conexion = closeBd();

        $conexion = openBd();

        $sentenciaText = "insert into ofertas(id_oferta,nombre,puntos,codigo) values(:id_oferta,:nombre,:puntos,:codigo)";
        $sentencia = $conexion->prepare($sentenciaText);
        $sentencia->bindParam(':id_oferta', $id_oferta);
        $sentencia->bindParam(':nombre', $nombre);
        $sentencia->bindParam(':puntos', $puntos);
        $sentencia->bindParam(':codigo', $codigo);
        
        $sentencia->execute();

        $_SESSION['mensaje']= 'Registro insertado correctamente';

        
    }
    catch(PDOException $e)
    {
        $_SESSION['error']= errorMessage($e);
    }
    $conexion = closeBd();
}
function deleteOferta($id_restaurante,$id_oferta)
{
    try
    {
    $conexion = openBd();

    $sentenciaText = "delete from ofertas where id_oferta = $id_oferta; delete from ofertas_restaurante where id_oferta = $id_oferta AND id_restaurante = $id_restaurante";
    $sentencia = $conexion->prepare($sentenciaText);

    $sentencia->execute();

    $_SESSION['mensaje']= 'Registro borrado correctamente';

    }
    catch(PDOException $e)
    {
        $_SESSION['error']= errorMessage($e);
    }

    $conexion = closeBd();
   

}
function deleteUsuario($id_usuario)
{
    try
    {
    $conexion = openBd();

    $sentenciaText = "delete from usuarios where id_usuario = $id_usuario";
    $sentencia = $conexion->prepare($sentenciaText);

    $sentencia->execute();

    $_SESSION['mensaje']= 'Registro borrado correctamente';

    }
    catch(PDOException $e)
    {
        $_SESSION['error']= errorMessage($e);
    }

    $conexion = closeBd();
   

}
function updateOferta($id_oferta,$nombre,$puntos,$codigo)
{
    try
    {
        $conexion = openBd();

        $sentenciaText = "update ofertas SET nombre =:nombre, puntos =:puntos, codigo = :codigo where id_oferta = $id_oferta;";
        $sentencia = $conexion->prepare($sentenciaText);
        $sentencia->bindParam(':nombre', $nombre);
        $sentencia->bindParam(':puntos', $puntos);
        $sentencia->bindParam(':codigo', $codigo);
        
        $sentencia->execute();

        $_SESSION['mensaje']= 'Registro actualizado correctamente';

        
    }
    catch(PDOException $e)
    {
        $_SESSION['error']= errorMessage($e);
        $oferta['nombre'] = $nombre;
        $oferta['puntos'] = $puntos;
        $oferta['codigo'] = $codigo;

        $_SESSION['oferta']= $oferta;
    }
    $conexion = closeBd();
}
function updateUsuarios($id_usuario,$nombre,$contr,$admin,$puntos,$mail)
{
    try
    {
        $conexion = openBd();

        $sentenciaText = "update usuarios SET nom_usuario =:nombre,contr=:contr, admin = :admin, puntos = :puntos, mail = :mail where id_usuario = $id_usuario;";
        $sentencia = $conexion->prepare($sentenciaText);
        $sentencia->bindParam(':nombre', $nombre);
        $sentencia->bindParam(':contr', $contr);
        $sentencia->bindParam(':admin', $admin);
        $sentencia->bindParam(':puntos', $puntos);
        $sentencia->bindParam(':mail', $mail);
        
        $sentencia->execute();

        $_SESSION['mensaje']= 'Registro actualizado correctamente';

     
        
    }
    catch(PDOException $e)
    {
        $_SESSION['error']= errorMessage($e);
        $usuarios['nom_usuario'] = $nombre;
        $usuarios['contr'] = $contr;
        $usuarios['admin'] = $admin;
        $usuarios['puntos'] = $puntos;
        $usuarios['mail'] = $mail;

        $_SESSION['usuario']=$usuarios;


    }
    $conexion = closeBd();
}



function updateUsuariosPuntos($id_usuario,$nombre,$contr,$admin,$puntos,$mail,$puntosj1,$puntosj2,$puntosj3,$puntosj4)
{
    try
    {
        $conexion = openBd();

        $sentenciaText = "update usuarios SET nom_usuario =:nombre,contr=:contr, admin = :admin, puntos = :puntos, mail = :mail, puntosj1 = :puntosj1, puntosj2 = :puntosj2, puntosj3 = :puntosj3, puntosj4 = :puntosj4 where id_usuario = $id_usuario;";
        $sentencia = $conexion->prepare($sentenciaText);
        $sentencia->bindParam(':nombre', $nombre);
        $sentencia->bindParam(':contr', $contr);
        $sentencia->bindParam(':admin', $admin);
        $sentencia->bindParam(':puntos', $puntos);
        $sentencia->bindParam(':mail', $mail);
        $sentencia->bindParam(':puntosj1', $puntosj1);
        $sentencia->bindParam(':puntosj2', $puntosj2);
        $sentencia->bindParam(':puntosj3', $puntosj3);
        $sentencia->bindParam(':puntosj4', $puntosj4);
        
        $sentencia->execute();

        

     
        
    }
    catch(PDOException $e)
    {
        $_SESSION['error']= errorMessage($e);
        $usuarios['nom_usuario'] = $nombre;
        $usuarios['contr'] = $contr;
        $usuarios['admin'] = $admin;
        $usuarios['puntos'] = $puntos;
        $usuarios['mail'] = $mail;

        $_SESSION['usuario']=$usuarios;


    }
    $conexion = closeBd();
}

function updateUsuariosmiCuenta($id_usuario,$nombre,$contr,$admin,$puntos,$mail)
{
    try
    {
        $conexion = openBd();

        $sentenciaText = "update usuarios SET nom_usuario =:nombre,contr=:contr, admin = :admin, puntos = :puntos, mail = :mail where id_usuario = $id_usuario;";
        $sentencia = $conexion->prepare($sentenciaText);
        $sentencia->bindParam(':nombre', $nombre);
        $sentencia->bindParam(':contr', $contr);
        $sentencia->bindParam(':admin', $admin);
        $sentencia->bindParam(':puntos', $puntos);
        $sentencia->bindParam(':mail', $mail);
        
        $sentencia->execute();

        $_SESSION['mensaje']= 'Oferta canjeada correctamente, le hemos enviado un mail con el código referente a su oferta.';

     
        
    }
    catch(PDOException $e)
    {
        $_SESSION['error']= errorMessage($e);
        $usuarios['nom_usuario'] = $nombre;
        $usuarios['contr'] = $contr;
        $usuarios['admin'] = $admin;
        $usuarios['puntos'] = $puntos;
        $usuarios['mail'] = $mail;

        $_SESSION['usuario']=$usuarios;


    }
    $conexion = closeBd();
}




?>