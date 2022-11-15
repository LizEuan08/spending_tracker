<?php 
require_once('config.php');
$id = $_GET['ID'];

$query = "DELETE FROM gastos_categorias WHERE ID = '$id'";
$conexion->query($query);

header("Location: http://localhost/spending_tracker/modulos/gastos_categoria/");
?>