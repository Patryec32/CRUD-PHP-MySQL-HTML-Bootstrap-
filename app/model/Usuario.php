<?php
	require_once('app/core/ConexionDB.php');
	class Usuario extends ConexionPDO(){
		//Atributos
		public $mail;
		public $rol;
		private $password;
		//metodos
		public function loguear($name, $pass){
			$this->query = "select u.login, u.mail from usuario as u";
			$this->obtenerRows();
			return this.rows; 
		}
	}
?>