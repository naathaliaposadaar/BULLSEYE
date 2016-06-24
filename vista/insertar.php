<?php 

include"../controlador/usuarioControlador.php";

if(isset($_GET["username"]) || isset($_GET["password"])){
	if(trim($_GET["username"]) == "" || trim($_GET["password"]) == ""){
		echo "false";
	}else{
			$usuarioCon = new usuarioControlador();
			if($usuarioCon->insertarUsuario($_GET["username"], $_GET["password"])){
			echo "true";
	}else{
			echo "false";
		}
	}	
}else{
	echo "true";
}



?>




