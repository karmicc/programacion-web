<?php
	include("menu.html");
?>
	
	<div class="regreso">
		<h2>Crear Persona</h2>
	</div>
	<div class="formulario">
		<form method="post" action="guardar.php">
			<table>
				<tr>
					<td>Nombre:</td>
					<td><input type="text" name="name" required="true"></td>
				</tr>
				<tr>
					<td>Apellido:</td>
					<td><input type="text" name="last-name" required="true"></td>
				</tr>
				<tr>
					<td>Edad:</td>
					<td><input type="text" name="age" required="true"></td>
				</tr>
				<tr>
					<td>Sexo:</td>
					<td><select name="sexo">
                			<option value="h">Hombre</option>
                			<option value="m">Mujer</option>
                		</select></td>
				</tr>
				<tr>
					<td>Dirección:</td>
					<td><input type="text" name="direccion"></td>
				</tr>
			</table><br>
			<button class="menu-item" type="submit" value="save">Guardar</button>
		</form>
	</div>
	<div class="regreso">
		<a href="index.php">Pagina Principal</a>
	</div>
</body>
</html>