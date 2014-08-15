





<center>
	<form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> "> 
	   <br><br>
	   <ul>
	   		<?php
	   			$formulario = array('<li>Nome: <input type="text" name="name"></li>',
	   								'<li>E-mail: <input type="text" name="email"></li>',
	   								'<li>Comentario: <br><br> <textarea name="comment" rows="5" cols="40"></textarea></li>',
	   								'<form action="upload_file.php" method="post" enctype="multipart/form-data">
									 <input type="file" name="file" id="file">
									 </form>',
	   								'<input type="submit" name="submit" value="Enviar">'
	   								);
	   		
	   			for ($i = 0; $i < count($formulario); $i++) { 
	   				echo $formulario[$i].'<br/><br/>';
	   			}
	   		?>
	   </ul>
	</form>
</center>


