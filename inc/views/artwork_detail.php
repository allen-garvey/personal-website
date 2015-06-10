<header class='jumbotron red_background small_bottom_padding'>
	<?php include(ROOT_PATH.'inc/views/navbar.php'); ?>
	<div class='container'>
		<a href='<?= ARTWORK_URL ?>' class='back_link'>Artwork home</a>
		<h1 class='section_header'><?= $selected_artwork['title']; ?></h1>
		
	</div>
</header>
<main class='container'>
	<figure>
		<?php 
			if(isset($selected_artwork['carousel'])){
				include(ROOT_PATH.'inc/views/art_detail_carousel.php');
			}
			else{
		 ?>
		<img src='<?= $fullsize_url; ?>' alt="<?=$selected_artwork['alt']?>" class="<?= $orientation_class ?>" />
		<?php }//end else block if not carousel ?>
		<figcaption>
			<?= TextFormatter::format_html_text_xpath($selected_artwork['description']); ?>
			<small class='italic'>
				<?php 
					$release_date = DateTime::createFromFormat('m/d/Y', $selected_artwork['date_completed']);
					echo $release_date->format('m/d/y'); 
				?>
			</small>
		</figcaption>
	</figure>
