<?php
require_once('config.php');
$cantidad = $_POST['Cantidad'];
$categoria = $_POST['Categoria'];
$descripcion = $_POST['Descripcion'];

$query = "INSERT INTO gastos (Cantidad, Categoria, Descripcion) VALUES ('$cantidad', '$categoria', '$descripcion')";
//echo $query;
$conexion->query($query);
header("Location: http://localhost/spending_tracker/modulos/gastos/index.php");
?>