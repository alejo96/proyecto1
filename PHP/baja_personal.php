<form id="baja-personal" name="baja_frm" action="PHP/eliminar-personal.php"
method="post" enctype="application/x-www-form-urlencoded">
	<fieldset>
		<legend>Baja de personal</legend>
		<div>
			<label for ="cedula">Cedula:</label>
			<select id="cedula" class="cambio" name="cedula_slc" required>
				<option value="">-----</option>
				<?php include("select-cedula.php"); ?>
			</select>
		</div>
		<div>
		<input type ="submit" id="eliminar-personal" class ="cambio"
		name ="enviar_btn" value="Eliminar"/>
		</div>
		<?php include("PHP/mensajes.php"); ?>
	</fieldset>
</form>