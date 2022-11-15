<?php
require_once('config.php');
$email = $_POST['email'];
$passsword = $_POST['password'];

$query = "SELECT * FROM usuarios where correo = '$email' AND password = '$passsword'AND Status = 1";
$result = $conexion->query($query);
if($result->num_rows > 0){
    session_start();
    $_SESSION['user'] = $email;
header("location: http://localhost/spending_tracker/modulos/bienvenida/");
}else{
    header("location: ../index.php");
}
?>