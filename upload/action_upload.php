<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "upload";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `picture`(`id`, `title`, `link`) VALUES ('".$_GET['id']."','".$_GET['title']."','".$_GET['link']."');";
$result = $conn->query($sql);
//echo '<img src="'.$row['link'].'">';

//if ($result->num_rows > 0) {
    // "output data of each row"
    //while($row = $result->fetch_assoc()) {
        //$sql2 = “SELECT  `comment` FROM `comment` WHERE `id_picture` =”.$row[‘id’];
//$result2 = $conn->query($sql2);

//    }
//} else {
//    echo "0 results";

?>