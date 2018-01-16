<?php
$cedula=$_POST["cedula_slc"];
include("conexion.php");
$consulta="DELETE FROM personal where cedula= $cedula";
$ejecutar_consulta=$conexion->query($consulta);
if($ejecutar_consulta== true)
	$mensaje= "Personal eliminado <b>$cedula</b>";
else
	$mensaje ="El personal <b>$cedula</b> no se elimino";
$conexion->close();
header("Location: ../index.php?op=baja&mensaje=$mensaje");


?>