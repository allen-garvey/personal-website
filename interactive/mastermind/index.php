<?php 
	// change if current working directory i.e. getcwd() changes
	include "/home/bitterpolarbear6/allengarvey.com/functions.php";
?>

<html><title><?php echo get_title(); ?></title><head>

<?php 
	echo get_metadata();

?>

<link rel="stylesheet" type="text/css" href="mastermind_style.css">
</head>
<body>
	<?php 
		echo get_titlebar();
	?>

<div id="top" class="center2">
	<br>
	<script src="mastermind.js"></script>

</div>




</body>
</html>

