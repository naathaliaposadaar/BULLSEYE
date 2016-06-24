<?php 

class despacho{
	
	public $id_despacho;
	function get_id_despacho(){
		return $this->id_despacho;
	}

	function set_id_despacho($id_despacho){
		$this->id_despacho =$id_despacho;
	}

	public $id_producto;
	function get_id_producto(){
		return $this->id_producto;
	}

	function set_id_producto($id_producto){
		$this->id_producto=$id_producto;
	}

	public $id_venta;
	function get_id_venta(){
		return $this->id_venta;
	}

	function set_id_venta($id_venta){
		$this->id_venta =$id_venta;
	}

	public $dias_despacho;
	function get_dias_despacho(){
		return $this->dias_despacho;
	}

	function set_dias_despacho($dias_despacho){
		$this->dias_despacho =$dias_despacho;
	}

	public $estado_despacho;
	function get_estado_despacho(){
		return $this->estado_despacho;
	}

	function set_estado_despacho($estado_despacho){
		$this->estado_despacho =$estado_despacho;
	}
}



?>