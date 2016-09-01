<?php 

	
	$n1=$_POST['primero'];
	$n2=$_POST['segundo'];
	$operador=$_POST['operador'];
	$result="";
	if($operador=="+"){
		$result="La suma es: ".($n1+$n2);
	}elseif($operador=="-"){
		$result="La resta es: ".($n1-$n2);
	}elseif ($operador=='*') {
		$result="La multiplicación es: ".($n1*$n2);
	}elseif ($operador="/") {
		$result="La división es: ".($n1/$n2);
	}

	echo $result;
	echo '<br>';
	echo '<a href="index.php">Regresar</a>';

 ?>


