<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
include("$root/Templates/NavigationBar.html");?>


<div class="row" id="colorful">
	<div class="col-xs-8 col-xs-offset-2">
		<center>
			<br>
			<h3 id="title"><img src="http://web.sinchronize.com/images/sinchronize.png"> Sinchronize</h3>
			<br>
			<h2 id="heading">Search within the website</h2>

			<style type="text/css"> .gsc-inline-block,.reset-box-sizing,.reset-box-sizing *,.reset-box-sizing :after,.reset-box-sizing :before{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}.gsc-input-box,.gsc-input-box-focus,.gsc-input-box-hover,.gsc-search-button,input.gsc-input{box-sizing:content-box;line-height:normal} </style>
			<script>
				(function() {
					var cx = '001930882093453736952:anbyactfo_s';
					var gcse = document.createElement('script');
					gcse.type = 'text/javascript';
					gcse.async = true;
					gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
					var s = document.getElementsByTagName('script')[0];
					s.parentNode.insertBefore(gcse, s);
				})();
			</script>
			<gcse:search></gcse:search>

			<button class="btn btn-success" onclick="goBack()">Back</button>

			<script>
				function goBack() {
					window.history.back();
				}
			</script>
			<h5 id="link">Powered by Google Custom Search. It may takes a short time to index your query.</h5>
		</center></div></div>

