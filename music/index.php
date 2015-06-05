<?php 
	require_once('../inc/config.php');
	require_once(ROOT_PATH.'inc/controllers/text_formatter.php');
	include(ROOT_PATH.'inc/views/head.php');
	$title = 'music'; //for nav-bar active class

	//for section header jumbotron
	$section_header = [];
	$section_header['title'] = 'Music';
	$section_header['header_class'] = 'blue_background';
	$section_header['body'] = "What I love about music is how it can be anything you want---from very simple to impossibly complex. 
		I like to have a balance between preparation and spontaneity---of being able to have a general plan while still allowing the possibility of happy accidents. 
		I like music that transcends genre, because it enables the listener to be pleasantly surprised since anything can happen";
	$section_header['image'] = ['url' => 'portraits/allen-garvey-video-portrait.gif', 'alt' => 'Low-res bitmap photo self-portrait of Allen Garvey'];
	
	include(ROOT_PATH.'inc/views/section_header.php');
?>

<main class='container'>
	<iframe width="100%" height="150" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/121888583&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
</main>


<?php include(ROOT_PATH.'inc/views/footer.php'); ?>