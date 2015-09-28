<pre>
<?php

//$nombres = array("Isaac","Fraire");
//$nombres = ["Nombre"=>"Isaac","Apellido"=>"Fraire"];

$usuarios = array
(
	array("nombre"=>"Isaac","apellido"=>"Fraire"),
	array("nombre"=>"Erika","apellido"=>"Leyva")
);

if(is_array($usuarios)){
	$html = '<ul>';
	foreach($usuarios as $indices => $valores){
		foreach($valores as $claves => $nombres){
			$html .= "<li>$nombres</li>";
		}
	}
	$html .= '</ul>';
	echo $html;
}else{
	echo "No es una fuente de datos";
}

?>
</pre>