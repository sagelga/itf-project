<?php include("Templates/NavigationBar.html");?>


<center><img src="web.sinchronize.com/images/loading.gif" width="50%" length="50%"></center>

<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);

echo <h2>'You have cleaned session'</h2>;
header('Refresh: 2; URL = http://web.sinchronize.com/');
?>

<?php include("Templates/FooterBar.html");?>
