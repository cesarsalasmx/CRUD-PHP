<?php
//incluye la clase programador y Crudprogramador
require_once('crud_programador.php');
require_once('programador.php');
 
$crud= new CrudProgramador();
$programador= new Programador();
 
	// si el elemento insertar no viene nulo llama al crud e inserta un programador
	if (isset($_POST['insertar'])) {
		$programador->setNombre($_POST['nombre']);
		$programador->setLenguajes($_POST['lenguajes']);
		$programador->setPais($_POST['pais']);
		$programador->setSalario($_POST['salario']);
		//llama a la función insertar definida en el crud
		$crud->insertar($programador);
		header('Location: index.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el programador
	}elseif(isset($_POST['actualizar'])){
		$programador->setId($_POST['id']);
		$programador->setNombre($_POST['nombre']);
		$programador->setLenguajes($_POST['lenguajes']);
		$programador->setPais($_POST['pais']);
		$programador->setSalario($_POST['salario']);
		$crud->actualizar($programador);
		header('Location: index.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un programador
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: index.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
	else{
		echo "Error";
	}
?>