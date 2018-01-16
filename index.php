<?php
/*cONTROLA REPORTE DE ERRORES*/
error_reporting(E_ALL ^ E_NOTICE);
$op =$_GET["op"];
switch($op)
{
	case "alta":
		$contenido="PHP/alta_personal.php";
		$titulo ="Alta de Personal";
	break;
	case "baja":
		$contenido="PHP/baja_personal.php";
		$titulo ="Baja de Personal";
	break;
	case "modificar_personal":
		$contenido="PHP/cambio-personal.php";
		$titulo ="Cambio de Personal";
	break;
	case "consultar_personal":
		$contenido="PHP/consultas-personal.php";
		$titulo ="Consulta del Personal";
	break;
	
	default:
		$contenido="PHP/home.php";
		$titulo="Mi personal";
		break;
}

?>


<!DOCTYPE html>
<html lang ="es">
<head>
	<meta charset ="utf-8"/>
	<title><?php echo $titulo;   ?></title>
	<link rel="stylesheet" href="CSS/mi-personal.css"/>
	
	<script src ="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script>
	!window.jQuery && document.write("<script src='JS/jquery.min.js'><\/script>");
	</script>
	
	<script src ="JS/mi-personal.js"></script>
</head>
<body>
	<section id="contenido">
		<nav>
			<ul>
				<li><a class="cambio" href="index.php">HOME</a></li>
				<li><a class="cambio" href="?op=alta">ALTA DE PERSONAL</a></li>
				<li><a class="cambio" href="?op=baja">BAJA DE PERSONAL</a></li>
				<li><a class="cambio" href="?op=modificar_personal">MODIFICAR PERSONAL</a></li>
				<li><a class="cambio" href="?op=consultar_personal">CONSULTA DE PERSONAL</a></li>		
			</ul>
		</nav>
		<section id="principal">
		<?php include($contenido);?>
		</section>
	</section>

</body>
</html>