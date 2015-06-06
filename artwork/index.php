<?php 
require_once('../inc/config.php');
require_once(ROOT_PATH.'inc/models/artwork_model.php');
require_once(ROOT_PATH.'inc/controllers/text_formatter.php');
$artworks = artworks();

$title = 'artwork'; //for navbar active class

function get_thumbnail_url($art, $get_url){
	$thumbnail_url = isset($art['thumb_url']) ? $art['thumb_url'] : ARTWORK_IMAGE_THUMBNAIL_URL. $get_url.'-thumbnail' . $art['thumbnail_extension'];
	return $thumbnail_url;
}

function get_fullsize_url($art, $get_url){
	$fullsize_url = isset($art['full_url']) ? $art['full_url'] : ARTWORK_IMAGE_URL. $get_url.$art['fullsize_extension'];
	return $fullsize_url;
}


include(ROOT_PATH.'inc/views/head.php');
?>
	<?php 
		if(isset($_GET['art']) && array_key_exists($_GET['art'], $artworks)){
			$selected_artwork = $artworks[$_GET['art']];
			$orientation_class = 'half_bottom_margin';
			if($selected_artwork['orientation'] === 'portrait'){
				$orientation_class = $orientation_class . ' pull_right_md left_buffer_md';
			}
			$fullsize_url = get_fullsize_url($artworks[$_GET['art']], $_GET['art']);	
			include(ROOT_PATH.'inc/views/artwork_detail.php');		
		}
		else{
			include(ROOT_PATH.'inc/views/artwork_home.php');
		}
	 ?>
</main>


<?php include(ROOT_PATH.'inc/views/footer.php'); ?>