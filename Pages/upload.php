<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
include("$root/Templates/NavigationBar.html");?>

<form action="action_upload.php" method="get" ">

           ID<input type="text" name="id"><br>
           Title<input type="text" name="title"><br>
           Link<input type="text" name="link"><br>
           Description<input type="text" name="description"><br>

        <button type="submit">Upload files</button>

  </form>


<form action="fileupload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
