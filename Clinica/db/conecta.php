<?php
require_once('parametros.php'); //hacemos referencia a las variables de conexión
$conexion = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE); //Conectamos a la Base de Datos
$consulta = '';

if( $conexion->connect_errno )
{
	echo 'Error en la conexión';
	exit;
}

//Función que realiza la consulta a la Base de datos
function laConsulta()
{
	global $conexion, $consulta;
	$sql = 'SELECT * FROM consulta';
	return $conexion->query($sql);
}
function consulta()
{

	global $conexion, $consulta;
	$sql = 'SELECT * FROM receta';
	return $conexion->query($sql);

}
	function preguntar()
	{
		global $conexion, $consulta;
		$sql = 'SELECT * FROM pasientes';
		return $conexion->query($sql);



	}
	

	



