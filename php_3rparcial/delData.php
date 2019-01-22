<?php
	require_once("biblioteca.php");
	$id = (isset($_GET['id'])) ? $_GET['id'] : $_POST['id'] ;

	$consulta="DELETE FROM persona where id=$id";
	$result = $db->query($consulta);
	if (!$result) {
	    print "<p>Error en la consulta.</p>";
	}else{
		echo "<p>Persona eliminada de la base de datos.</p>";
		header("refresh:1; url=eliminar.php");
	}
	$db=null;
?>