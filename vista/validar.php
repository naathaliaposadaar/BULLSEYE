<?php 

include"../controlador/usuarioControlador.php";

if(isset($_POST["username"]) || isset($_POST["password"])){
	if(trim($_POST["username"]) == "" || trim($_POST["password"]) == ""){
		echo "false";
	}else{
			$usuarioCon = new usuarioControlador();
			if($usuarioCon->validar($_POST["username"], $_POST["password"])){
			session_start();
			$_SESSION["usuario"] = $_POST["username"];
			$_SESSION["password"] = $_POST["password"];
			echo "true";
	}else{
			echo "false";
		}
	}	
}else{
	echo "false";
}











?>