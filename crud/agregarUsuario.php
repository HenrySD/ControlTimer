<?php 
require("../database.php");
require("crud.php");
require("../phpqrcode/qrlib.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require("../phpmailer/Exception.php");
require("../phpmailer/PHPMailer.php");
require("../phpmailer/SMTP.php");
//nombre de carpeta

$objUsuarios = new crud();
$datosUsuarios=array(
    $_POST['Cod_Usua'],
    $_POST['Cod_Empr'],
    $_POST['Cod_Turn'],
    $_POST['Tip_Usua'],
    $_POST['Nom_Usua'],
    $_POST['Ape_Usua'],
    $_POST['Dir_Usua'],
    $_POST['Ema_Usua'],
    $_POST['Tel_Usua'],
    $_POST['Use_Name'],
   sha1( $_POST['Con_Usua'])
);
echo $objUsuarios->agregarUsuarios($datosUsuarios);
$codigo=$datosUsuarios[0];
$dir='temp/';
if(!file_exists($dir)){
    mkdir($dir);
}
$filename=$dir.$codigo.'.png';
echo $codigo;
$tamanio=10;
$level='M';
$frameSize=3;
$contenido=$codigo;

QRcode::png($contenido,$filename,$level,$tamanio,$frameSize);

$mail = new PHPMailer(true);

try {
    //Server settings
    //acceso
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'mail.comues.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'controltimer@comues.com';                     // SMTP username
    $mail->Password   = 'CONTROLtimer2384.';                               // SMTP password
    $mail->SMTPSecure = '';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to
    $mail->setFrom('controltimer@comues.com','Control Timer');
    $mail->addAddress($datosUsuarios[7]); 
    
    $mail->addAttachment($filename); 
        // Add a recipient
       // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Bienvenido a nuestra empresa';
    $mail->Body    = "<b>Hola ".$datosUsuarios[4]." ".$datosUsuarios[5]."</b><br>Este es tu ID no lo pierdas <br>Con el prodras dar constacion de tu entrada y salida de la empresa <br> Feliz Dia";
    

    $mail->send();
    echo 'El email se envio correctamente';
} catch (Exception $e) {
    echo "No se pudo enviar el correo: {$mail->ErrorInfo}";
}
?>