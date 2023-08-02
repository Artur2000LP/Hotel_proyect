<?php
if(isset($_POST["registrar"])){
 if(!empty($_POST["documento"]) && !empty($_POST["nombre"]) && !empty($_POST["fechaNacimiento"]) && !empty($_POST["lugarNacimiento"]) && !empty($_POST["sexo"]) && !empty($_POST["observacion"])){
  $documento=$_POST["documento"];
  $nombre=$_POST["nombre"];
  $fechaNacimiento=$_POST["fechaNacimiento"];
  $lugarNacimiento=$_POST["lugarNacimiento"];
  $sexo=$_POST["sexo"];
  $observacion=$_POST["observacion"];
  $sql=$conexion->query("INSERT INTO tcliente(documento,nombre,fechaNacimiento,lugarNacimiento,sexo,observacion) values('$documento','$nombre','$fechaNacimiento','$lugarNacimiento','$sexo','$observacion')");
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