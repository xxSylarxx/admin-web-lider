<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';


$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$nivel = $_POST['nivel'];
$grado = $_POST['grado'];
$consulta = $_POST['consulta'];

$mail = new PHPMailer(true);
//correos@thomasalvaedison.edu.pe
//ttVRf]qH5.{p
try {
    // no toca para nada
$mail = new PHPMailer();
$mail->CharSet = 'UTF-8';
$mail->IsHTML(true);
$mail->isSMTP();
//$mail->SMTPSecure = 'tls'; // Cambiar a tls
$mail->SMTPSecure = 'ssl';
$mail->Host = 'correos.lidersd.edu.pe';  
//$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Port = 465;
$mail->SMTPDebug  = 2;
$mail->Debugoutput = function($str, $level) {
    file_put_contents('smtp_debug.log', gmdate('Y-m-d H:i:s'). "\t$level\t$str\n" , FILE_APPEND | LOCK_EX);
};

$mail->Username = 'correos@correos.lidersd.edu.pe';
$mail->Password = '#+z(y3;fZkq8*4De';
//$mail->Password = 'ttVRf]qH5.{p';



    if (empty($_POST['nombres']) || empty($_POST['apellidos']) || empty($_POST['telefono']) || empty($_POST['correo']) || empty($_POST['nivel']) || empty($_POST['grado']) || empty($_POST['consulta'])) {
        echo 'Por favor, completa todos los campos del formulario.';
        exit; // Detén la ejecución si falta algún campo
    }
    //Recipients
    $mail->setFrom('formulario@lidersd.edu.pe', 'PAG. WEB - SANTO DOMINGO EL LIDER');
    $mail->addReplyTo('correos@correos.lidersd.edu.pe', 'Web Santo Domingo');
    $mail->addAddress('admision@lidersd.edu.pe');
    //$mail->setFrom('formulario@lidersd.edu.pe', 'PAG. WEB - SANTO DOMINGO EL LIDER');
    //$mail->FromName = 'PAG. WEB - SANTO DOMINGO EL LIDER';
    //$mail->addAddress('admision@lidersd.edu.pe');
    //$mail->addCC('karina.coordinacionweb@gmail.com ');
    //$mail->addCC('admision@lidersd.edu.pe');

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'FORMULARIO DE CONTACTO';
    $mail->Body = '
                    <h4><b>INFORMACIÓN</b></h4>
                    <p><b>Nombres : </b>' . htmlspecialchars($nombres) . '</p>
                    <p><b>Apellidos : </b>' . htmlspecialchars($apellidos) . '</p>
                    <p><b>Teléfono : </b>' . htmlspecialchars($telefono) . '</p>
                    <p><b>Correo : </b>' . htmlspecialchars($correo) . '</p>
                    <p><b>Nivel : </b>' . htmlspecialchars($nivel) . '</p>
                    <p><b>Grado : </b>' . htmlspecialchars($grado) . '</p>
                    <p><b>Consulta : </b>' . nl2br(htmlspecialchars($consulta)) . '</p>';

    if ($mail->Send()) {

        echo "SE ENVIÓ LA CONSULTA CORRECTAMENTE";
    }
} catch (Exception $e) {
    echo 'OCURRIÓ UN ERROR, NO SE PUDO PROCESAR EL ENVÍO';
}

//print_r($_POST);