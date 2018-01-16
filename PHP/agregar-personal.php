<?php
$nombre = $_POST["nombre_txt"];
$apellido = $_POST["apellido_txt"];
$email = $_POST["email_txt"];
$nacimiento = $_POST["nacimiento_txt"];
$cedula = $_POST["cedula_txt"];
$direccion = $_POST["direccion_txt"];
$telefono = $_POST["telefono_txt"];
$cargo = $_POST["cargo_txt"];
$categoria = $_POST["categoria_emp"];

include("conexion.php");

$consulta ="SELECT * FROM personal WHERE cedula= $cedula";

$ejecutar_consulta = $conexion->query($consulta);
$num_regs=$ejecutar_consulta->num_rows;

if($num_regs ==0)
{
	$consulta = "INSERT INTO personal (nombres, apellidos, correo, fecha_nacimiento,
	cedula, direccion, telefono, cargo, categoria_empleado) VALUES ('$nombre',
	'$apellido','$email','$nacimiento',$cedula,'$direccion','$telefono',
	'$cargo','$categoria')";
	
	$ejecutar_consulta=$conexion->query(utf8_encode($consulta));
	
	if($ejecutar_consulta)
		$mensaje="Se ha dado de alta <b>$cedula</b>";
	else
		$mensaje="No se pudo agregar a <b>$cedula error</b>";
	
}else{
	$mensaje="No se agrego personal <b>$cedula</b> ya existe!";
}

$conexion->close();
header("Location: ../index.php?op=alta&mensaje=$mensaje");





?>