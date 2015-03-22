<?php 
	require_once('inc/config.php');
	include(ROOT_PATH.'inc/head.php');
	$title = 'error'; //for nav-bar active class
?>
<header class='jumbotron'>
<?php include(ROOT_PATH.'inc/navbar.php'); ?>
<div class='container'>
	<h1 class=''>Sorry.</h1>
	<p class='lead'>It appears that the page you are looking for has moved or doesn't exist.</p>
	<p><a href='<?= BASE_URL; ?>'>Go back to home?</a></p>
</div>
</header>
<main class='container'>
</main>
<?php include(ROOT_PATH.'inc/footer.php'); ?>