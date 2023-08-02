<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <script src="css/all.min.js"></script>
</head>
<body>
<script>
        function eliminar(){
            var respuesta=confirm("seguro que desea eliminar?");
            return respuesta;
        }
</script>
<h1 class="text-center">Hotel Paraiso</h1>
    <div class="container-fluid row">
        <form class="col-4 px-5" action="" method="POST">
            <h3>Registro de alquiler</h3>
            <?php
            include "modelo/conexion.php";
            include "controlador/registrar_alquiler.php";
            ?>
            <div class="mb-3">
                <label  class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio">
            </div>
            <div class="mb-3">
                <label  class="form-label">fecha de entrada</label>
                <input type="date" class="form-control" name="fechaEntrada">
            </div>
            <div class="mb-3">
                <label  class="form-label">fecha de salida</label>
                <input type="date" class="form-control" name="fechaSalida">
            </div>
            <div class="mb-3">
                <label  class="form-label">estado </label>
                <input type="text" class="form-control" name="estado">
            </div>
            <div class="mb-3">
                <label  class="form-label">observacion</label>
                <input type="text" class="form-control" name="observacion">
            </div>
            <button type="submit" class="btn btn-primary" name="registrar">Registrar</button>
        </form>
        <div class="col-8">
            <table class="table">
            <thead>
                <tr>
                <th scope="col">idAlquiler</th>
                <th scope="col">precio</th>
                <th scope="col">fechaEntrada</th>
                <th scope="col">fechaSalida</th>
                <th scope="col">estado</th>
                <th scope="col">observacion</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query("select * from talquiler");
                    while($datos=$sql->fetch_object()){
                ?>
                    <tr>
                        <td><?= $datos->idAlquiler ?></td>
                        <td><?= $datos->precio ?></td>
                        <td><?= $datos->fechaEntrada ?></td>
                        <td><?= $datos->fechaSalida ?></td>
                        <td><?= $datos->estado ?></td>
                        <td><?= $datos->observacion ?></td>
                        <td>
                            <a href="actualizaralquiler.php?id=<?= $datos ->idAlquiler ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a onclick="return eliminar()" href="index.php?id=<?= $datos->idAlquiler ?> "class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
            </table>
        </div>
    </div>
                 
</body>
</html>