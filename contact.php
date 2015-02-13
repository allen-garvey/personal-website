<?php 
	// change if current working directory i.e. getcwd() changes
	include "/home/bitterpolarbear6/allengarvey.com/functions.php";
?>

<html><title><?php echo get_title(); ?></title>

<head>

<?php 
	echo get_stylesheets();
	echo get_metadata();

?>


</head>
<body>
	<?php 
		echo get_titlebar();
	?>

	<br><br><br>
	<div class='center' name='center' id='center'>
		<h1 id='email'>Due to spammers, javascript is required to show email address</h1>

			
	</div>


<script type="text/javascript" src="scripts/email.js"></script>
<script type="text/javascript">
	var email_scrambler = new email_scrambler();
	document.getElementById('email').innerHTML = email_scrambler.get_email_link();
</script>






</body></html>