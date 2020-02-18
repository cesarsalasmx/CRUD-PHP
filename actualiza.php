<?php
//incluye la clase programdor y Crudprogramdor
	require_once('crud_programdor.php');
	require_once('programdor.php');
	$crud= new CrudProgramdor();
	$programdor=new Programdor();
	//busca el programdor utilizando el id, que es enviado por GET desde la vista mostrar.php
	$programdor=$crud->obtenerProgramdor($_GET['id']);
?>
<html>
<head>
	<title>Actualizar programdor</title>
</head>
<body>
	<form action='administrar_programdor.php' method='post'>
	<table>
		<tr>
			<input type='hidden' name='id' value='<?php echo $programdor->getId()?>'>
			<td>Nombre programdor:</td>
			<td> <input type='text' name='nombre' value='<?php echo $programdor->getNombre()?>'></td>
		</tr>
		<tr>
			<td>Lenguajes:</td>
			<td><input type='text' name='lenguajes' value='<?php echo $programdor->getLenguajes()?>' ></td>
		</tr>
		<tr>
			<td>Pais</td>
			<td><input type='text' name='pais' value='<?php echo $programdor->getPais() ?>'></td>
		</tr>
		<tr>
			<td>Salario</td>
			<td><input type='text' name='salario' value='<?php echo $programdor->getSalario() ?>'></td>
		</tr>
		<input type='hidden' name='actualizar' value'actualizar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>
</body>
</html>