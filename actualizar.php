<?php
//incluye la clase programador y Crudprogramador
	require_once('crud_programador.php');
	require_once('programador.php');
	$crud= new CrudProgramador();
	$programador=new Programador();
	//busca el programador utilizando el id, que es enviado por GET desde la vista mostrar.php
	$programador=$crud->obtenerProgramador($_GET['id']);
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stile.css">
	<title>Actualizar programador</title>
</head>
<body>
	<header>
			Bienvenido Administrar Programador
		</header>
	<div class="cuerpo">
	<form action='administrar_programador.php' method='post'>
	<table>
		<tr>
			<input type='hidden' name='id' value='<?php echo $programador->getId()?>'>
			<td>Nombre programador:</td>
			<td> <input type='text' name='nombre' value='<?php echo $programador->getNombre()?>'></td>
		</tr>
		<tr>
			<td>Lenguajes:</td>
			<td><input type='text' name='lenguajes' value='<?php echo $programador->getLenguajes()?>' ></td>
		</tr>
		<tr>
			<td>Pais</td>
			<td><input type='text' name='pais' value='<?php echo $programador->getPais() ?>'></td>
		</tr>
		<tr>
			<td>Salario</td>
			<td><input type='text' name='salario' value='<?php echo $programador->getSalario() ?>'></td>
		</tr>
		<input type='hidden' name='actualizar' value'actualizar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>
</div>
<footer>
			Administrar Programador 2020
		</footer>
</body>
</html>