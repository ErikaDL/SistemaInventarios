<?php 
require_once '../../../header.inc.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	$categoria = $_POST['nombre_categoria'];

	$queryInsertarProducto = mysql_query("INSERT INTO categorias (`categoria`) VALUES ('$categoria')");

	if($queryInsertarProducto){
		header("Location: ../?vista=agregarcat&e=0");
	}else{
		header("Location: ../?vista=agregarcat&e=1");
	}

}else{
	header("Location: ../");
}
require_once '../../../footer.inc.php';
?>