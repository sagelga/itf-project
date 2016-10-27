<!--This is template that I tested with processing.php, try it on Xampp and make sure you already have database !-->
<html>
<head>
<title>Test_login</title>
</head>
<body>
<form name="form1" method="post" action="processing.php">
  Login<br>
  <table border="1" style="width: 300px">
    <tbody>
      <tr>
        <td> &nbsp;user</td>
        <td>
          <input name="user" id="user" type="text">
        </td>
      </tr>
      <tr>
        <td> &nbsp;pass</td>
        <td><input name="pass" id="pass" type="password">
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  <input type="submit" name="Submit" value="Login">
</form>
</body>
</html>

