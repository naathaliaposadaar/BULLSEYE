<?php 

include "../datos/empresaDatos.php";

class empresaControlador{
	function insertarEmpresa($nombre_empresa,$rut_empresa){
		$obj = new empresaDatos();
		return $obj->insertaEmpresa($nombre_empresa,$rut_empresa);
	}

	function validar($nombre_empresa,$rut_empresa){
		$obj = new empresaDatos();
		return $obj->validar($nombre_empresa,$rut_empresa);
	}

}






?>