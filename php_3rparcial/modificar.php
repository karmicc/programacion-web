<?php
	include("menu.html");
	require_once("biblioteca.php");
?>	
		<div class="regreso">
			<h2>Modificar Persona</h2>	
		</div>
		<div class="busqueda">
			<form method="post" action="modData.php">
				Buscar:
				<input type="text" name="id" id="id" placeholder="Ingresar id">
			</form>
		</div>
		<table class="personas">
			<tr>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Edad</th>
				<th>Sexo</th>
				<th>Dirección</th>
				<th>Opciones</th>
			</tr>
<?php
	$consulta="SELECT * FROM persona";
	$result = $db->query($consulta);
	if (!$result) {
	    print "<p>Error en la consulta.</p>";
	} else {
	   	foreach ($result as $valor) {
	   		$Sexo = ($valor['sexo']==1) ? "Hombre" : "Mujer" ;
	   		echo "<tr>\n
				<td>".$valor['nombre']."</td>\n
				<td>".$valor['apellido']."</td>\n
				<td>".$valor['edad']."</td>\n
				<td>".$Sexo."</td>\n
				<td>".$valor['direccion']."</td>\n
				<td><a href=\"modData.php?id=".$valor['id']."\">Modificar</a></td>
			</tr>\n";
	   	}
	}
	$db=null;
?>

		</table>
		<div class="regreso">
			<a href="index.php">Pagina Principal</a>
		</div>
	</body>
</html>
