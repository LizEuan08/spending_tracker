<?php
require_once('config.php');
$nombre = $_POST['Nombre'];
$correo = $_POST['Correo'];
$password = $_POST['Password'];
$status = $_POST['Status'];
$telefono = $_POST['Telefono'];

$query = "INSERT INTO usuarios (Nombre, Correo, Password, Status, Telefono ) VALUES ('$nombre', '$correo', '$password', '$status', '$telefono')";
//echo $query;
$conexion->query($query);
header("Location: http://localhost/spending_tracker/modulos/usuarios/index.php");
?>