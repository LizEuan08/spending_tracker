<?php
require_once('../../config/config.php');
$id = $_GET['ID'];
$query = "SELECT * FROM usuarios_status ";
$result = $conexion->query($query);

$query2 = "SELECT * FROM usuarios WHERE ID =$id";
$result2 = $conexion->query($query2);
$record = $result2->fetch_assoc();
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
                <h1>Usuarios <a href="index.php" class="btn btn-dark">Regresar</a></h1>
            </div>
        </div>
        <form action="../../config/update_spending_u.php" method="POST">
        <div class="row mt-5">
                <div class="col-6">
                    <label for="Nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="Nombre" id="Nombre" value="<?php echo $record['Nombre']; ?>">
                </div>
                <div class="col-6">
                    <label for="Correo" class="form-label">Correo</label>
                    <input type="text" class="form-control" name="Correo" id="Correo" value="<?php echo $record['Correo']; ?>">
                </div>
                <div class="col-6">
                    <label for="Password" class="form-label">Password</label>
                    <input type="text" class="form-control" name="Password" id="Password" value="<?php echo $record['Password']; ?>">
                </div>
                <div class="col-6">
                    <label for="Status" class="form-label">Status</label>
                    <select class="form-select" name="Status" id="Status">
                        <option value="0" selected>Selecciona tu opcion</option>
                        <?php
                        while($row = $result->fetch_assoc()){
                        ?>
                        <option value="<?php echo $row['ID']; ?>"><?php echo $row ['Status']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-6 mb-3">
                    <label for="Telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" name="Telefono" id="Telefono" value="<?php echo $record['Telefono']; ?>" >
                </div>
                <div class="col-12">
                    <input type="hidden" name="ID" value="<?php echo $id ?>">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>