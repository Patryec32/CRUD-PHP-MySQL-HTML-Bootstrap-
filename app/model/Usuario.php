<?php
	require_once('app/core/ConexionDB.php');
	class Usuario extends ConexionPDO(){
		//Atributos
		public $mail;
		public $rol;
		private $password;
		//metodos
		public function loguear($mail, $password){
			$this->query = "select u.login, u.mail from usuario as u";
			$this->obtenerRows();
			return this.rows; 
		}
		public function guardar(){
			$this->query ="INSERT INTO usuarios(email,password)
						   VALUE(:usuario,:email,:password)";
			$this->ejecutar(array(
				":usuario"=>$this->email,
				":password"=>$this->password
			));
		}
	}
?>