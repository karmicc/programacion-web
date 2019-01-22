<?php
	require_once('biblioteca.php');
	$nombre=$_POST['name'];
	$ape=$_POST['last-name'];
	$edad=$_POST['age'];
	$sexo=$_POST['sexo'];
	$direccion=$_POST['direccion'];
	$sexo = ($sexo=='h') ? 1 : 0;
	if (!isset($_POST['guardar'])) {
		$consulta="INSERT  INTO persona (nombre,apellido,sexo,edad,direccion) values('$nombre','$ape',$sexo,$edad,'$direccion')";
		$result = $db->query($consulta);
		if (!$result) {
		    print "<p>Error en la consulta.</p>";
		} else {
		    echo "<p>Los datos se han guardado.</p>";
		    echo "<script type=\"text/javascript\">
	alert(\"Datos Guardados correctamente\");
</script>";
		   	//header("refresh:1; url=index.php");
		   	header('Location: index.php');
		}		  
	}

	$db=null;
?>
