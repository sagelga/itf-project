<?php include("Templates/NavigationBar.html");?>

	<!-- This thing upload files to SQL -->
	<center>
	<font color="white">
	<form name="form1" method="post" action="PageUploadToMySQL2.php" enctype="multipart/form-data">
	Name : <input type="text" name="txtName"><br>
	Picture : <input type="file" name="filUpload"><br>
	<input name="btnSubmit" type="submit" value="Submit">
	</font>
	</form>
	</center>

	<hr>
<?php include("Templates/FooterBar.html");?>
