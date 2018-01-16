<form id = "alta-personal" name="alta_frm" action="PHP/agregar-personal.php"
method ="post" enctype="multipart/form-data">
	<fieldset>
		<legend>Alta Personal</legend>
		
		<div>
		<label for="nombre">Nombre:</label>
		<input type = "text" id="nombre" class="cambio"
		name ="nombre_txt" placeholder ="Escribe tu nombre"
		title="Tu nombre" required/>
		</div>
		<div>
		<label for="apellido">Apellido:</label>
		<input type = "text" id="apellido" class="cambio"
		name ="apellido_txt" placeholder ="Escribe tu apellido"
		title="Tu apellido" required/>
		</div>
		<div>
		<label for="email">Coreo:</label>
		<input type ="email" id="email" class="cambio"
		name = "email_txt" placeholder="Escribe tu correo"
		title="	Tu correo" required />			
		</div>
		<div>
		<label for="nacimiento">Fecha de nacimiento:</label>
		<input type ="date" id="nacimiento" class="cambio"
		name = "nacimiento_txt" title="	Fecha nac." required />			
		</div>
		<div>
		<label for="cedula">Cedula:</label>
		<input type ="number" id="cedula" class="cambio"
		name = "cedula_txt" placeholder="Ingresa tu CI"
		title="Cedula" required />			
		</div>
		<div>
		<label for="direccion">Direccion:</label>
		<input type ="text" id="direccion" class="cambio"
		name = "direccion_txt" placeholder="Ingresa tu direccion"
		title="Direccion" required />			
		</div>
		
		<div>
		<label for="telefono">Telefono:</label>
		<input type ="number" id="telefono" class="cambio"
		name = "telefono_txt" placeholder="Ingresa tu tel&eacute;fono"
		title="Telefono" required />			
		</div>
		<div>
		<label for="cargo">Cargo:</label>
		<input type ="text" id="cargo" class="cambio"
		name = "cargo_txt" placeholder="Ingresa tu Cargo"
		title="Cargo" required />			
		</div>
		<div>
		<label for ="categoria">Categoria de empleado</label>
			<select id="categoria" class="cambio" name="categoria_emp">
			<option value="">------</option>
			<?php include("select-categoria.php"); ?>
			</select>
		</div>
		
		<div>
		<input type="submit" id="agregar" class="cambio" name="agregar_btn"
		value="Agregar"/>
		</div>
		
		<?php  include("PHP/mensajes.php"); ?>
	</fieldset>
</form>