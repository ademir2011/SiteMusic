<!-- Cabeçalho -->
<nav class="BarraMenu">
	<div class="painelWelcome">
		<?php 

			$nome = $_POST['nomePainel'];
			$sobrenome = $_POST['sobrenomePainel'];

			setcookie("cNome", $nome, time()+(3*60));
			setcookie("cSobrenome", $sobrenome, time()+(3*60));

			echo "<a>";
			if (isset($_COOKIE["cNome"]) && isset($_COOKIE["cSobrenome"]))
				echo "Bem vindo " . $_COOKIE["cNome"] . $_COOKIE["cSobrenome"]." !";
			else
				echo "Seja bem vindo !<br>";
			echo "</a>";

		?>
	</div>
	<center>
		<ul>
			<li><a href="../_HTML/inicio.php">INICIO</a></li>
			<li><a href="../_HTML/partitura.php">ARRANJOS</a></li>
			<li><a href="../_HTML/cursos.php">CURSOS</a></li>
			<li><a href="../_HTML/contato.php">CONTATO</a></li>
		</ul>
	</center>
</nav>

