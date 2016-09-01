<?php 
	$txtcantidad=$_POST['txtcantidad'];
	


	echo '<h2>Conversiones</h2>';
	if (!empty($_POST['chcm'])){
		$cm=$txtcantidad;
		echo $cm.'<strong> cm.</strong><br>';
	}
	if(!empty($_POST['chpulg'])){
		$pulg=$txtcantidad*0.39370;
		echo $pulg.'<strong> pulg.</strong><br>';
	}
	if(!empty($_POST['chmts'])){
		$mts=$txtcantidad/100;
		echo $mts.'<strong> mts.</strong><br>';
	}
	if(!empty($_POST['chkm'])){
		$km=$txtcantidad/100000;
		echo $km.'<strong> km.</strong><br>';
	}	
	


 ?>