


<?php 
	
	function linhas($val)
	{
		for ($i=0; $i < $val; $i++) { 
			echo "<br>";
		}
	}
?>

<?php

	

?>

<footer>
	<center>
		<ul>
			<li>
				&copy;2014 - <?php echo date("Y") ?>
			</li>
			<li>
				<?php
					date_default_timezone_set("America/Fortaleza");
					echo "Horario do serivdor: ".date("h:i");
				?>
			</li>
		</ul>
	</center>
</footer>