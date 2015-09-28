<?php

define('USUARIO','root');
define('PASSWORD','');
define('HOST','localhost');
define('BD','prueba_septiembre');


$conexion = mysql_connect(HOST, USUARIO, PASSWORD) or die("No se pudo conectar a la base de datos.");

if(is_resource($conexion)){
	$db = mysql_select_db(DB,$conexion) or die("No se pudo seleccionar la base de datos.");
}

$query = mysql_query("SELECT * FROM 'usuarios'");

$html = 
'<table border="1">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>Nombre</th>
			<th>Nombre</th>
		</tr>

	</thead>
';

while($datos = mysql_fetch_assoc($query)){
	$html .= 
	'<tr>
		<td>'.$datos['nombre'].'</td>'
		'<td>'.$datos['nombre'].'</td>'
		'<td>'.$datos['nombre'].'</td>'
}


?>