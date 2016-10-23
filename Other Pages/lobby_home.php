<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://cdn2.iconfinder.com/data/icons/light-fire-line-2/512/flame-512.png">
    <title>ITF Website</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit|Open+Sans" rel="stylesheet">
    <script>
        function blinker() {
            $('.blinking').fadeOut(50);
            $('.blinking').fadeIn(150);
        }
        setInterval(blinker, 200);
    </script>
</head>
<body>
    <!-- Boostrap Config Import -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>

    <!-- Top Navigation Bar (Locked In) -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Navigation bar will be grouped for small display (smaller than iPad) -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Items that will not be hide while tab is enable -->
                <a class="navbar-brand" href="index.php">
                    <img height="25" width="25" src="images/sunrise_logo.png" alt="SunRise Logo">
                </a>
            </div>

            <!-- Navigation bar elements -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-home" aria-hidden="true" alt="Dropdown"></span> Home <span class="glyphicon glyphicon-menu-down" aria-hidden="true" alt="Dropdown"></span></a>
                        <ul class="dropdown-menu">
                            <li><a><b>Create</b></a></li>
                            <li><a href="index.html">Landing Page</a></li>
                            <li><a href="404.html">Area 404</a></li>
                            <li><a href="login.php">Login Page</a></li>
                            <li><a href="lobby_home.html">Lobby Template</a></li>
                            <li><a href="profile_kumamon.html">Profile Template</a></li>
                            <li><a href="status.html">Website Status</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a><b>Picture Templates</b></a></li>
                            <li><a href="4ColPort.html">4 Column Port</a></li>
                            <li><a href="3ColPort.html">3 Column Port</a></li>
                            <li><a href="ThumbnailPort.html">Thumbnail Port</a></li>
                        </ul>
                    </li>

                    <li><a href="https://github.com/sagelga/ITF_Websites"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Repository</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-link" aria-hidden="true"></span> Link <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
                        <ul class="dropdown-menu">
                            <li><a><b>Website Resources</b></a></li>
                            <li><a href="https://getbootstrap.com/">BootStrap 3.3.7</a></li>
                            <li><a href="http://fontawesome.io/">Font Awesome</a></li>
                            <li><a href="https://fonts.google.com/">Google Fonts</a></li>
                            <li><a href="https://developers.facebook.com/">Facebook Developer Tools</a></li>
                            <li><a href="https://dev.twitter.com/">Twitter Developer Tools</a></li>
                        </ul>
                    </li>
                </ul>

                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true" alt="User"></span></button>
                </form>

                <ul class="nav navbar-nav navbar-right">
                  <li><a href="login.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Account</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Alerts and notifications -->
    <div class="panel panel-info">
        <div class="panel-heading">You have reached the website. How can you do that?</div>
        <div class="panel-body">
            Note that, this website is for educational purpose only. Do not redistribute.
        </div>
    </div>

    <!--These below lines are independent elements. Do not really need to copy to others.-->
    <!-- Page shortcuts -->
    <h2 align="center">Hello</h2>
    <p align="center">See some webpages.</p>
    <nav aria-label="Page Selection" align="center">
        <ul class="pagination pagination-sm">
            <li><a href="#">All</a></li>
            <li><a href="#">Topic A</a></li>
            <li><a href="#">Topic B</a></li>
            <li><a href="#">Topic C</a></li>
            <li><a href="#">Topic D</a></li>
            <li><a href="#">Topic E</a></li>
            <li><a href="#">Topic F</a></li>
            <li><a href="#">Topic G</a></li>
            <li><a href="#">Topic H</a></li>
            <li><a href="#">Topic I</a></li>
            <li><a href="#">Topic J</a></li>
        </ul>
    </nav>
    <!-- Active-looking loading bar-->
    <div class="col-xs-6">
        <h4>Website Progress</h4>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                <span class="sr-only">Some achievements</span>
            </div>
        </div>
    </div>
    <div class="col-xs-6">
        <h4>Project Deadline</h4>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                <span class="sr-only">Some achievements</span>
            </div>
        </div>
    </div>

    <!-- Element inside the page -->
    <!-- Apple Music iframe -->
    <iframe src="//tools.applemusic.com/embed/v1/song/1136768508?country=th" height="110px" width="100%" frameborder="0"></iframe>

    <!-- Facebook Pages iframe -->
    <div class="col-xs-6 col-md-4">
        <div class="fb-page" data-href="https://www.facebook.com/gooddoba/" data-tabs="timeline" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/gooddoba/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/gooddoba/">เก่งมาก จ้าวโดบะ โอ้บะบะ</a></blockquote></div>
    </div>
    <div class="col-xs-6 col-md-4">
        <div class="fb-page" data-href="https://www.facebook.com/gooddoba/" data-tabs="timeline" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/gooddoba/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/gooddoba/">เก่งมาก จ้าวโดบะ โอ้บะบะ</a></blockquote></div>
    </div>
    <div class="col-xs-6 col-md-4">
        <div class="fb-page" data-href="https://www.facebook.com/gooddoba/" data-tabs="timeline" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/gooddoba/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/gooddoba/">เก่งมาก จ้าวโดบะ โอ้บะบะ</a></blockquote></div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="http://www.nyan.cat/cats/original.gif" alt="Animated nyan cat" class="img-rounded">
                <div class="caption">
                    <h3>This is a nyan cat</h3>
                    <p>While this nyan cat is very good looking, we need to focus on what he can do.</p>
                    <p><a href="http://www.nyan.cat/" class="btn btn-primary" role="button">Videos</a> <a href="https://www.google.co.th/search?q=nyan+cat&newwindow=1&espv=2&biw=1920&bih=950&source=lnms&tbm=isch&sa=X&ved=0ahUKEwi2wsOGxrfPAhWJQI8KHUpiArgQ_AUIBigB#imgrc=1FPtWNbKordMdM%3A" class="btn btn-default" role="button">About</a></p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="http://i.giphy.com/w0CJXS2M44xfW.gif" alt="A picture of an animated cat name Pusheen" class="img-rounded">
                <div class="caption">
                    <h3>This is also a cat, name Pusheen</h3>
                    <p>This cat doesn't meow. He is mostly use the time to eat a pizza.</p>
                    <p><a href="https://www.youtube.com/watch?v=EXxAJ5mNmfs" class="btn btn-primary" role="button">Videos</a> <a href="https://www.google.co.th/search?q=pusheen+gif&newwindow=1&espv=2&biw=1920&bih=950&source=lnms&tbm=vid&sa=X&ved=0ahUKEwjD-eq_x7fPAhWLLY8KHaG5AooQ_AUICSgC#q=pusheen" class="btn btn-default" role="button">About</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Start of the footer -->
    <hr>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-xs-6">
                    <h3>Sector</h3>
                    <p href="">Page</p>
                    <p href="">Page</p>
                    <p href="">Page</p>
                    <p href="">Page</p>
                </div>

                <div class="col-md-2 col-xs-6">
                    <h3>Sector</h3>
                    <p href="">Page</p>
                    <p href="">Page</p>
                    <p href="">Page</p>
                    <p href="">Page</p>
                </div>

                <div class="col-md-2 col-xs-6">
                    <h3>Sector</h3>
                    <p href="">Page</p>
                    <p href="">Page</p>
                    <p href="">Page</p>
                    <p href="">Page</p>
                </div>

                <div class="col-md-2 col-xs-6">
                    <h3>Connect</h3>
                    <p href="">Facebook</p>
                    <p href="">Twitter</p>
                    <p href="">YouTube</p>
                    <p href="">LinkedIn</p>
                </div>

                <div class="col-md-4 col-xs-12">
                    <h3 align="center"><img src="images/sunrise_logo.png"> Sun Rise</h3>
                        <select name="language" id="language" class="form-control">
                            <option value="en" selected>English</option>
                            <option value="th">ไทย</option>
                            <option value="fr">Français</option>
                            <option value="jp">日本語</option>
                            <option value="de">Deutsche</option>
                            <option value="es">Español</option>
                        </select>
                        <br>
                      <div class="col-xs-6"
                        <p align="center"><a href="">Sitemaps</a></p>
                      </div>

                      <div class="col-xs-6"
                        <p align="center"><a href="">Contacts</a></p>
                      </div>

                </div>
            </div>
        </div>
    </footer>
</body>
</html>
