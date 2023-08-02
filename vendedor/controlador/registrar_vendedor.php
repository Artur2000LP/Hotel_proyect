<?php
if(isset($_POST["registrar"])){
 if(!empty($_POST["nombre"]) && !empty($_POST["direccion"]) && !empty($_POST["telefono"]) && !empty($_POST["observacion"]) && !empty($_POST["sueldo"])){
  $nombre=$_POST["nombre"];
  $direccion=$_POST["direccion"];
  $telefono=$_POST["telefono"];
  $observacion=$_POST["observacion"];
  $sueldo=$_POST["sueldo"];
  $sql=$conexion->query("INSERT INTO tvendedor(nombre,direccion,telefono,observacion,sueldo) values('$nombre','$direccion','$telefono','$observacion','$sueldo')");
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