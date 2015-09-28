<?php 
require_once '../../../header.inc.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	$producto = $_POST['nombre_producto'];
	
	$costo = $_POST['costo_producto'];

	$queryInsertarProducto = mysql_query("INSERT INTO productos (`producto`,`costo`) VALUES ('$producto','$costo')");

	if($queryInsertarProducto){
		header("Location: ../?vista=agregar&e=0");
	}else{
		header("Location: ../?vista=agregar&e=1");
	}

}else{
	header("Location: ../");
}
require_once '../../../footer.inc.php';
?>