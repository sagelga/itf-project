<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
include("$root/Templates/NavigationBar.html");?>

<script>+function(e){"use strict";var n=document.getElementById("drop-zone"),o=document.getElementById("js-upload-form"),t=function(e){console.log(e)};o.addEventListener("submit",function(e){var n=document.getElementById("js-upload-files").files;e.preventDefault(),t(n)}),n.ondrop=function(e){e.preventDefault(),this.className="upload-drop-zone",t(e.dataTransfer.files)},n.ondragover=function(){return this.className="upload-drop-zone drop",!1},n.ondragleave=function(){return this.className="upload-drop-zone",!1}}(jQuery);.
</script>

<style>.upload-drop-zone{height:200px;border-width:2px;margin-bottom:20px;color:#ccc;border-style:dashed;border-color:#ccc;line-height:200px;text-align:center}.upload-drop-zone.drop{color:#222;border-color:#222}
</style>

<h1 align="center">Upload files</h1>
<br>
<hr>
<br>
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading"><strong>Upload Files</strong> <small>Bootstrap files upload</small></div>
    <div class="panel-body">

      <!-- Standar Form -->
      <h4>Select files from your computer</h4>
      <form action="" method="post" enctype="multipart/form-data" id="js-upload-form">
        <div class="form-inline">
          <div class="form-group">
            <input type="file" name="files[]" id="js-upload-files" multiple>
        </div>
        <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Upload files</button>
    </div>
</form>

<!-- Drop Zone -->
<h4>Or drag and drop files below</h4>
<div class="upload-drop-zone" id="drop-zone">
    Just drag and drop files here
</div>

<!-- Progress Bar -->
<div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
      <span class="sr-only">60% Complete</span>
  </div>
</div>

<!-- Upload Finished -->
<div class="js-upload-finished">
    <h3>Processed files</h3>
    <div class="list-group">
      <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">Success</span>image-01.jpg</a>
      <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">Success</span>image-02.jpg</a>
  </div>
</div>
</div>
</div>
</div> <!-- /container -->

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
                <h3 align="center"><img src="http://54.254.168.155/images/sunrise_logo.png"> Sun Rise</h3>
                <center>
                  <!-- Enable ToolTip functionality -->
                  <script> $(function () {$('[data-toggle="tooltip"]').tooltip()}) </script>

                  Change Language

                  <div id="google_translate_element" data-toggle="tooltip" data-placement="top" title="Choose your preferred language. Powered by Google Translate"></div>
                  <script type="text/javascript"> function googleTranslateElementInit() {new google.translate.TranslateElement({pageLanguage: 'en', multilanguagePage: true, gaTrack: true, gaId:'UA-86183782-1'}, 'google_translate_element');}</script>
                  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
              </center>

              <br>

              <p align="center"><a href="">Sitemaps</a> | <a href="http://54.254.168.155/Pages/status.html">Status</a> | <a href="">Contact Us</a></p>


          </div>
      </div>
  </div>
</footer>
<!-- Boostrap Config Import -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="http://54.254.168.155/js/jquery.js"></script>
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create', 'UA-86183782-1', 'auto');ga('send', 'pageview');
</body>
</html>

<!--
    Nyan nyan nyan nyan nyan nyan nyan nyan
    ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
    ░░░░░░░░░░▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄░░░░░░░░░
    ░░░░░░░░▄▀░░░░░░░░░░░░▄░░░░░░░▀▄░░░░░░░
    ░░░░░░░░█░░▄░░░░▄░░░░░░░░░░░░░░█░░░░░░░
    ░░░░░░░░█░░░░░░░░░░░░▄█▄▄░░▄░░░█░▄▄▄░░░
    ░▄▄▄▄▄░░█░░░░░░▀░░░░▀█░░▀▄░░░░░█▀▀░██░░
    ░██▄▀██▄█░░░▄░░░░░░░██░░░░▀▀▀▀▀░░░░██░░
    ░░▀██▄▀██░░░░░░░░▀░██▀░░░░░░░░░░░░░▀██░
    ░░░░▀████░▀░░░░▄░░░██░░░▄█░░░░▄░▄█░░██░
    ░░░░░░░▀█░░░░▄░░░░░██░░░░▄░░░▄░░▄░░░██░
    ░░░░░░░▄█▄░░░░░░░░░░░▀▄░░▀▀▀▀▀▀▀▀░░▄▀░░
    ░░░░░░█▀▀█████████▀▀▀▀████████████▀░░░░
    ░░░░░░████▀░░███▀░░░░░░▀███░░▀██▀░░░░░░
    ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
-->
