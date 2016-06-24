<?php 

class empresa{
	
	public $id_empresa;
	function get_id_empresa(){
		return $this->id_empresa;
	}

	function set_id_empresa($id_empresa){
		$this->id_empresa =$id_empresa;
	}

	public $rut_empresa;
	function get_rut_empresa(){
		return $this->rut_empresa;
	}

	function set_rut_empresa($rut_empresa){
		$this->rut_empresa =$rut_empresa;
	}

	public $razon_social;
	function get_razon_social(){
		return $this->razon_social;
	}

	function set_razon_social($razon_social){
		$this->razon_social =$razon_social;
	}

	public $tipo_empresa;
	function get_tipo_empresa(){
		return $this->tipo_empresa;
	}

	function set_tipo_empresa($tipo_empresa){
		$this->tipo_empresa =$tipo_empresa;
	}

	public $email_empresa;
	function get_email_empresa(){
		return $this->email_empresa;
	}

	function set_email_empresa($email_empresa){
		$this->email_empresa =$email_empresa;
	}


	public $direccion_empresa;
	function get_direccion_empresa(){
		return $this->email_empresa;
	}

	function set_direccion_empresa($direccion_empresa){
        $this->direccion_empresa =$direcciorazon_social;}
	public $id_region;
	function get_id_region(){
		return $this->id_region;
	}

	function set_id_region($id_region){
		$this->id_region =$id_region;
	}

	public $id_contacto;
	function get_id_contacto(){
		return $this->id_contacto;
	}

	function set_id_contacto($id_contacto){
		$this->id_contacto =$id_contacto;
	}

		public $nombre_empresa;
	function get_nombre_empresa(){
		return $this->id_contacto;
	}

	function set_nombre_empresa($nombre_empresa){
		$this->nombre_empresa =$nombre_empresa;
	}
}


?>