<?php 
require_once('../inc/config.php');
require_once(ROOT_PATH.'inc/models/artwork_model.php');
require_once(ROOT_PATH.'inc/controllers/functions.php');
$artworks = artworks();

$title = 'artwork'; //for navbar active class

include(ROOT_PATH.'inc/views/head.php');
?>
	<?php 
		if(isset($_GET['art']) && array_key_exists($_GET['art'], $artworks)){
			$selected_artwork = $artworks[$_GET['art']];
			include(ROOT_PATH.'inc/views/artwork_detail.php');
		}
		else{
			include(ROOT_PATH.'inc/views/artwork_home.php');
		}
	 ?>
</main>


<?php include(ROOT_PATH.'inc/views/footer.php'); ?>