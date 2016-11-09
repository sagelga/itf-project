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
$sql = "INSERT INTO `content` (`name`, `content`, `datetime`) VALUES ('".$_POST["name"]."', '".$_POST["content"]."', NOW())";
$result = $conn->query($sql);


$conn->close();

?>

Thank you for uploading!
<a href="index.php"> Click to get back </a>