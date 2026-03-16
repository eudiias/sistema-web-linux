<?php
session_start();
$LG = $_POST['lg'];
$SE = $_POST['se'];
if($LG == "joca" && $SE == "1234")
{
	$_SESSION['Logado'] = true;
	header("Location: menu.php");
	exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SISTEMA</title>
</head>
<body>
	<h1>Acesso 2</h1>
	<form method="post">
		<label for="lg">Login:</label>
		<input type="text" name="lg" id="lg">
		<br><br>
		<label for="se">Senha:</label>
		<input type="password" name="se" id="se">
		<br><br>
		<input type="submit" value="Acessar">
	</form>
</body>
</html>


