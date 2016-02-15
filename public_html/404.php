<?php 
	require_once('../inc/config.php');
	include(INC_PATH.'views/head.php');
	include_once(INC_PATH.'controllers/text_formatter.php');
	$title = 'error'; //for nav-bar active class
?>
<header class='jumbotron red_background'>
<?php include(INC_PATH.'views/navbar.php'); ?>
<div class='container'>
	<h1 class=''>Yikes!</h1>
	<p class='lead'><?=  TextFormatter::format_html_text("It appears that the page you are looking for has moved or doesn't exist.") ?></p>
	<p><a href='<?= BASE_URL; ?>'>Go back to the homepage?</a></p>
</div>
</header>
<main class='container'>
	<?php include(INC_PATH.'views/main_sections.php'); ?>
</main>
<?php include(INC_PATH.'views/footer.php'); ?>