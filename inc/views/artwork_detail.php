<header class='jumbotron red_background'>
	<?php include(ROOT_PATH.'inc/views/navbar.php'); ?>
	<div class='container'>
		<a href='<?= ARTWORK_URL ?>'>Artwork home</a>
		<h1 class='section_header'><?= $selected_artwork['title']; ?></h1>
		
	</div>
</header>
<main class='container'>
	<figure>
		<img src='<?= IMAGE_URL.'artwork/'. $selected_artwork['full_url']; ?>' alt="<?=$selected_artwork['alt']?>" class="<?= $orientation_class ?>" />
		<figcaption>
			<p>
				<?= TextFormatter::format_html_text($selected_artwork['description']); ?>
			</p>
			<small class='italic'>
				<?php 
					$release_date = DateTime::createFromFormat('m/d/Y', $selected_artwork['date_completed']);
					echo $release_date->format('m/d/y'); 
				?>
			</small>
		</figcaption>
	</figure>
