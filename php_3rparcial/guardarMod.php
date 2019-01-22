<?php
	require_once('biblioteca.php');
	$id=$_POST['id'];
	$nombre=$_POST['name'];
	$ape=$_POST['last-name'];
	$edad=$_POST['age'];
	$sexo=$_POST['sexo'];
	$direccion=$_POST['direccion'];
	$sexo = ($sexo=='h') ? 1 : 0;
	if (!isset($_POST['guardar'])) {
		$consulta="UPDATE persona SET nombre='$nombre',apellido='$ape',sexo=$sexo,edad=$edad,direccion='$direccion' where id=$id";
		$result = $db->query($consulta);
		if (!$result) {
		    print "<p>Error en la consulta.</p>";
		} else {
		    echo "<p>Los datos se han actualizado.</p>";
		   	header("refresh:1; url=modificar.php");
		}		  
	}

	$db=null;
?>
