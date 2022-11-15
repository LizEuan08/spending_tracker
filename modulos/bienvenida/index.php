<?php
require_once('../../config/validate_session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <?php include '../../session_paragraph.php' ?>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col">
                <h1>Bienvenido a dondé desea dirigirse: <a href="http://localhost/spending_tracker/modulos/gastos/index.php" class="btn btn-info">Tabla gastos</a> <a href="http://localhost/spending_tracker/modulos/gastos_categoria/" class="btn btn-info">tabla gastos categorias</a></h1><a href="http://localhost/spending_tracker/modulos/usuarios/" class="btn btn-info">tabla de usuarios</a></h1>
            </div>
        </div>
    </div>
</body>
</html>
