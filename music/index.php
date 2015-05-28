<?php 
	require_once('../inc/config.php');
	include(ROOT_PATH.'inc/views/head.php');
	$title = 'music'; //for nav-bar active class

	//for section header jumbotron
	$section_header = [];
	$section_header['title'] = 'Music';
	$section_header['header_class'] = 'purple_background';
	$section_header['body'] = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
	$section_header['image'] = ['url' => 'portraits/allen-garvey-video-portrait.gif', 'alt' => 'Low-res bitmap photo self-portrait of Allen Garvey'];
	
	include(ROOT_PATH.'inc/views/section_header.php');
?>

<main class='container'>
	<iframe width="100%" height="150" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/121888583&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
</main>


<?php include(ROOT_PATH.'inc/views/footer.php'); ?>