<?php 
	require('conexion.php');
	$id=$_POST['id'];
	$nombre = $_POST['nombre'];
	$titulo = $_POST['titulo'];


	$consulta = "UPDATE datos SET nombre='$nombre', trabajo='$titulo' WHERE id=$id";
	$resultado = $mysqli->query($consulta);
	header("Location: ../administrar.php"); 
  	exit(); 

 ?>