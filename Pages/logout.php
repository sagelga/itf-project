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

<center><img src="web.sinchronize.com/images/loading.gif" width="50%" length="50%"></center>

<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);

echo <h2>'You have cleaned session'</h2>;
header('Refresh: 2; URL = http://web.sinchronize.com/');
?>

<footer>
  <!-- Tabs with icons on Card -->
  <div class="card card-nav-tabs">
   <div class="header header-success">
    <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
    <div class="nav-tabs-navigation">
     <div class="nav-tabs-wrapper">
      <ul class="nav nav-tabs" data-tabs="tabs">
       <li class="active">
        <a href="#a" data-toggle="tab">
         <i class="material-icons">face</i>
         Profile
       </a>
     </li>
     <li>
      <a href="#b" data-toggle="tab">
       Messages
     </a>
   </li>
   <li>
    <a href="#c" data-toggle="tab">
     Settings
   </a>
 </li>
 <li>
  <a href="#d" data-toggle="tab">
    Settings
  </a>
</li>
<li>
  <a href="#e" data-toggle="tab">
    Settings
  </a>
</li>
</ul>
</div>
</div>
</div>
<div class="content">
  <div class="tab-content text-center">
   <div class="tab-pane active" id="profile">
    <p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. </p>
  </div>

  <div class="tab-pane" id="messages">
    <p> I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
  </div>

  <div class="tab-pane" id="settings">
    <h3 align="center"><img src="http://web.sinchronize.com/images/sinchronize.png"> Phodory</h3>
    <center>
      <!-- Enable ToolTip functionality -->
      <script> $(function () {$('[data-toggle="tooltip"]').tooltip()}) </script>
      <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Change Language
      <div id="google_translate_element" data-toggle="tooltip" data-placement="top" title="Choose your preferred language. Powered by Google Translate"></div>
      <script type="text/javascript"> function googleTranslateElementInit() {new google.translate.TranslateElement({pageLanguage: 'en', multilanguagePage: true, gaTrack: true, gaId:'UA-86183782-1'}, 'google_translate_element');}</script>
      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

      <div class="tab-pane" id="messages">
        <p> I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
      </div>

      <div class="tab-pane" id="messages">
        <p> I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
      </div>

    </center>

    <br>

    <p align="center">
      <a href="">Sitemaps</a> | 
      <a href="http://web.sinchronize.com/Pages/status.html">Status</a> | 
      <a href="">Contact Us</a>
    </p>

  </div>
</div>
</div>
</div>
<!-- End Tabs with icons on Card -->
</div>

</footer>
<!-- JS Importing Items -->
<!-- Google jQuery --> <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- BootStrap JS --> <script src="http://web.sinchronize.com/js/bootstrap.min.js"</script>
<!-- BootStrap JQuery --> <script src="http://web.sinchronize.com/js/jquery.min.js"</script>
<!-- Google Analytics Tag --> <script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create', 'UA-86183782-1', 'auto');ga('send', 'pageview'); </script>
<!-- Matterial Kit JS --> <script src="http://web.sinchronize.com/js/jquery.sharrre.js"></script>
<!--                  --> <script src="http://web.sinchronize.com/js/material-kit.js"></script>
<!--                  --> <script src="http://web.sinchronize.com/js/bootstrap-datepicker.js"></script>
<!--                  --> <script src="http://web.sinchronize.com/js/nouislider.min.js"></script>
<!-- Matterial Kit JS --> <script src="http://web.sinchronize.com/js/material.min.js"></script>
</body>
</html>

<!--
,-~~-.___.
/ |  '     \
(  )        0
\_/-, ,----'
  ====           //
 /  \-'~;    /~~~(O)
/  __/~|   /       |
=(  _____| (_________|
  -Paul Hickey
-->
