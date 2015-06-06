<header class='jumbotron red_background small_bottom_padding'>
	<?php include(ROOT_PATH.'inc/views/navbar.php'); ?>
	<div class='container'>
		<a href='<?= ARTWORK_URL ?>' class='back_link'>Artwork home</a>
		<h1 class='section_header'><?= $selected_artwork['title']; ?></h1>
		
	</div>
</header>
<main class='container'>
	<figure>
		<img src='<?= $fullsize_url; ?>' alt="<?=$selected_artwork['alt']?>" class="<?= $orientation_class ?>" />
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
