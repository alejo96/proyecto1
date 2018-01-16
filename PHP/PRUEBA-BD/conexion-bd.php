<?php

/* pasos conectarme a php
1)conectarme a la bd , mysql_connect necesita 3 datos
1servidor
2usuario
3contrasena



conexion bd or die muestra se se esta conectando a la bd
*/
$conexion =mysql_connect("localhost", "root","") or die ("N se pudo conectar
con el Servidor de Base de Datos");
echo "Conexion exito<br/>";

/* SELECCIONAR BASE DE DATOS A TRABAJAR */
mysql_select_db("empleados_empresa") or die ("No se pudo seleccionar
la BD");
echo "Base de Datos enlazada <br/>";

/*CREAR CONSULTA SQL*/
$cedula= 1104191752;
$consulta ="SELECT * FROM personal WHERE cedula= $cedula";


/*EJECUTAR CONSULTA SQL
Necesita 2 parametros (consuta, conexion bd)*/
$ejecutar_consulta =mysql_query($consulta,$conexion) or die 
("No se ejecuto la consulta");
echo "Se ejecuto la consulta de Datos<br/>";


/*Muestra la consulta dentro de un ciclo con mysql fetch array se devuelve en arr
array asociativo */
while($registro = mysql_fetch_array($ejecutar_consulta)){
	echo $registro["nombres"];
	
	
}
/*cerra conexion bd*/
mysql_close($conexion) or die ("Ocurrio un error al cerrar la conexion");
echo "Conexi&oacute;n cerrada";
?>