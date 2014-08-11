<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../_CSS/index.css">
	<link rel="stylesheet" type="text/css" href="../_CSS/formulario.css">
	<link rel="stylesheet" type="text/css" href="../_CSS/rodape.css">
	<title>MUSIC SITE</title>
	
</head>
<body>

<?php require '../_PHP/header.php'; ?>

<center>
	<form action="../_PHP/cadastroUsuario.php" method="POST" class="form">
		<ul>
			<li><br><br>Valor 1: <input type="text" name="num1" /></li>
			<li><br><br>Valor 2: <input type="text" name="num2" /></li>
			<li><br><br><input type="submit" value="Somar" /></li>
				<br><br>
		<ul>
	</form>
</center>




<?php require '../_PHP/rodape.php' ?>

</body>
</html>