<?php 
require_once('../inc/config.php');
require_once(ROOT_PATH.'inc/models/artwork_model.php');
require_once(ROOT_PATH.'inc/controllers/text_formatter.php');
require_once(ROOT_PATH.'inc/controllers/artwork_controller.php');
$artworks = artworks();

$title = 'artwork'; //for navbar active class

include(ROOT_PATH.'inc/views/head.php');

if(isset($_GET['art']) && array_key_exists($_GET['art'], $artworks)){
	$selected_artwork = new ArtworkController($artworks[$_GET['art']], $_GET['art']);	
	include(ROOT_PATH.'inc/views/artwork_detail.php');		
}
else{
	include(ROOT_PATH.'inc/views/artwork_home.php');
}
?>
</main>

<?php include(ROOT_PATH.'inc/views/footer.php');