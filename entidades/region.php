<?php 

class region{
	
	public $id_region;
	function get_id_region(){
		return $this->id_region;
	}

	function set_id_region($id_region){
		$this->id_region =$id_region;
	}

	public $id_pais;
	function get_id_pais(){
		return $this->id_pais;
	}

	function set_id_pais($id_pais){
		$this->id_pais =$id_pais;
	}

	public $codigo_postal;
	function get_codigo_postal(){
		return $this->codigo_postal;
	}

	function set_codigo_postal($codigo_postal){
		$this->codigo_postal =$codigo_postal;
	}

	public $nombre_region;
	function get_nombre_region(){
		return $this->nombre_region;
	}

	function set_nombre_region($nombre_region){
		$this->nombre_region =$nombre_region;
	}

}


?>