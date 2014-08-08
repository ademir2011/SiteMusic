





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



<?php
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 20000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["file"]["error"] > 0) {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
  } else {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
    if (file_exists("upload/" . $_FILES["file"]["name"])) {
      echo $_FILES["file"]["name"] . " already exists. ";
    } else {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
    }
  }
} else {
  echo "Invalid file";
}
?>

