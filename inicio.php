<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/rodape.css">
	<link rel="stylesheet" type="text/css" href="css/formulario.css">
	
	<title>MUSIC SITE</title>

</head>
<body>

<?php include_once('include/header.php'); ?>

<?php

if(isset($_GET['page']))
{
	switch ($_GET['page'])
	{
		case 'home':
			include('page/home.php');
			break;
		
		case 'partitura':
			include('page/partitura.php');
			break;

		case 'cursos':
			include('page/cursos.php');
			break;

		case 'contato':
			include('page/contato.php');
			break;

		default:
			break;
	}
}
	
else
{
	include('page/home.php');
}

?>

<?php include_once('include/rodape.php'); ?>

</body>
</html>


<!-- 

SOM 

<audio autoplay="autoplay">
    <source src="http://a.tumblr.com/tumblr_m5h9k8Bh3S1r2r773o1.mp3" />
</audio>


target="_blank" -> abre uma nova aba
width="42" height="42" -> limita o tamanho da imagem
tr -> controi linha 
td -> adiciona inline "colunas" | asd | asd | ....
th -> "titulo da coluna"
border -> borda 
padding -> espaçamento
	float: left; -> pega alguma elemento (table, div...) para flutuar ao lado de outro elemento.. flutuar = colocar 				ao lado
line-height: 50px; -> alinha o texto verticalmente!
controls -> abilita controles | autoplay -> inicia automaticamente
list-style:none; -> serve para retirar os pontos do ul li
input[type=submit] -> personalizar botao


ENVIO DE DADOS FORMULARIO

-- action -> saber qual arquivo php
-- method -> saber que o metódo a ser chado é o POST

recebendo $_POST["name"]

-->
