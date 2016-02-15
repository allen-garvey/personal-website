<?php 
	require_once("../../inc/config.php");
	$additional_stylesheets = '<link rel="stylesheet" type="text/css" href="mastermind_style.css" />';
	include(ROOT_PATH.'inc/views/head_only.php');
?>
<body>
<?php include(ROOT_PATH.'inc/views/navbar.php'); ?>
<div id="top" class="center2">
	<script src="mastermind.js"></script>
</div>
<?php include(ROOT_PATH.'inc/views/footer_js.php'); ?>
</body>
</html>

