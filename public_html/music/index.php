<?php 
	require_once('../../inc/config.php');
	require_once(INC_PATH.'controllers/text_formatter.php');
	include(INC_PATH.'views/head.php');
	include_once(INC_PATH.'models/section_homepages_model.php');
	$title = 'music'; //for nav-bar active class

	//for section header jumbotron
	$section_header = music_homepage_header();
	
	include(INC_PATH.'views/section_header.php');
?>

<main class='container'>
	<iframe class="music_player" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/121888583&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
</main>


<?php include(INC_PATH.'views/footer.php'); ?>