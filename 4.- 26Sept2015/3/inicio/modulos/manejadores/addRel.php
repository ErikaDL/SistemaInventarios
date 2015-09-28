<?php 
require_once '../../../header.inc.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	$producto = $_POST['lista-productos'];
	
	$categorias = $_POST['categorias'];

	$inserts = '';

	foreach($categorias as $indice => $valorCategoria){
		$inserts .= "($producto,'$valorCategoria'),";		
	}

	$sqlInsert = trim($inserts,",");

	$queryInsertarRelaciones = mysql_query("INSERT INTO productos_categorias (`id_prod`,`id_categ`) VALUES $sqlInsert");

	if($queryInsertarRelaciones){
		header("Location: ../?vista=agregar&e=0");
	}else{
		header("Location: ../?vista=agregar&e=1");
	}


}else{
	header("Location: ../");
}
require_once '../../../footer.inc.php';
?>