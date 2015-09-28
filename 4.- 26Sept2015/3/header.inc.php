<?php
session_start();
require_once dirname(__FILE__).'/includes/funciones.php';
conexionDB();
$login = validarSession($_SESSION);
if(!$login){
	header("Location: ../login/");
}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema de Inventarios</title>
	<link rel="stylesheet" href="http://localhost/taller_bck_sept_trc/3/css/estilos.css">
</head>
<body>
	<header>
		<ul>
			<li><a href="./">Inicio</a></li>
			<li><a href="./?vista=agregarprod">Agregar productos</a></li>
			<li><a href="./?vista=agregarcat">Agregar categorias</a></li>
			<li><a href="./?vista=rel">Relacionar</a></li>
			<li><a href="./?vista=prov">Agregar proveedor</a></li>
		</ul>
	</header>