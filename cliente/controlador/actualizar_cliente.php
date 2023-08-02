<?php
if(isset($_POST["actualizar"])){
 if(!empty($_POST["documento"]) && !empty($_POST["nombre"]) && !empty($_POST["fechaNacimiento"]) && !empty($_POST["lugarNacimiento"]) && !empty($_POST["sexo"]) && !empty($_POST["observacion"])){
  $documento=$_POST["documento"];
  $nombre=$_POST["nombre"];
  $fechaNacimiento=$_POST["fechaNacimiento"];
  $lugarNacimiento=$_POST["lugarNacimiento"];
  $sexo=$_POST["sexo"];
  $observacion=$_POST["observacion"];
  $sql=$conexion->query("UPDATE tcliente SET documento='$documento', nombre='$nombre', fechaNacimiento='$fechaNacimiento', lugarNacimiento='$lugarNacimiento',
  sexo='$sexo', observacion='$observacion' WHERE idCliente=$id");
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