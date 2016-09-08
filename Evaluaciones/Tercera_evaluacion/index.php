<?php 
	$est=1;
	$nota1=0;
	$nota2=0;
	$nota3=0;
	$nota4=0;
	while($est<=5){
		$nota1=rand(0,5);
		$nota2=rand(0,5);
		$nota3=rand(0,5);
		$nota4=rand(0,5);

		echo "Notas del estudiante $est <br><br>";

		echo "Primera Nota: $nota1 <br>";
		echo "Segunda Nota: $nota2 <br>";
		echo "Tercera Nota: $nota3 <br>";
		echo "Cuarta Nota: $nota4 <br>";

		$prom=0;
		$prom=($nota1+$nota2+$nota3+$nota4)/4;

		if($prom>=3.5){
			echo "<br>Usted a ganado $prom <br><br>";
		}else
		{
			echo "<br>Usted a perdido $prom <br><br>";
		}
		echo "-------------------------------------------<br>";
		$est++;
	}
	
 ?>