<php?

class venta{
	
	public $id_venta;
	function get_id_venta(){
		return $this->id_venta;
	}

	function set_id_venta($id_venta){
		$this->id_venta =$id_venta;
	}

	public $id_producto;
	function get_id_producto(){
		return $this->id_producto;
	}

	function set_id_producto($id_producto){
		$this->id_producto =$id_producto;
	}

	public $descripcion;
	function get_descripcion(){
		return $this->descripcion;
	}

	function set_descripcion($descripcion){
		$this->descripcion =$descripcion;
	}

	public $total_venta;
	function get_total_venta(){
		return $this->total_venta;
	}

	function set_total_venta($total_venta){
		$this->total_venta =$total_venta;
	}

	public $unidades;
	function get_unidades(){
		return $this->unidades;
	}

	function set_unidades($unidades){
		$this->unidades=$unidades;
	}

}
?>