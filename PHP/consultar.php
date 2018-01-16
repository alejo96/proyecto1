<?php
$cedula = $_POST["cedula_txt"];

include("conexion.php");

$consulta ="SELECT * FROM personal WHERE cedula= $cedula";
$ejecutar_consulta = $conexion->query($consulta);
while($registro = $ejecutar_consulta->fetch_assoc())
{
	$mensaje= "Personal encontrado <b>$cedula</b> </br>".$registro["nombres"]."</br>"
	.$registro["apellidos"]."</br>".$registro["correo"]."</br>".$registro["fecha_nacimiento"]
	."</br>".$registro["direccion"]."</br>".$registro["telefono"]
	."</br>".$registro["cargo"]."</br>".$registro["categoria_empleado"];
	
}

//$num_regs=$ejecutar_consulta->num_rows;

//if($num_regs== 1)
//	$mensaje= "Personal encontrado <b>$cedula</b>";
//else
//	$mensaje ="El personal <b>$cedula</b> no se encontro";
$conexion->close();
header("Location: ../index.php?op=consultar_personal&mensaje=$mensaje");






?>