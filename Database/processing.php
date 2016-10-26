<!--This is template for log-in connect to database, just add <form name="xxx" method="post" action="processing.php"> to
file login.php file. Later on will think about it later about what it missed or something else. 

NOTE : This is just for log-in (Didn't do for Sign-in) yet, but it might be similar like this, lol
      															James !-->

<?php
//Get User and Pass
$username = $_POST['user'];
$password = $_POST['pass'];

//Prevent Injection 
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

// Create connection (Up to Someone Xampp's server)
mysql_connect("localhost", "root", "");
mysql_select_db("login");

//querying make a row (Row up to your phpmyadmin row)
$result = mysql_query("select * from users where Username = '$username' and Password = '$password'")
				or die("Failed to query database ".mysql_error());
$row = mysql_fetch_array($result);
	if ($row['Username'] == $username && $row['Password'] == $password){
		echo "Finally You deserve it. ".$row['Username'];
	} else {
		echo "Fuck off";
	}