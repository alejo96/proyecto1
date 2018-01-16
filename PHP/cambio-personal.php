<script>
	window.onload =function()
	{
		var lista = document.getElementById("personal-lista");
		lista.onchange = seleccionarPersonal;
		
		function seleccionarPersonal()
		{
			window.location="?op=modificar_personal&personal_slc="+lista.value
		}
	}

</script>
<form id="cambio-personal" name="cambio_frm" action="PHP/modificar-personal.php"
method="post" enctype="multipart/form-data">
<fieldset>
<legend>Cambio Personal</legend>
<div>
<label for="personal-lista">Personal:</label>
<select id="personal-lista" class="cambio" name="personal_slc" required>
	<option value="">-----</option>
	<?php  include("select-cedula.php");?>
</select>
</div>
<?php
	if($_GET["personal_slc"]!=null)
	{
		$conexion2 = conectarse();
		$personal =$_GET["personal_slc"];
		$consulta_personal="SELECT * FROM personal WHERE cedula = $personal";
		
		$ejecutar_consulta_personal = $conexion2->query($consulta_personal);
		$registro_personal = $ejecutar_consulta_personal->fetch_assoc();
		include("PHP/cambio-form.php");
	}
	include("PHP/mensajes.php");
?>
</fieldset>


</form>