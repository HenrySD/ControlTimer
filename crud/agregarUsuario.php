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
$dir='temp/';
if(!file_exists($dir)){
    mkdir($dir);
}
$filename=$dir.$_POST['Cod_Usua'].'.png';

$tamanio=10;
$level='M';
$frameSize=3;
$contenido=$_POST['Cod_Usua'];

QRcode::png($contenido,$filename,$level,$tamanio,$frameSize);



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
$mail = new PHPMailer(true);

try {
    //Server settings
    //acceso
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'controltimer3@gmail.com';                     // SMTP username
    $mail->Password   = 'controltimer2019';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to
    $mail->setFrom('controltimer3@gmail.com', 'Control Timer');
    $mail->addAddress($datosUsuarios[7]); 
        // Add a recipient
    $mail->addAttachment("temp/".$datosUsuarios[0].".png");    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Bienvenido a nuestra empresa';
    $mail->Body    = "<b>Hola es un gusto averte contratado </b><br>"
                        .$datosUsuarios[4]." ". $datosUsuarios[5]."<br> Este es tu Identificador personal dentro de la empresa <br>
                        Por favor no lo piernas :) <br>
                        Con este Codigo QR podras dar constancia de tu yegada y salida de la empresa<br>
                        Feliz dia ";
    

    $mail->send();
    echo 'El email se envio correctamente';
} catch (Exception $e) {
    echo "No se pudo enviar el correo: {$mail->ErrorInfo}";
}
?>