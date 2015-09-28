<?php require_once '../../header.inc.php';?>
<h2>¡Modulos!</h2>
<?php 
$vista = isset($_GET['vista']) ? strtolower($_GET['vista']) : 'home';

switch($vista){
	case 'home':
	echo "Sección home";
	break;
	case 'agregarprod':
	include_once './vistas/agregar_productos.inc.php';
	break;
	case 'agregarcat':
	include_once './vistas/agregar_categorias.inc.php';
	break;	
	case 'rel':
	include_once './vistas/relacionar.inc.php';
	break;				
	case 'prov':
	include_once './vistas/agregar_proveedores.inc.php';
	break;		
}

?>
<?php require_once '../../footer.inc.php'; ?>