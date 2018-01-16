<?php


$nombre = $_POST["nombre_txt"];
$apellido = $_POST["apellido_txt"];
$email = $_POST["email_txt"];
$nacimiento = $_POST["nacimiento_txt"];
$cedula=$_POST["cedula_hdn"];
$direccion = $_POST["direccion_txt"];
$telefono = $_POST["telefono_txt"];
$cargo = $_POST["cargo_txt"];
$categoria = $_POST["categoria_emp"];



include("conexion.php");
$consulta="SELECT * FROM personal where cedula= $cedula";
$ejecutar_consulta=$conexion->query($consulta);
$num_regs =$ejecutar_consulta->num_rows;

if($num_regs==1)
{
	$consulta ="UPDATE personal SET nombres='$nombre', apellidos='$apellido',
	correo='$email', fecha_nacimiento='$nacimiento', direccion='$direccion',
	telefono='$telefono', cargo='$cargo', categoria_empleado='$categoria'
	WHERE cedula= $cedula";
	$ejecutar_consulta=$conexion->query(utf8_encode($consulta));
	if($ejecutar_consulta==true){
		$mensaje= "El personal con CI: <b>$cedula</b> se modifico ";
	}else{
		
		$mensaje= "El personal con CI: <b>$cedula</b> no se modifico e";
	}
	
	
}else{
	$mensaje ="El personal <b>$cedula</b> no se modifico";
}
$conexion->close();
header("Location: ../index.php?op=modificar_personal&mensaje=$mensaje");


?>