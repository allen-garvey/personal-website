<header class='jumbotron red_background'>
	<?php include(ROOT_PATH.'inc/views/navbar.php'); ?>
	<div class='container'>
		<a href='<?= ARTWORK_URL ?>'>Artwork home</a>
		<h1 class='section_header'><?= $selected_artwork['title']; ?></h1>
		
	</div>
</header>
<main class='container'>
	<div class='row top_margin_sm'>
		<div class='col-md-6'>
			<p>
				<?= $selected_artwork['description']; ?>
			</p>
			<small class='italic to_bottom'>
				<?php $release_date = DateTime::createFromFormat('m/d/Y', $selected_artwork['date_completed']);
				echo $release_date->format('m/d/y'); 
				?>
			</small>
		</div>
		<div class='col-md-6'>
			<img src='<?= IMAGE_URL.'artwork/'. $selected_artwork['full_url']; ?>' alt="<?=$selected_artwork['alt']?>" />
		</div>
	</div>
