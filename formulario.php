<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Endereços de IP</title>
</head>
<body>
	<h1><b>Classes IP</b></h1>
	<h4><b>Digite o endereço IP que pretende verificar</b></h4>

	<form action="form.php">
	<input type="text" name="valor1" size="7" required>
	<input type="text" name="valor2" size="7" required>
	<input type="text" name="valor3" size="7" required>
	<input type="text" name="valor4" size="7" required>

	<br>
	<br>

	<input type="submit" name="verificar" value="Submeter dados">
	</form>
	<br>
	<br>
	<h1>Protocolos</h1>
	<h4><b>Selecione o protocolo que se deseja</b></h4>

	<form action="protocolo.php">
		<select name="protocolo">
			<option value="DNS">DNS</option>
			<option value="FTP">FTP</option>
			<option value="HTTP">HTTP</option>
			<option value="IP">IP</option>
		</select>

		<br>
		<br>

		<input type="submit" value="Enviar">
	</form>

</body>
</html>