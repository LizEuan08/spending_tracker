<?php
require_once('config.php');
$id = $_POST['ID'];
$pass = $_POST['new_password'];


$query = "UPDATE usuarios set password= '$pass' WHERE ID=$id";
$result = $conexion->query($query);


header("location: ../index.php?menssage=success_password");

?>