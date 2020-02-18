<?php
require_once('crud_programador.php');
require_once('programador.php');
$crud=new CrudProgramador();
$programador= new Programador();
$listaProgramadores=$crud->mostrar();
?>
 
<html>
<head>
	<title>Mostrar programadores</title>
</head>
<body>
	<table border=1>
		<head>
			<td>Nombre</td>
			<td>Lenguajes</td>
			<td>Pais</td>
			<td>Salario</td>
			<td>Actualizar</td>
			<td>Eliminar</td>
		</head>
		<body>
			<?php foreach ($listaProgramadores as $programador) {?>
			<tr>
				<td><?php echo $programador->getNombre() ?></td>
				<td><?php echo $programador->getLenguajes() ?></td>
				<td><?php echo $programador->getPais()?> </td>
				<td><?php echo $programador->getSalario()?> </td>
				<td><a href="actualizar.php?id=<?php echo $programador->getId()?>&accion=a">Actualizar</a> </td>
				<td><a href="administrar_programador.php?id=<?php echo $programador->getId()?>&accion=e">Eliminar</a>   </td>
			</tr>
			<?php }?>
		</body>
	</table>
	<a href="index.php">Volver</a>
</body>
</html>