<?php 
	$section_header = [];
	$section_header['title'] = 'Artwork';
	$section_header['header_class'] = 'red_background';
	$section_header['body'] = "In aesthetics class I learned that art can be representative, expressive, embody form, convey the art tradition, or engage your critical thinking. 
								I think that all successful art should contain all these qualities, to some extent. 
								As a graphic designer, I also always try to think about the appropriateness of the visual---for the subject, for the medium, and for the intended audience.";
	$section_header['image'] = ['url' => 'portraits/allen-garvey-comic-book-portrait.png', 'alt' => 'Digital self-portrait of Allen Garvey as comic book super-hero'];
	include(ROOT_PATH.'inc/views/section_header.php');
 ?>

<main class='container'>

<?php 

foreach ($artworks as $get_url => $art) {
	# code...
	echo "<div class='thumbnail_container thumb_container_red'><a href='" . ARTWORK_DETAIL_URL."$get_url" . "'><img src='" . IMAGE_URL.'/artwork/thumbnails/'.$art['thumb_url'] . "' alt='$art[alt]' /></a></div>";
}