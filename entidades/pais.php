<?php 

class pais{
	
	public $id_pais;
	function get_id_pais(){
		return $this->id_pais;
	}

	function set_id_pais($id_pais){
		$this->id_pais =$id_pais;
	}


	public $nombre_pais;
	function get_nombre_pais(){
		return $this->nombre_pais;
	}

	function set_nombre_pais($nombre_pais){
		$this->nombre_pais =$nombre_pais;
	}


}

?>