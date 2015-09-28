<form id="addProducto" action="./manejadores/addProducto.php" method="POST">
	<h2>Agregar productos</h2>
	<input type="text" name="nombre_producto" id="nombre_producto" placeholder="Nombre del producto">
	<input type="text" name="costo_producto" id="costo_producto" placeholder="Costo">
	<button type="submit">Guardar producto</button>
	<?php echo listarCategorias(); ?>
</form>