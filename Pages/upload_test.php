<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM content order by datetime DESC";
$result = $conn->query($sql);
?>

<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
include("$root/Templates/NavigationBar.html");?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>ITF Project</title>

	<meta name="description" content="Source code generated using layoutit.com">
	<meta name="author" content="LayoutIt!">

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

</head>
<body>

	<div class="container-fluid">

		<div class="row">

			<div class="col-md-12">


				<div class="page-header">
					<h1>
						Blog <small>While True Gaming Present</small>
					</h1>
				</div>

				<div class="jumbotron">
					<h2>
						James, uploading template
					</h2>
					<p>
						This is a simple web blogs.Please test to add new content at below form.
					</p>
				</div>



				<?php

				if ($result->num_rows > 0) {

					while($row = $result->fetch_assoc()) {
						echo '<div class="jumbotron">';
						echo '<h2> Post from ';
						echo $row["name"];
						echo '</h2>';
						echo '<p>';
						echo $row["content"];
						echo '</p>';
						echo '</div>';
					}
				} 

				$conn->close(); 

				?>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<form role="form" action="add_content.php" method="post">
					<div class="form-group">

						<label for="NameForm">
							Name
						</label>
						<input name="name" type="text" class="form-control" id="NameForm">
					</div>
					<div class="form-group">

						<label for="ContentForm">
							Content
						</label>
						<textarea name="content" class="form-control" id="ContentForm" rows="4" cols="50"></textarea>

					</div>

					<button type="submit" class="btn btn-default">
						Submit
					</button>
				</form>
			</div>
		</div>
	</div>
	<br>
	<br>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
</body>
</html>