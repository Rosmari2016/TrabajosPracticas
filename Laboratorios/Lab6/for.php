<?php 
	echo "1. Estructura estandar <br>";
	for($i=1;$i<=10;$i++){
		echo $i;
	}
	echo "<br>";
	echo "2. Estructura condicion <br>";
	for($i=1;;$i++){
		if ($i>10){
			break;
		}
		echo $i;
	}
	echo "<br>";
	echo "3. Estructura multiplo <br>";
	$i=1;
	for(;;){
		if ($i>10){
			break;
		}
		echo $i;
		$i++;
	}

	echo "<br>";
	echo "4. Estructura todo en uno <br>";
	for($i=1;$i<=10;$i++.print $i){
		echo $i;
	}

 ?>