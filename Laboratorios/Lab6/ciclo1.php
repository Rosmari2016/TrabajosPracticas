<?php 
	$i=1;$num2y3=0;$num3=0;$num2=0;

	while($i<=10){
		if((($i%2)==0) AND (($i%3)==0)){
			echo "$i es multiplo 2 y de 3.<br>";
			$num2y3++;
		}
		elseif(($i%2)==0){
			echo "$i es multiplo 2<br>";
			$num2++;
		}
		elseif(($i%3)==0){
			echo "$i es multiplo 3<br>";
			$num3++;
		}else{
			echo "$i no es multiplo 2 y 3<br>";
		}



		$i++;


	}

	echo "-----------------------------------------------------<br>";
	echo "Total multiplos de 2 y 3: $num2y3<br>";
	echo "Total multiplos de 2: $num2<br>";
	echo "Total multiplos de 3: $num3<br>";
	echo "Total que no son multiplos de 2 y 3: ".(10-$num2y3-$num2-$num3);
 ?>