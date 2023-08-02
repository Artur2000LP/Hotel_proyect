<?php
if(isset($_POST["registrar"])){
 if(!empty($_POST["precio"]) && !empty($_POST["fechaEntrada"]) && !empty($_POST["fechaSalida"]) && !empty($_POST["estado"]) && !empty($_POST["observacion"])){
  $precio=$_POST["precio"];
  $fechaEntrada=$_POST["fechaEntrada"];
  $fechaSalida=$_POST["fechaSalida"];
  $estado=$_POST["estado"];
  $observacion=$_POST["observacion"];
  $sql=$conexion->query("INSERT INTO talquiler(precio,fechaEntrada,fechaSalida,estado,observacion) values('$precio','$fechaEntrada','$fechaSalida','$estado','$observacion')");
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