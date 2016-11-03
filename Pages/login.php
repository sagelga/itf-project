$msg = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $password = md5($_POST["password"]);
    if ($name == '' || $password == '') {
        $msg = "You must enter all fields";
    } else {
        $sql = "SELECT * FROM members WHERE name = '$name' AND password = '$password'";
        $query = mysql_query($sql);

        if ($query === false) {
            echo "Could not successfully run query ($sql) from DB: " . mysql_error();
            exit;
        }

        if (mysql_num_rows($query) > 0) {

            header('Location: dbConfig.php');
            exit;
        }

        $msg = "Username and password do not match";
    }
}
?>

<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
include("$root/Templates/NavigationBar.html");?>

<form name="frmregister"action="<?= $_SERVER['PHP_SELF'] ?>" method="post" >
  <table class="form" border="0">

     <tr>
         <td></td>
         <td style="color:red;">
            <?php echo $msg; ?></td>
        </tr>

        <tr>
            <th><label for="name"><strong>Name:</strong></label></th>
            <td><input class="inp-text" name="name" id="name" type="text" size="30" /></td>
        </tr>
        <tr>
            <th><label for="name"><strong>Password:</strong></label></th>
            <td><input class="inp-text" name="password" id="password" type="password" size="30" /></td>
        </tr>
        <tr>
         <td></td>
         <td class="submit-button-right">
            <input class="send_btn" type="submit" value="Submit" alt="Submit" title="Submit" />

            <input class="send_btn" type="reset" value="Reset" alt="Reset" title="Reset" /></td>

        </tr>
    </table>
</form>
</body>
</html>
