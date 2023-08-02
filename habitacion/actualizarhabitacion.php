<?php
include "modelo/conexion.php";
$id = $_GET["id"];
$sql=$conexion->query("select *from thabitacion where idHabitacion=$id");
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
            include "controlador/actualizar_habitacion.php";
            ?>
            <h3>Actualizar cliente</h3>
            <input type="text" name="id" hidden value="<?= $_GET["id"]?>">
            <?php
            while($datos=$sql->fetch_object()){
            ?>
            <div class="mb-3">
                <label  class="form-label">numero de camas</label>
                <input type="int" class="form-control" name="numeroCamas">
            </div>
            <div class="mb-3">
                <label  class="form-label">descripcion</label>
                <input type="text" class="form-control" name="descripcion">
            </div>
            <div class="mb-3">
                <label  class="form-label">precio</label>
                <input type="int" class="form-control" name="precio">
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