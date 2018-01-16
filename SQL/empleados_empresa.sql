/*SQL 
LENGUAJE ESTRUCTURADO DE CONSULTA
BASE DE DATOS: COLECCION DE DATOS ORGANIZADOS

se usan gestores de base de datos

existen 2 tipos de sentencias
estructurales. permite crear,modificar,eliminar estrucutra base de datos

sentencias. permite insertar, eliminar, modificar y buscar en la tablas de base de 
datos

en mysql existe 2 tipos de tablas o engine 2
myisam- tablas planas como exel MANEJO DE INFORMACION
INNODB TABLAS RELACIONALES NO PUEDE MODIFCIAR UNA TABLA SIN Q ALTERE A OTR

*/
/* crea base de datos*/
CREATE DATABASE empleados_empresa;
/*usa esta base de datos*/
USE empleados_empresa;

CREATE TABLE personal(

nombres VARCHAR(50) NOT NULL,
apellidos VARCHAR(50) NOT NULL,
correo VARCHAR(50) NOT NULL,
fecha_nacimiento DATE NOT NULL,
cedula INT(50) NOT NULL,
direccion VARCHAR(50) NOT NULL,
telefono VARCHAR(50) NOT NULL,
cargo VARCHAR(50) NOT NULL,
categoria_empleado VARCHAR(50) NOT NULL,

PRIMARY KEY (cedula), 
/*buscador simula a google no busca en datos date*/
FULLTEXT KEY buscador(nombres, apellidos, correo, 
direccion, telefono, cargo, categoria_empleado)

)ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE categoria(
id_categoria INT(10) NOT NULL AUTO_INCREMENT,
categoria_empleado VARCHAR(50) NOT NULL,
PRIMARY KEY(id_categoria)

)ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO categoria(id_categoria,categoria_empleado) VALUES
	(1,"Planta"),
	(2,"Administrativo"),
	(3,"Proveedor"),
	(4,"Independiente");