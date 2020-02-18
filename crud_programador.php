<?php
// incluye la clase Db
require_once('conexion.php');

	class CrudProgramador{
		// constructor de la clase
		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto de tipo programador
		public function insertar($programador){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO programadores values(NULL,:nombre,:lenguajes,:pais,:salario)');
			$insert->bindValue('nombre',$programador->getNombre());
			$insert->bindValue('lenguajes',$programador->getLenguajes());
			$insert->bindValue('pais',$programador->getPais());
			$insert->bindValue('salario',$programador->getSalario());
			$insert->execute();

		}

		// método para mostrar todos los libros
		public function mostrar(){
			$db=Db::conectar();
			$listaProgramadores=[];
			$select=$db->query('SELECT * FROM programadores');

			foreach($select->fetchAll() as $programador){
				$myProgramador= new Programador();
				$myProgramador->setId($programador['id']);
				$myProgramador->setNombre($programador['nombre']);
				$myProgramador->setLenguajes($programador['lenguajes']);
				$myProgramador->setPais($programador['pais']);
				$myProgramador->setSalario($programador['salario']);
				$listaProgramadores[]=$myProgramador;
			}
			return $listaProgramadores;
		}

		// método para eliminar un libro, recibe como parámetro el id del libro
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM programadores WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}

		// método para buscar un libro, recibe como parámetro el id del libro
		public function obtenerProgramador($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM programadores WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$programador=$select->fetch();
			$myProgramador= new Programador();
			$myProgramador->setId($programador['id']);
			$myProgramador->setNombre($programador['nombre']);
			$myProgramador->setLenguajes($programador['lenguajes']);
			$myProgramador->setPais($programador['pais']);
			$myProgramador->setSalario($programador['salario']);
			return $myProgramador;
		}

		// método para actualizar un libro, recibe como parámetro el libro
		public function actualizar($programador){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE programadores SET nombre=:nombre, lenguajes=:lenguajes,pais=:pais,salario=:salario  WHERE ID=:id');
			$actualizar->bindValue('id',$programador->getId());
			$actualizar->bindValue('nombre',$programador->getNombre());
			$actualizar->bindValue('lenguajes',$programador->getLenguajes());
			$actualizar->bindValue('pais',$programador->getPais());
			$actualizar->bindValue('salario',$programador->getSalario());
			$actualizar->execute();
		}
	}
?>