<?php
function conexionDB(){
	define('USUARIO','root');
	define('PASSWORD','');
	define('DB','inventarios');
	define('HOST','localhost');

	$conexion = mysql_connect(HOST,USUARIO,PASSWORD) or die('No se puede conectar.');

	if(is_resource($conexion)){
		@mysql_query("SET NAMES 'utf8'");
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
	//return password_verify($passwordString, $infoUsuario['password']);
	return crypt($passwordString, $infoUsuario['password']);
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
function listarProductos($seleccion = null){
	$querySeleccionarProductos = mysql_query("SELECT id_producto,producto FROM productos ORDER BY producto ASC");
	$select = '<select name="lista-productos" id="lista-producto"><option value="0">Selecciona un producto..</option>';
	while($producto = mysql_fetch_assoc($querySeleccionarProductos)){
		$selected = $seleccion == $producto['id_producto'] ? ' selected' : '';
		$select .= '<option value="'.$producto['id_producto'].'"'.$selected.'>'.$producto['producto'].'</option>'."\n";
	}
	$select .= '</select>';
	return $select;
}
function listarCategorias($relacion = null){
	$queryCategorias = mysql_query("SELECT id_categoria, categoria FROM categorias");
	$html = '<div id="cont-checks">';
	while($categoria = mysql_fetch_assoc($queryCategorias)){
		$html .= '<div class="loscheck"><input type="checkbox" name="categorias[]" value="'.$categoria['id_categoria'].'">'.$categoria['categoria'].'</div>';
	}
	$html .= '</div>';
	return $html;
}

?>