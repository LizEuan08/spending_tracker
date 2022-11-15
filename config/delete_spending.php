<?php
require_once('config.php');
$id = $_GET['ID'];


$query = "DELETE FROM gastos WHERE ID=$id";
//echo $query;
$conexion->query($query);
header("Location: http://localhost/spending_tracker/modulos/gastos/index.php");
?>