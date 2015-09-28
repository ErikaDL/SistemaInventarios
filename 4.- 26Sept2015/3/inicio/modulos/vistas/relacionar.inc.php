<form id="addProducto" action="./manejadores/addRel.php" method="POST">
	<h2>Relacionar productos y categorias</h2>
	<?php echo listarProductos(); ?>
	<?php echo listarCategorias(); ?>
	<button type="submit">Guardar relaciones</button>	
</form>