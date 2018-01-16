<?php

function conectarse(){
	$servidor="localhost";
	$usuario ="root";
	$password="";
	$bd ="empleados_empresa";
	
	$conectar= new mysqli($servidor, $usuario, $password, $bd);	
	return $conectar;
}

$conexion = conectarse();

?>