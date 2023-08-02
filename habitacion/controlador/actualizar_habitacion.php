<?php
if(isset($_POST["actualizar"])){
 if(!empty($_POST["numeroCamas"]) && !empty($_POST["descripcion"]) && !empty($_POST["precio"]) && !empty($_POST["observacion"])){
  $numeroCamas=$_POST["numeroCamas"];
  $descripcion=$_POST["descripcion"];
  $precio=$_POST["precio"];
  $observacion=$_POST["observacion"];
  $sql=$conexion->query("UPDATE thabitacion SET numeroCamas='$numeroCamas', descripcion='$descripcion', precio='$precio'
  , observacion='$observacion' WHERE IdHabitacion=$id");
  if($sql==1){
    echo '<div class="alert alert-success">tcliente registrado</div>';
  }else{
    echo "no se pudo registrar";
  }
 }else{
    echo "los campos estan vacios";
 }
}
?>