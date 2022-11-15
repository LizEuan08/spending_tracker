<?php
require_once('../../config/validate_session.php');
?>
<?php
require_once('../../config/config.php');
$query = "SELECT * FROM gastos_categorias";
$result = $conexion->query($query);
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
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h1>Gastos categorias <a href="form-insert.php" class="btn btn-primary">Añadir</a> <a href="http://localhost/spending_tracker/modulos/bienvenida/" class="btn btn-dark">Regresar</a></h1>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row = $result->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $row['ID']; ?></td>
                            <td><?php echo $row['Nombre']; ?></td>
                            <td>
                                <a href="form-update.php?ID=<?php echo $row['ID']; ?>" class="btn btn-warning">Editar</a>
                                <a href="../../config/delete_spending_c.php?ID=<?php echo $row['ID']; ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
