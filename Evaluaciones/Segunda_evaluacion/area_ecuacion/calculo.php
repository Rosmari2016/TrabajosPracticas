<?php

	if($_REQUEST['operador'] == "area"){
		$l1 = $_REQUEST['l1'];
		$l2 = $_REQUEST['l2'];
		$area = area($l1,$l2);
		echo 'El area es: '.$area;
	}else if($_REQUEST['operador']=='ecuacion'){
		$a = $_REQUEST['valorA'];
		$b = $_REQUEST['valorB'];
		$c = $_REQUEST['valorC'];

		$ecuacion = ecuacion($a,$b,$c);
		echo 'Resultado de la ecuacion '.$ecuacion;
	}

	function area($l1,$l2){
		return $l1*$l2;
	}

	function ecuacion($a,$b,$c){
		return ($a+7*$c)/($b+2-$a)+2*$b;
	}

?>