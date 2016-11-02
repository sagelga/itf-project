<?php include "Pages/dbConfig.php";

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

<!DOCTYPE html><html lang="en"><head> <title>Sinchronize</title> <meta name="description" content="Welcome to the Sinchronize Website. Share your photos with your friends!"> <meta name="keyword" content="search, engine, optimization, search engine optimization, SEO"> <meta charset="utf-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width, initial-scale=1"> <link rel="icon" href="http://web.sinchronize.com/images/sinchronize.png"> <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> <link href="http://web.sinchronize.com/css/material-kit.css" rel="stylesheet"> <link rel="stylesheet" href="http://web.sinchronize.com/css/bootstrap.min.css"> <link rel="stylesheet" href="http://web.sinchronize.com/css/font-awesome.min.css"> <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <style>body{font-family: 'Roboto', sans-serif;}</style></head><body> <div id="navbar"> <div class="navigation-example"> <nav class="navbar navbar-success"> <div class="container"> <div class="navbar-header"> <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-success"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="http://web.sinchronize.com/index.html"> <img src="http://web.sinchronize.com/images/sinchronize.png" height="35px" width="35px"></img> </a> </div>

<!-- Navigation bar elements -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-home" aria-hidden="true"></i> Home <i class="fa fa-chevron-down" aria-hidden="true"></i></a>

                <ul class="dropdown-menu"> <li><a><b>Create</b></a></li>
                    <li><a href="http://web.sinchronize.com/index.html">Landing Page</a></li>
                    <li><a href="http://web.sinchronize.com/Pages/status.html">Website Status</a></li>
                    <li><a href="http://web.sinchronize.com/Pages/login.php">Login</a></li>
                    <li><a href="http://web.sinchronize.com/Pages/upload.php">Upload</a></li>
                    <li><a href="http://web.sinchronize.com/Pages/logout.php">Logout</a></li>

                    <li role="separator" class="divider"></li> <li><a><b>Picture Templates</b></a></li>
                    <li><a href="http://web.sinchronize.com/Pages/4ColPort.php">4 Column Port</a></li>
                    <li><a href="http://web.sinchronize.com/Pages/3ColPort.php">3 Column Port</a></li>
                    <li><a href="http://web.sinchronize.com/Pages/ThumbnailPort.php">Thumbnail Port</a></li>
                    <li><a href="http://web.sinchronize.com/Pages/lobby_home.php">Lobby Template</a></li>
                    <li><a href="http://web.sinchronize.com/Pages/profile_kumamon.html">Profile Template</a></li>

                    <li role="separator" class="divider"></li> <li><a><b>Error Page</b></a></li>
                    <li><a href="http://web.sinchronize.com/Error/404.html">Area 404 Page Not Found</a></li>
                    <li><a href="http://web.sinchronize.com/Error/403.html">Area 403</a></li>
                    <li><a href="http://web.sinchronize.com/Error/500.html">Area 500 Server's Problem</a></li>
                    <li><a href="http://web.sinchronize.com/Error/ErrorList.html">HTTP Response Code</a></li>

                    <li role="separator" class="divider"></li>
                    <li><a href="http://web.sinchronize.com/images/nyancat_origin.png">Nyan.cat</a></li>

                </ul>

            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-external-link-square" aria-hidden="true"></i> Resource <i class="fa fa-chevron-down" aria-hidden="true"></i></a>

                    <ul class="dropdown-menu"> <li><a><b>Website Framework</b></a></li>
                        <li><a href="https://getbootstrap.com/">BootStrap 3.3.7</a></li>
                        <li><a href="http://fontawesome.io/">Font Awesome</a></li>
                        <li><a href="https://fonts.google.com/">Google Fonts</a></li>
                        <li><a href="https://www.google.com/webmasters/tools/home?hl=en&authuser=0">Google Search Console</a></li>
                        <li><a href="https://developers.facebook.com/">Facebook Developer Tools</a></li>
                        <li><a href="https://dev.twitter.com/"> Twitter Developer Tools</a></li>
                        <li><a href="http://www.creative-tim.com/product/material-kit"> Material Kit</a></li>
                        <li><a href="https://www.datadoghq.com/"> DataDog</a></li>
                        <li><a href="https://feed.mikle.com/"> FeedWind RSS</a></li>

                        <li role="separator" class="divider"></li> <li><a><b>Web Hosting</b></a></li>
                        <li><a href="https://aws.amazon.com/ec2/">Amazon EC2</a></li>
                        <li><a href="https://aws.amazon.com/codedeploy/">Amazon CodeDeploy</a></li>
                        <li><a href="https://aws.amazon.com/autoscaling/">Amazon AutoScaling</a></li>
                        <li><a href="https://aws.amazon.com/lambda/">Amazon Lambda</a></li>
                        <li><a href="https://aws.amazon.com/cloudwatch/">Amazon CloudWatch</a></li>
                        <li><a href="https://godaddy.com/">GoDaddy</a></li>

                        <li role="separator" class="divider"></li> <li><a><b>Git Hosting</b></a></li>
                        <li><a href="https://github.com/">GitHub</a></li>
                        <li><a href="https://github.com/sagelga/ITF_Project">ITF Project Repository</a></li>
                        <li><a href="https://github.com/sagelga/ITF_Project/commits/master">ITF Project Master Branch</a></li>
                        <li><a href="https://github.com/sagelga/ITF_Project/blob/master/README.md">README</a></li>
                    </ul>

                </li>
            </ul>

        </div>
    </div>
</nav>

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
