<?php
//$usuarios = [];

//echo password_hash('12345',PASSWORD_DEFAULT);

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$usuarios = array
	(
		array("usuario"=>"Issac", "password"=>"12345"),
		array("usuario"=>"Maite", "password"=>"abc")
	);
	$usuario = $_POST['usuario'];
	$pass = $_POST['password'];

	foreach ($usuarios as $indice => $arrayUsuario) {
		foreach ($arrayUsuario as $indiceUsuario => $datos) {
			$buscador = array_search($usuario, $arrayUsuario);			
			if($buscador){
				$usuarioEncontrado = $usuarios[$indice][$buscador];
				$compararHash = password_verify($pass);
				break;
			}else{
				continue;
			}
		}
	}


}else{
	header("Location: ./");
}


?>
