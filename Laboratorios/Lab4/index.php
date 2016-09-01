<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		input[type="text"],select{
			padding-left: 10px;
			margin-left: 5px;
			width: 50px;
			margin-bottom: 10px;


		}
		input[type="submit"]{
			width: 100px;
			height:50px;
			text-align: center; 

		}
		select{
			margin-left: 50px;
			width: 55px;
		}
		form{
			text-align: center;
			margin-top: 18%;
			padding-bottom: 20px;

		}

		body{
			
			background: #BEB8B8;
			-webkit-box-shadow: -12px 10px 104px -5px rgba(0,0,0,0.75);
			-moz-box-shadow: -12px 10px 104px -5px rgba(0,0,0,0.75);
			box-shadow: -12px 10px 104px -5px rgba(0,0,0,0.75);
			margin: 0 auto;
		}
		
	</style>
</head>
<body>
		<form action="operacion.php" method="POST" >
			<h2>Operaciones Basicos</h2>
			<label for="">Primer Numero</label>
			<input type="text" name="primero" id=""><br>
			<label for="">Operador</label>
			<select name="operador" >
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
			</select><br>
			<label for="">Segundo Numero</label>
			<input type="text" name="segundo" id="">
			<br>
			<input type="submit" value="Enviar">
		</form>
</body>
</html>