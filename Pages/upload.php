<!--Database-->
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

<body>

	<div class="container-fluid">

		<div class="row">

			<div class="col-md-12">


				<div class="page-header">
					<h1 align="center">
						Upload your files <br><small>if you still can</small>
					</h1>
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
			<div class="col-md-10 col-md-offset-1">
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
						<textarea name="content" class="form-control" id="ContentForm" rows="1" cols="50"></textarea>

					</div>

					<button type="submit" class="btn btn-success">
						Submit
					</button>
				</form>
			</div>
		</div>
	</div>
	<br>
	<br>

	<?php
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);
	include("$root/Templates/FooterBar.html");?>
