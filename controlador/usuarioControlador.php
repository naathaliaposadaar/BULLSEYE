<?php 

include "../datos/usuarioDatos.php";

class usuarioControlador{
	function insertarUsuario($username,$password){
		$obj = new usuarioDatos();
		return $obj->insertarUsuario($username,$password);
	}

	function validar($username,$password){
		$obj = new usuarioDatos();
		return $obj->validar($username,$password);
	}


}





?>