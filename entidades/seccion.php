<?php 

class seccion{
	
	public $idUsuario;
	function get_idUsuario(){
		return $this->idUsuario;
	}

	function set_idUsuario($idUsuario){
		$this->idUsuario =$idUsuario;
	}

	public $nombre_seccion;
	function get_nombre_seccion(){
		return $this->nombre_seccion;
	}

	function set_nombre_seccion($nombre_seccion){
		$this->nombre_seccion =$nombre_seccion;
	}

	public $id_seccion;
	function get_id_seccion(){
		return $this->id_seccion;
	}

	function set_id_seccion($id_seccion){
		$this->id_seccion =$id_seccion;
	}

}



?>