<html>
<head>
	<link rel="stylesheet" type="text/css" href="stile.css">
	<title> Ingresar Programador</title>
</head>
<header>
Ingresa los datos del Programador
</header>
<div class="cuerpo">
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
</div>
<footer>
			Administrar Programador 2020
		</footer>

</html>