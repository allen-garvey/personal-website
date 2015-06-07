<?php 
	require_once('inc/config.php');
	include(ROOT_PATH.'inc/views/head.php');
	include_once(ROOT_PATH.'inc/controllers/text_formatter.php');
	$title = 'error'; //for nav-bar active class
	$extra_footer_scripts = "<script type='text/javascript' src='" . BASE_URL."scripts/main_sections.js';'></script>"; //so that icons and titles in the main sections trigger each other's hover states
?>
<header class='jumbotron red_background'>
<?php include(ROOT_PATH.'inc/views/navbar.php'); ?>
<div class='container'>
	<h1 class=''>Yikes!</h1>
	<p class='lead'><?=  TextFormatter::format_html_text("It appears that the page you are looking for has moved or doesn't exist.") ?></p>
	<p><a href='<?= BASE_URL; ?>'>Go back to the homepage?</a></p>
</div>
</header>
<main class='container'>
	<?php include(ROOT_PATH.'inc/views/main_sections.php'); ?>
</main>
<?php include(ROOT_PATH.'inc/views/footer.php'); ?>