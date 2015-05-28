<?php 
	$section_header = [];
	$section_header['title'] = 'Artwork';
	$section_header['header_class'] = 'red_background';
	$section_header['body'] = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
	$section_header['image'] = ['url' => 'portraits/allen-garvey-comic-book-portrait.png', 'alt' => 'Digital self-portrait of Allen Garvey as comic book super-hero'];
	include(ROOT_PATH.'inc/views/section_header.php');
 ?>

<main class='container'>

<?php 

foreach ($artworks as $get_url => $art) {
	# code...
	echo "<div class='thumbnail_container thumb_container_red'><a href='" . ARTWORK_URL."index.php?art=$get_url" . "'><img src='" . IMAGE_URL.'/artwork/thumbnails/'.$art['thumb_url'] . "' alt='$art[alt]' /></a></div>";
}