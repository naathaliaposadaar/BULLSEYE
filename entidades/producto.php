<php? 
class producto{

	public $id_producto;
	function get_id_producto(){
		return $this->id_producto;
	}

	function set_id_producto($id_producto){
		$this->id_producto =$id_producto;
	}


	public $nombre_producto;
	function get_nombre_producto(){
		return $this->nombre_producto;
	}

	function set_nombre_producto($nombre_producto){
		$this->nombre_producto =$nombre_producto;
	}

	public $stock_producto;
	function get_stock_producto(){
		return $this->stock_producto;
	}

	function set_stock_producto($stock_producto){
		$this->stock_producto =$stock_producto;
	}

	public $id_empresa;
	function get_id_empresa(){
		return $this->id_empresa;
	}

	function set_id_empresa($id_empresa){
		$this->id_empresa =$id_empresa;
	}

	public $id_categoria;
	function get_id_categoria(){
		return $this->id_categoria;
	}

	function set_id_categoria($id_categoria){
		$this->id_categoria =$id_categoria;
	}
	
}




?>