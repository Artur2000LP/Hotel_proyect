<?php
include "modelo/conexion.php";
$id = $_GET["id"];
$sql=$conexion->query("select *from tcliente where idCliente=$id");
?>
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
        <form class="col-4 px-5 m-auto" action="" method="POST">
            <?php
            include "controlador/actualizar_cliente.php";
            ?>
            <h3>Actualizar cliente</h3>
            <input type="text" name="id" hidden value="<?= $_GET["id"]?>">
            <?php
            while($datos=$sql->fetch_object()){
            ?>
            <div class="mb-3">
                <label  class="form-label">documento</label>
                <input type="int" class="form-control" name="documento">
            </div>
            <div class="mb-3">
                <label  class="form-label">nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label  class="form-label">fechaNacimiento</label>
                <input type="date" class="form-control" name="fechaNacimiento">
            </div>
            <div class="mb-3">
                <label  class="form-label">lugarNacimiento</label>
                <input type="text" class="form-control" name="lugarNacimiento">
            </div>
            <div class="mb-3">
                <label  class="form-label">sexo</label>
                <input type="text" class="form-control" name="sexo">
            </div>
            <div class="mb-3">
                <label  class="form-label">observacion</label>
                <input type="text" class="form-control" name="observacion">
            </div>
            <?php
            }
            ?>
            <button type="submit" class="btn btn-primary" name="actualizar" value="ok">Actualizar</button>
        </form>
</body>
</html>