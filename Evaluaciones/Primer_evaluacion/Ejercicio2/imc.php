<?php 
	$txtpeso=$_POST['txtpeso'];
	$txtaltura=$_POST['txtaltura'];

	$imc=$txtpeso/($txtaltura*$txtaltura);

	echo '<h2>Masa corporal</h2>';
	echo '<strong>'.$imc.'</strong>';

 ?>