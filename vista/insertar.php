<?php 

include"../controlador/usuarioControlador.php";
include"../controlador/empresaControlador.php";

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

if(isset($_GET["nombre_empresa"]) || isset($_GET["rut_empresa"])){
	if(trim($_GET["nombre_empresa"]) == "" || trim($_GET["rut_empresa"]) == ""){
		echo "false";
	}else{
			$empresaCon = new empresaControlador();
			if($usuarioCon->insertarEmpresa($_GET["nombre_empresa"], $_GET["rut_empresa"])){
			echo "true";
	}else{
			echo "false";
		}
	}	
}else{
	echo "true";
}




?>




