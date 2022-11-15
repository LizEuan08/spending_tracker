<?php
require_once('config.php');
$nombre = $_POST['Nombre'];
$correo = $_POST['Correo'];
$password = $_POST['Password'];
$status = $_POST['Status'];
$telefono = $_POST['Telefono'];
$id = $_POST['ID'];


$query = "UPDATE usuarios set Nombre = '$nombre', Correo = '$correo', Password = '$password', Status = '$status', Telefono = '$telefono' WHERE ID=$id";
//echo $query;
$conexion->query($query);
header("Location: http://localhost/spending_tracker/modulos/usuarios/index.php");
?>