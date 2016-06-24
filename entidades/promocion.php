<?php 

class promocion{
	
	public $id_producto;
	function get_id_producto(){
		return $this->id_producto;
	}

	function set_id_producto($id_producto){
		$this->id_producto =$id_producto;
	}

	public $id_promocion;
	function get_id_promocion(){
		return $this->id_promocion;
	}

	function set_id_promocion($id_promocion){
		$this->id_promocion =$id_promocion;
	}

	public $porcentaje_descuento;
	function get_porcentaje_descuento(){
		return $this->porcentaje_descuento;
	}

	function setporcentaje_descuento($porcentaje_descuento){
		$this->porcentaje_descuento =$porcentaje_descuento;
	}

	public $descripcion_promocion;
	function get_descripcion_promocion(){
		return $this->descripcion_promocion;
	}

	function set_descripcion_promocion($descripcion_promocion){
		$this->descripcion_promocion =$descripcion_promocion;
	}
}


?>