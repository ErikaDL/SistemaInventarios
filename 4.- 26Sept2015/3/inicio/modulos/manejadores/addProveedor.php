<?php 
require_once '../../../header.inc.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	$proveedor = $_POST['nombre_proveedor'];

	$queryInsertarProveedor = mysql_query("INSERT INTO proveedores (`nombre_proveedor`) VALUES ('$proveedor')");

	if($queryInsertarProveedor){
		header("Location: ../?vista=agregar&e=0");
	}else{
		header("Location: ../?vista=agregar&e=1");
	}

}else{
	header("Location: ../");
}
require_once '../../../footer.inc.php';
?>