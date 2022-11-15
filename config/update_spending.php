<?php
require_once('config.php');
$cantidad = $_POST['Cantidad'];
$categoria = $_POST['Categoria'];
$descripcion = $_POST['Descripcion'];
$id = $_POST['id'];


$query = "UPDATE gastos set Cantidad = '$cantidad', Categoria = '$categoria', Descripcion = '$descripcion' WHERE ID=$id";
//echo $query;
$conexion->query($query);
header("Location: http://localhost/spending_tracker/modulos/gastos/index.php");
?>