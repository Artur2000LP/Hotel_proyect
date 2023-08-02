<?php
if(isset($_POST["actualizar"])){
 if(!empty($_POST["nombre"]) && !empty($_POST["direccion"]) && !empty($_POST["telefono"]) && !empty($_POST["observacion"]) && !empty($_POST["sueldo"])){
  $nombre=$_POST["nombre"];
  $direccion=$_POST["direccion"];
  $telefono=$_POST["telefono"];
  $observacion=$_POST["observacion"];
  $sueldo=$_POST["sueldo"];
  $sql=$conexion->query("UPDATE tvendedor SET nombre='$nombre', direccion='$direccion', telefono='$telefono', observacion='$observacion',
  sueldo='$sueldo' WHERE idVendedor=$id");
  if($sql==1){
    header("location:index.php");
  }else{
    echo "no se pudo registrar";
  }
 }else{
    echo "los campos estan vacios";
 }
}
?>