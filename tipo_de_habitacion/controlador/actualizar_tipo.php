<?php
if(isset($_POST["actualizar"])){
 if(!empty($_POST["nombre"])){
  $nombre=$_POST["nombre"];
  $sql=$conexion->query("UPDATE ttipo SET nombre='$nombre' WHERE idTipo=$id");
  if($sql==1){
    echo '<div class="alert alert-success">ttipo registrado</div>';
  }else{
    echo "no se pudo registrar";
  }
 }else{
    echo "los campos estan vacios";
 }
}
?>