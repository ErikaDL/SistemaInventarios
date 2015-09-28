<?php
session_start();
require_once '../includes/funciones.php';
conexionDB();
$login = validarSession($_SESSION);
if($login){
	header("Location: ../inicio/");
}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema de Inventarios</title>
	<link rel="stylesheet" href="../css/login.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
	<div>
		<form name="login" id="login" method="POST" action="../chkLogin.php">
			<h2><i class="fa fa-shield"></i><br>Login</h2>
			<input type="text" name="correo" id="correo" placeholder="Correo electrónico">
			<input type="password" name="pass" id="pass" placeholder="Contraseña">
			<button type="submit" id="login-btn">Login</button>
		</form>
	</div>
</body>
</html>