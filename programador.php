<?php
	class Programador{
		private $id;
		private $nombre;
		private $lenguajes;
		private $pais;
		private $salario;

		function __construct(){}

		public function getNombre(){
		return $this->nombre;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function getLenguajes(){
			return $this->lenguajes;
		}

		public function setLenguajes($lenguajes){
			$this->lenguajes = $lenguajes;
		}

		public function getPais(){
		return $this->pais;
		}

		public function setPais($pais){
			$this->pais = $pais;
		}
		public function getSalario(){
		return $this->salario;
		}

		public function setSalario($salario){
			$this->salario = $salario;
		}
		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}
	}
?>