<?php 
require_once('config.php');
$Nombre = $_POST['Nombre'];

$query = "INSERT INTO gastos_categorias (Nombre) VALUES ('$Nombre')";
$conexion->query($query);

header("Location: http://localhost/spending_tracker/modulos/gastos_categoria/index.php");
?>