<?php 
	include_once(ROOT_PATH.'inc/models/section_homepages_model.php');
	$section_header = art_homepage_header();
	include(ROOT_PATH.'inc/views/section_header.php');
 ?>

<main class='container'>

<?php 

foreach ($artworks as $get_url => $art) {
	$artwork = new ArtworkController($art, $get_url);

	echo "<div class='thumbnail_container thumb_container_red'><a href='" . $artwork->artDetailUrl() . "'><img src='" . $artwork->thumbnailUrl() ."' alt='" .$artwork->altText() . "' /></a></div>";
}