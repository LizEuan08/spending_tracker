<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

require_once('config.php');
$email = $_POST['email'];
$query = "SELECT * FROM usuarios where correo = '$email' AND Status = 1";
$result = $conexion->query($query);
$row = $result->fetch_assoc();

if($result->num_rows > 0){
    $mail = new PHPMailer(true);

try {
    $mail->isSMTP();      
    $mail->Host       = 'smtp-mail.outlook.com';  
    $mail->SMTPAuth   = true;     
    $mail->Username   = 'basededatos22@outlook.com';            
    $mail->Password   = 'Datos2022';                
    $mail->Port       = 587;
    
    $mail->setFrom('basededatos22@outlook.com', 'data base');
    $mail->addAddress($email, 'correo de prueba'); 

    $mail->isHTML(true);   
    $mail->Subject = 'Recuperacion de contrasena';
    $mail->Body    = 'Hola este es un correo generado para solicitar la recuperación tu contraseña, por favor visita la pagina <a href="localhost/spending_tracker/change_password.php?ID='.$row['ID'].'">recuperacion de contraseña</a>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    header("location: ../index.php?message=ok");
} catch (Exception $e) {
    header("location: ../index.php?message=error");
}
    }else{
        header("location: ../index.php?message=not_found");
    
    }
?>