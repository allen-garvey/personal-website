<?php 
require_once('../../inc/config.php');
require_once(INC_PATH.'models/artwork_model.php');
require_once(INC_PATH.'controllers/text_formatter.php');
require_once(INC_PATH.'controllers/artwork_controller.php');
$artworks = artworks();

$title = 'artwork'; //for navbar active class

include(INC_PATH.'views/head.php');

if(isset($_GET['art']) && array_key_exists($_GET['art'], $artworks)){
	$selected_artwork = new ArtworkController($artworks[$_GET['art']], $_GET['art']);	
	include(INC_PATH.'views/artwork_detail.php');		
}
else{
	include(INC_PATH.'views/artwork_home.php');
}
?>
</main>

<?php include(INC_PATH.'views/footer.php');