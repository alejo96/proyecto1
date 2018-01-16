<?php
include("conexion.php");
$consulta="SELECT * FROM personal";
$ejecutar_consulta= $conexion->query($consulta);
while($registro = $ejecutar_consulta->fetch_assoc())
{
	
	echo "<option value='".$registro["cedula"]."'";
	if($_GET["personal_slc"]==$registro["cedula"])
	{
		echo " selected";
	}
	echo ">".$registro["cedula"]."</option>";
}
//$conexion->close();
?>