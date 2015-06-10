<?php 
	include_once(ROOT_PATH.'inc/models/section_homepages_model.php');
	$section_header = art_homepage_header();
	include(ROOT_PATH.'inc/views/section_header.php');
 ?>

<main class='container'>

<?php 

foreach ($artworks as $get_url => $art) {
	$thumbnail_url = get_thumbnail_url($art, $get_url);
	echo "<div class='thumbnail_container thumb_container_red'><a href='" . ARTWORK_DETAIL_URL."$get_url" . "'><img src='$thumbnail_url' alt='$art[alt]' /></a></div>";
}