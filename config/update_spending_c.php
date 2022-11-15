<?php 
require_once('config.php');
$Nombre = $_POST['Nombre'];
$id = $_POST['ID'];

$query = "UPDATE gastos_categorias SET Nombre = '$Nombre' WHERE ID='$id'";
$conexion->query($query);

header("Location: http://localhost/spending_tracker/modulos/gastos_categoria/");
?>