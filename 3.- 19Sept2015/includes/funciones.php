<?php
function conexionDB(){
	define('USUARIO','root');
	define('PASSWORD','');
	define('DB','inventarios');
	define('HOST','localhost');

	$conexion = mysql_connect(HOST,USUARIO,PASSWORD) or die('No se puede conectar.');

	if(is_resource($conexion)){
		$seleccionarDB = mysql_select_db(DB,$conexion) or die('No se puede seleccionar la base de datos.');
	}
}
function generarPassword($passwordString){
	$configuracion = array("cost"=>10);
	$nuevoPassword = password_hash($passwordString,PASSWORD_BCRYPT,$configuracion);
	return $nuevoPassword;
}
function validarPassword($passwordString,$email){
	$queryValidarPassword = mysql_query("SELECT `password`,`email` FROM `usuarios` WHERE `email` = '$email'");
	$infoUsuario = mysql_fetch_assoc($queryValidarPassword);
	return password_verify($passwordString,$infoUsuario['password']);
}
function validarSession($session){
	if(is_array($session)){
		if(array_key_exists('CORREO', $session) && array_key_exists('PASSWORD', $session)){
			return validarPassword($_SESSION['PASSWORD'],$_SESSION['CORREO']);
		}else{
			return false;
		}
	}else{
		return false;
	}
}
function filtrarEntrada($string){
	return $string;
}
?>