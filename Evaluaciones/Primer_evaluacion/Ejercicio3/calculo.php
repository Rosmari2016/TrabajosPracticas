<?php 
	$txtpago=$_POST['txtpago'];
	$txthora=$_POST['txthora'];

	$salario=$txtpago*$txthora;

	echo '<center>';
	echo 'Salario Inicial: <strong>'.$salario.'</strong><br>';	

	$IR=$salario*0.15;
	$INSS=$salario*0.06;
	$salario-=$IR+$INSS;


	echo '<h2>Deducciones</h2>';
	echo 'IR: <strong>'.$IR.'</strong><br>';
	echo 'INSS: <strong>'.$INSS.'</strong><br>';
	echo '<hr style="width:200px;">';
	echo 'Salario Final: '.$salario;
	echo '</center>';

 ?>