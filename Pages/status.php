<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
include("$root/Templates/NavigationBar.html");?>

<br>
<p align="center"><img src="http://web.sinchronize.com/images/sinchronize.png"></p>
<h1 align="center">Sinchronize RSS News Room </h1>
<p align="center">For a slow Internet Connection, do not attempt to load this page any further. We have warned you.</p>
<br>
<hr>

<!-- RSS Feeds -->
<div class="col-xs-12 col-sm-6 col-md-4">
  <h3 align="center">GitHub Repository</h3>
  <hr>
  <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="?widget_parameter=%7B%22sources%22%3A%5B%7B%22source%22%3A%22https%3A%2F%2Fgithub.com%2Fsagelga%2FITF_Project%2Fcommits%2Fphp-development.atom%22%2C%22type%22%3A%22RSS%22%7D%2C%7B%22source%22%3A%22https%3A%2F%2Fgithub.com%2Fsagelga%2FITF_Project%2Fcommits%2Fmaster.atom%22%2C%22type%22%3A%22RSS%22%7D%5D%2C%22name%22%3A%22%22%2C%22width%22%3A0%2C%22height%22%3A%22400%22%2C%22height_by_article%22%3A0%2C%22target%22%3A%22_blank%22%2C%22font%22%3A%22Arial%2C%20Helvetica%2C%20sans-serif%22%2C%22title_font_size%22%3A%2216%22%2C%22item_title_font_size%22%3A%2216%22%2C%22item_description_font_size%22%3A%2212%22%2C%22border%22%3A%22off%22%2C%22css_url%22%3A%22%22%2C%22responsive%22%3A%22on%22%2C%22text_direction%22%3A%22left%22%2C%22text_alignment%22%3A%22justify%22%2C%22corner%22%3A%22rounded%22%2C%22scroll%22%3A%22on%22%2C%22auto_scroll%22%3A%22on%22%2C%22auto_scroll_direction%22%3A%22up%22%2C%22auto_scroll_step_speed%22%3A%223%22%2C%22auto_scroll_mc_speed%22%3A%2220%22%2C%22sort%22%3A%22new%22%2C%22title%22%3A%22on%22%2C%22title_sentence%22%3A%22Recent%20Commits%20to%20ITF%20Project%22%2C%22title_link%22%3A%22%22%2C%22title_bgcolor%22%3A%22%2399cc00%22%2C%22title_color%22%3A%22%23505659%22%2C%22title_bgimage%22%3A%22%22%2C%22item_bgcolor%22%3A%22%23ffffff%22%2C%22item_bgimage%22%3A%22%22%2C%22item_title_length%22%3A%2255%22%2C%22item_title_color%22%3A%22%232e7ec8%22%2C%22item_border_bottom%22%3A%22on%22%2C%22item_description%22%3A%22both%22%2C%22item_link%22%3A%22off%22%2C%22item_description_length%22%3A%22100%22%2C%22item_description_color%22%3A%22%23505659%22%2C%22item_date%22%3A%22on%22%2C%22item_date_format%22%3A%22%25b%20%25e%2C%20%25Y%20%25k%3A%25M%22%2C%22item_date_timezone%22%3A%22%22%2C%22item_description_style%22%3A%22thumbnail%22%2C%22item_thumbnail%22%3A%22full%22%2C%22item_thumbnail_selection%22%3A%22auto%22%2C%22article_num%22%3A%2299%22%2C%22item_player%22%3A%22off%22%2C%22keyword_inc%22%3A%22%22%2C%22keyword_exc%22%3A%22%22%7D"></script>
</div>

<div class="col-xs-12 col-sm-6 col-md-4">
  <h3 align="center">AWS EC2 (Singapore) Status</h3>
  <hr>
  <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="?widget_parameter=%7B%22sources%22%3A%5B%7B%22source%22%3A%22http%3A%2F%2Fstatus.aws.amazon.com%2Frss%2Fec2-ap-southeast-1.rss%22%2C%22type%22%3A%22RSS%22%7D%5D%2C%22name%22%3A%22%22%2C%22width%22%3A0%2C%22height%22%3A%22400%22%2C%22height_by_article%22%3A0%2C%22target%22%3A%22_blank%22%2C%22font%22%3A%22Arial%2C%20Helvetica%2C%20sans-serif%22%2C%22title_font_size%22%3A%2216%22%2C%22item_title_font_size%22%3A%2216%22%2C%22item_description_font_size%22%3A%2212%22%2C%22border%22%3A%22off%22%2C%22css_url%22%3A%22%22%2C%22responsive%22%3A%22on%22%2C%22text_direction%22%3A%22left%22%2C%22text_alignment%22%3A%22justify%22%2C%22corner%22%3A%22rounded%22%2C%22scroll%22%3A%22on%22%2C%22auto_scroll%22%3A%22on%22%2C%22auto_scroll_direction%22%3A%22up%22%2C%22auto_scroll_step_speed%22%3A%224%22%2C%22auto_scroll_mc_speed%22%3A%2220%22%2C%22sort%22%3A%22new%22%2C%22title%22%3A%22on%22%2C%22title_sentence%22%3A%22%22%2C%22title_link%22%3A%22%22%2C%22title_bgcolor%22%3A%22%23ffcc00%22%2C%22title_color%22%3A%22%23505659%22%2C%22title_bgimage%22%3A%22%22%2C%22item_bgcolor%22%3A%22%23ffffff%22%2C%22item_bgimage%22%3A%22%22%2C%22item_title_length%22%3A%2255%22%2C%22item_title_color%22%3A%22%232e7ec8%22%2C%22item_border_bottom%22%3A%22on%22%2C%22item_description%22%3A%22both%22%2C%22item_link%22%3A%22off%22%2C%22item_description_length%22%3A%22100%22%2C%22item_description_color%22%3A%22%23505659%22%2C%22item_date%22%3A%22on%22%2C%22item_date_format%22%3A%22%25b%20%25e%2C%20%25Y%20%25k%3A%25M%22%2C%22item_date_timezone%22%3A%22%22%2C%22item_description_style%22%3A%22thumbnail%22%2C%22item_thumbnail%22%3A%22full%22%2C%22item_thumbnail_selection%22%3A%22auto%22%2C%22article_num%22%3A%2215%22%2C%22item_player%22%3A%22off%22%2C%22keyword_inc%22%3A%22%22%2C%22keyword_exc%22%3A%22%22%7D"></script>
</div>

<div class="col-xs-12 col-sm-6 col-md-4">
  <h3 align="center">BootStrap Versions</h3>
  <hr>
  <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="?widget_parameter=%7B%22sources%22%3A%5B%7B%22source%22%3A%22http%3A%2F%2Fblog.getbootstrap.com%2Ffeed.xml%22%2C%22type%22%3A%22RSS%22%7D%5D%2C%22name%22%3A%22%22%2C%22width%22%3A0%2C%22height%22%3A%22400%22%2C%22height_by_article%22%3A0%2C%22target%22%3A%22_blank%22%2C%22font%22%3A%22Arial%2C%20Helvetica%2C%20sans-serif%22%2C%22title_font_size%22%3A%2216%22%2C%22item_title_font_size%22%3A%2216%22%2C%22item_description_font_size%22%3A%2212%22%2C%22border%22%3A%22on%22%2C%22css_url%22%3A%22%22%2C%22responsive%22%3A%22on%22%2C%22text_direction%22%3A%22left%22%2C%22text_alignment%22%3A%22left%22%2C%22corner%22%3A%22rounded%22%2C%22scroll%22%3A%22on%22%2C%22auto_scroll%22%3A%22on%22%2C%22auto_scroll_direction%22%3A%22up%22%2C%22auto_scroll_step_speed%22%3A%224%22%2C%22auto_scroll_mc_speed%22%3A%2220%22%2C%22sort%22%3A%22new%22%2C%22title%22%3A%22on%22%2C%22title_sentence%22%3A%22Bootstrap%22%2C%22title_link%22%3A%22http%3A%2F%2Fblog.getbootstrap.com%2F%22%2C%22title_bgcolor%22%3A%22%239c27b0%22%2C%22title_color%22%3A%22%23ffffff%22%2C%22title_bgimage%22%3A%22%22%2C%22item_bgcolor%22%3A%22%23ffffff%22%2C%22item_bgimage%22%3A%22%22%2C%22item_title_length%22%3A%2255%22%2C%22item_title_color%22%3A%22%232e7ec8%22%2C%22item_border_bottom%22%3A%22on%22%2C%22item_description%22%3A%22both%22%2C%22item_link%22%3A%22off%22%2C%22item_description_length%22%3A%22100%22%2C%22item_description_color%22%3A%22%23505659%22%2C%22item_date%22%3A%22on%22%2C%22item_date_format%22%3A%22%25b%20%25e%2C%20%25Y%20%25k%3A%25M%22%2C%22item_date_timezone%22%3A%22%22%2C%22item_description_style%22%3A%22thumbnail%22%2C%22item_thumbnail%22%3A%22crop%22%2C%22item_thumbnail_selection%22%3A%22auto%22%2C%22article_num%22%3A%2215%22%2C%22item_player%22%3A%22off%22%2C%22keyword_inc%22%3A%22%22%2C%22keyword_exc%22%3A%22%22%7D"></script>
</div>
<br>
<hr>
<br>
<div class="col-md-12">
  <!-- Data from DataDog. Imported from AWS -->
  <div class="col-xs-12 col-sm-6 col-md-4">
    <h3 align="center">AWS EC2 Instances Network Data</h3>
    <hr>
    <iframe src="https://app.datadoghq.com/graph/embed?token=9b5ac1a58a2c7315bc1a476fab97dd45fce44de5d9ad1fa01331a0b45a116ce2&height=300&width=600&legend=true" width="100%" height="300" frameborder="0" scrolling="False" title="Data is realtime. Powered by DataDog"></iframe>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-4">
    <h3 align="center">AWS EC2 Estimated Costs</h3>
    <hr>
    <iframe src="https://app.datadoghq.com/graph/embed?token=80a7388c9800eb41c804871ecdae7ce78d4b176f1693c16c66027f94b0ac6a01&height=300&width=600&legend=true" width="100%" height="300" frameborder="0" scrolling="False" title="Data is realtime. Powered by DataDog"></iframe>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-4">
    <h3 align="center">AWS SNS SMS Alert Total</h3>
    <hr>
    <iframe src="https://app.datadoghq.com/graph/embed?token=d01243655d8555d28d973d17cfbe15eb388f6249d559feb1ce7df76f232ea3a8&height=300&width=600&legend=true" width="100%" height="300" frameborder="0" scrolling="False" title="Data is realtime. Powered by DataDog"></iframe>
    </div>
</div>

<br>
<hr>
<br>

<?php include("/Templates/FooterBar.html");?>
