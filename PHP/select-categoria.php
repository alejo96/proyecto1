<?php
if(!$registro_personal["categoria_empleado"]){
	include("conexion.php");
}
//include("conexion.php");
$consulta="SELECT * FROM categoria";
$ejecutar_consulta= $conexion->query($consulta);
while($registro = $ejecutar_consulta->fetch_assoc())
{
	$categoria = utf8_encode($registro["categoria_empleado"]);
	echo "<option value='$categoria'";
	if(utf8_decode($categoria)==utf8_encode($registro_personal["categoria_empleado"]))
	{
		echo " selected";
		
	}
	echo ">$categoria</option>";	
}

?>