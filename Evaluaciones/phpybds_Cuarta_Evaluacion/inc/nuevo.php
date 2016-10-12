<?php 

	require('conexion.php');
	$nombre = $_POST['nombre'];
	$titulo = $_POST['titulo'];


	$consulta = "INSERT INTO datos(nombre,trabajo)VALUES('$nombre','$titulo')";
	$resultado = $mysqli->query($consulta);
	header("Location: ../index.php"); 
  	exit(); 

 ?>