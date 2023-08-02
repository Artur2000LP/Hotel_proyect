<?php
if(isset($_POST["registrar"])){
 if(!empty($_POST["nombre"])){
  $nombre=$_POST["nombre"];
  $sql=$conexion->query("INSERT INTO ttipo(nombre) values('$nombre')");
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