<form id="consulta-personal" name ="consulta_frm" action="PHP/consultar.php"
 method="post"  enctype="multipart/form-data">
	<fieldset>
		<legend>Consulta de personal</legend>
		<div>
		<label for="consulta">Consulta:</label>
		<input type ="number" id="cedula" class="cambio"
		name = "cedula_txt" placeholder="Ingresa tu CI"
		title="Cedula" required />	
		</div>
		<div>
		<input type="submit" id="agregar" class="cambio" name="agregar_btn"
		value="Consultar"/>
		</div>
		<?php  include("PHP/mensajes.php"); ?>
	</fieldset>
</form>
