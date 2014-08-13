<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_CSS/index0.css">
	<title>Welcome!</title>
</head>
<body style="width:100%;height:100%"> 

    <div id="fundo">
        <img src="images/fundo.jpg" alt="" />
    </div>


<div class="div">
	
</div>

<form class="painel"  method="POST">
	<fieldset>

	<?php 
		if (isset($_POST['play']))
		{
			$nome = $_POST['nome'];
			$sobrenome = $_POST['sobrenome'];
		
			if (empty($nome) || empty($sobrenome)) 
			{
			echo 'Algum campo esta vazio !!!'.'<br>';
			}
		}
	?>

		<label>
			<span>Nome: </span><br/><br/>
			<input type="text" name="nome" /><br/><br/>
		</label>
		<label>
			<span>Sobrenome:</span><br/><br/>
			<input type="text" name="sobrenome" /><br/><br/>
		</label>
			<input type="submit" value="PLAY" name="play" />
	</fieldset>
</form>

</body>
</html>


