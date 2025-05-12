<?php
session_start();
if(isset($_SESSION['user'])){
echo "Bienvenido".$_SESSION['user'];
echo"regresar <a href=cerrar.php> Cerrar sesion </a>";
}
else{
echo "no existe";
}
?>




