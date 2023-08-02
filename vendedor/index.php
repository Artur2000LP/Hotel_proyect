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
<h1 class="text-center">Pagina principal</h1>
    <div class="container-fluid row">
        <form class="col-4 px-5" action="" method="POST">
            <h3>Registro de clientes</h3>
            <?php
            include "modelo/conexion.php";
            include "controlador/registrar_vendedor.php";
            ?>
            <div class="mb-3">
                <label  class="form-label">nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label  class="form-label">telefono</label>
                <input type="int" class="form-control" name="telefono">
            </div>
            <div class="mb-3">
                <label  class="form-label">direccion</label>
                <input type="text" class="form-control" name="direccion">
            </div>
            <div class="mb-3">
                <label  class="form-label">observacion</label>
                <input type="text" class="form-control" name="observacion">
            </div>
            <div class="mb-3">
                <label  class="form-label">sueldo</label>
                <input type="float" class="form-control" name="sueldo">
            </div>
            <button type="submit" class="btn btn-primary" name="registrar">Registrar</button>
        </form>
        <div class="col-8">
            <table class="table">
            <thead>
                <tr>
                <th scope="col">idVendedor</th>
                <th scope="col">nombre</th>
                <th scope="col">telefono</th>
                <th scope="col">direccion</th>
                <th scope="col">observacion</th>
                <th scope="col">sueldo</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query("select * from tvendedor");
                    while($datos=$sql->fetch_object()){
                ?>
                    <tr>
                        <td><?= $datos->idVendedor ?></td>
                        <td><?= $datos->nombre ?></td>
                        <td><?= $datos->telefono ?></td>
                        <td><?= $datos->direccion ?></td>
                        <td><?= $datos->observacion ?></td>
                        <td><?= $datos->sueldo ?></td>
                        <td>
                            <a href="actualizarcliente.php?id=<?= $datos ->idVendedor ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a onclick="return eliminar()" href="index.php?id=<?= $datos->idVendedor ?> "class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
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