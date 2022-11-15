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
                <h1>Gastos categorias <a href="index.php" class="btn btn-dark">Regresar</a></h1>
            </div>
        </div>
        <form action="../../config/insert_spending_c.php" method="POST">
        <div class="row mt-5">
            <div class="col-12 mb-3">
                <label for="Nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="Nombre" id="Nombre">
            </div>
            <div class="col mb-3">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </div>
    </form>
    </div>

</body>
</html>