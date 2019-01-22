<?php
	include("menu.html");
	require_once("biblioteca.php");
	$id = (isset($_GET['id'])) ? $_GET['id'] : $_POST['id'] ;
	$persona=array();
	$consulta="SELECT * FROM persona where id=$id";
	$result = $db->query($consulta);
	if (!$result) {
	    print "<p>Error en la consulta.</p>";
	}else{
		foreach ($result as $key) {
			$persona=$key;
		}
	}
?>
	
	<div class="regreso">
		<h2>Modificar Persona</h2>
	</div>
	<div class="formulario">
		<form method="post" action="guardarMod.php">
			<table>
				<tr>
					<td>Nombre:</td>
					<td><input type="text" name="name" required="true" <?php echo "value=\"".$persona['nombre']."\""; ?>></td>
				</tr>
				<tr>
					<td>Apellido:</td>
					<td><input type="text" name="last-name" required="true" <?php echo "value=\"".$persona['apellido']."\""; ?>></td>
				</tr>
				<tr>
					<td>Edad:</td>
					<td><input type="text" name="age" required="true" <?php echo "value=\"".$persona['edad']."\""; ?>></td>
				</tr>
				<tr>
					<td>Sexo:</td>
					<td><select name="sexo">
                			<option value="h" <?php
                			if ($persona['sexo']==1) {
                				echo "selected=\"true\"";
                			}
                			?>>Hombre</option>
                			<option value="m" <?php
                			if ($persona['sexo']==0) {
                				echo "selected=\"true\"";
                			}
                			?>>Mujer</option>
                		</select></td>
				</tr>
				<tr>
					<td>Dirección:</td>
					<td><input type="text" name="direccion" <?php echo "value=\"".$persona['direccion']."\""; ?>></td>
				</tr>
			</table><br>
			<input type="hidden" name="id" <?php echo "value=\"$id\"";?>>
			<button type="submit" value="save">Guardar</button>
		</form>
	</div>
	<div class="regreso">
		<a href="index.php">Pagina Principal</a>
	</div>
</body>
</html>
<?php
	$db=null;
?>