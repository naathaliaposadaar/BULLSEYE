<?php

class usuario{
	public $idUsuario;
	function get_idUsuario(){
		return $this->idUsuario;
	}

	function set_idUsuario($idUsuario){
		$this->idUsuario =$idUsuario;
	}

	public $username;
	function get_username(){
		return $this->username;
	}

	function set_username($username){
		$this->username= $username;
	}


	public $password;
	function get_password(){
		return $this->password;
	}

	function set_password($password){
		$this->password= $password;
	}

		public $id_empresa;
	function get_id_empresa(){
		return $this->id_empresa;
	}

	function set_id_empresa($id_empresa){
		$this->id_empresa= $id_empresa;
	}

		public $tipo_usuario;
	function get_tipo_usuario(){
		return $this->tipo_usuario;
	}

	function set_tipo_usuario($tipo_usuario){
		$this->tipo_usuario= $tipo_usuario;
	}

}
?>