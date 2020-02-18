<html>
<head>
	<title> Ingresar Programador</title>
</head>
<header>
Ingresa los datos del Programador
</header>
<form action='administrar_programador.php' method='post'>
	<table>
		<tr>
			<td>Nombre</td>
			<td> <input type='text' name='nombre'></td>
		</tr>
		<tr>
			<td>Lenguajes:</td>
			<td><input type='text' name='lenguajes' ></td>
		</tr>
		<tr>
			<td>País</td>
			<td><input type='text' name='pais' ></td>
		</tr>
		<tr>
			<td>Salario</td>
			<td><input type='text' name='salario' ></td>
		</tr>
		<input type='hidden' name='insertar' value='insertar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>

</html>