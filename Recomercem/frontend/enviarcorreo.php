<?php

mb_internal_encoding('UTF-8');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';


require_once('../php_libraries/bd.php');


if($_SESSION['user_loged']['puntos'] >=$_POST['puntos']){

    $strNombre = $_SESSION['user_loged']['nom_usuario'];
    $strEmail = $_SESSION['user_loged']['mail'];
    $strNombreOferta = $_POST['nombre'];
    $strMensaje = $_POST["codigo"];
    $strid = $_POST["id_oferta"];
    $nomRestaurante = selectRestauranteByOferta($strid);

    $mensaje = "El código de tu oferta " . $strNombreOferta . " del restaurante " . $nomRestaurante[0]['nombre'] . " es: " . $strMensaje . "; ya puedes canjearla.";
    

    $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'recomercem2021@gmail.com';                     // SMTP username
    $mail->Password   = 'Peluca1234';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('recomercem2021@gmail.com', 'Recomercem');
    $mail->addAddress($strEmail);     // Add a recipient
    

    
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Esta es la oferta que has canjeado.';
    $mail->Body    = $mensaje;
    

    $mail->send();
    header('Location:../index.php');
    $_SESSION['user_loged']['puntos'] = $_SESSION['user_loged']['puntos'] - $_POST['puntos'];
    updateUsuariosmiCuenta($_SESSION['user_loged']['id_usuario'],$_SESSION['user_loged']['nom_usuario'],$_SESSION['user_loged']['contr'],$_SESSION['user_loged']['admin'],$_SESSION['user_loged']['puntos'],$_SESSION['user_loged']['mail'], $_POST["codigo"]);
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}else{
    $_SESSION['errorCanjeo'] = "No tienes puntos suficientes para canjear esta oferta.";
    header('Location: ../frontend/micuenta.php');
    exit();
}
?>
