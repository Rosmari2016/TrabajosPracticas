<?php 
	$txtcantidad = $_POST['txtcantidad'];
	$cbmoneda = $_POST['cbmoneda'];


	echo '<h2>Conversión</h2><br>';
	if($cbmoneda=="cordoba"){
		$conversion = $txtcantidad*29.30;
		echo 'Cordoba a Dolares: '.$conversion;
	}else{
		$conversion=$txtcantidad/29.30;
		echo 'Dolares a Cordoba: '.$conversion;
	}


	

	
 ?>
