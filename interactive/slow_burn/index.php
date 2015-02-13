<html manifest="slow_burn.appcache">

<?php 
	// change if current working directory i.e. getcwd() changes
	include "/home/bitterpolarbear6/allengarvey.com/functions.php";
?>

<html><title><?php echo get_title(); ?></title><head>

<?php 
	echo get_stylesheets();
	echo get_metadata();

?>
</head>
<body>
	<?php 
		echo get_titlebar();
	?>

	<script src="slow_burn.js"></script>

</body></html>