<?php 

class contacto{
	
	public $id_contacto;
	function get_id_contacto(){
		return $this->id_contacto;
	}

	function set_id_contacto($id_contacto){
		$this->id_contacto =$id_contacto;
	}


	public $nombre_contacto;
	function get_nombre_contacto(){
		return $this->nombre_contacto;
	}

	function set_nombre_contacto($nombre_contacto){
		$this->nombre_contacto =$nombre_contacto;
	}

	public $apellido_contacto;
	function getapellido_contactoo(){
		return $this->apellido_contacto;
	}

	function set_apellido_contacto($apellido_contacto){
		$this->apellido_contacto =$apellido_contacto;
	}

	public $email_contacto;
	function get_email_contacto(){
		return $this->email_contacto;
	}

	function set_email_contacto($email_contacto){
		$this->email_contacto =$email_contacto;
	}

	public $telefono_contacto;
	function get_telefono_contacto(){
		return $this->telefono_contacto;
	}

	function set_idUsuario($telefono_contacto){
		$this->telefono_contacto =telefono_contacto;
	}

	public $tipo_usuario;
	function get_tipo_usuario(){
		return $this->tipo_usuario;
	}

	function set_tipo_usuario($tipo_usuario){
		$this->tipo_usuario =$tipo_usuario;
	}
}

?>