<!-- Cabeçalho -->
<nav class="BarraMenu">

	<div class="painelWelcome">
		<?php 
			if ($_POST)
			{
				echo "Seja Bem vindo ".'<br>';
				echo $_POST["nomePainel"]."_".$_POST["sobrenomePainel"]."!!!";
			}
		?>
	</div>

	<center>
		<ul>
			<li></li>
			<li><a href="../_HTML/inicio.php">INICIO</a></li>
			<li><a href="../_HTML/partitura.php">ARRANJOS</a></li>
			<li><a href="../_HTML/cursos.php">CURSOS</a></li>
			<li><a href="../_HTML/contato.php">CONTATO</a></li>
		</ul>
	</center>
</nav>

