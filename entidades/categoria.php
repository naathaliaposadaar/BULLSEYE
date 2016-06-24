<?php 

class categoria{
	
	public $id_categoria;
	function get_id_categoria(){
		return $this->id_categoria;
	}

	function set_id_categoria($id_categoria){
		$this->id_categoria =$id_categoria;
	}

	public $id_seccion;
	function get_id_seccion(){
		return $this->id_seccion;
	}

	function set_id_seccion($id_seccion){
		$this->id_seccion =$id_seccion;
	}

	public $nombre_categoria;
	function get_nombre_categoria(){
		return $this->nombre_categoria;
	}

	function set_nombre_categoria($nombre_categoria){
		$this->nombre_categoria =$nombre_categoria;
	}








}



?>