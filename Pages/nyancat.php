<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
include("$root/Templates/NavigationBar.html");?>

<img src="/images/nyancat.gif" width="100%">
<button class="btn btn-success" onclick="goBack()">Back</button>

<script>
	function goBack() {
		window.history.back();
	}
</script>
