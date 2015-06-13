<header class='jumbotron red_background small_bottom_padding'>
	<?php include(ROOT_PATH.'inc/views/navbar.php'); ?>
	<div class='container'>
		<a href='<?= ARTWORK_URL ?>' class='back_link'>Artwork home</a>
		<h1 class='section_header'><?= $selected_artwork->title(); ?></h1>
		
	</div>
</header>
<main class='container'>
	<figure>
		<?php 
			if($selected_artwork->showCarousel()){
				include(ROOT_PATH.'inc/views/art_detail_carousel.php');
			}
			else{
		 ?>
		<img src='<?= $selected_artwork->fullsizeUrl(); ?>' alt="<?= $selected_artwork->altText(); ?>" class="<?= $selected_artwork->imageContainerClass(); ?>" />
		<?php }//end else block if not carousel ?>
		<figcaption>
			<?= $selected_artwork->caption(); ?>
			<small class='italic'>
				<?= $selected_artwork->releaseDate(); ?>
			</small>
		</figcaption>
	</figure>
