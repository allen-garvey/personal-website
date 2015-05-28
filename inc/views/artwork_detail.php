<header class='jumbotron section_header red_background'>
	<?php include(ROOT_PATH.'inc/views/navbar.php'); ?>
	<div class='container'>
		<a href='<?= ARTWORK_URL ?>'>Back</a>
		<h1 class='section_header'><?= $selected_artwork['title']; ?></h1>
		<div class='row top_margin_sm'>
			<div class='col-md-6'>
				<p>
					<?= $selected_artwork['description']; ?>
				</p>
			</div>
			<div class='col-md-6'>
				<img src='<?= IMAGE_URL.'artwork/'. $selected_artwork['full_url']; ?>' alt="<?=$selected_artwork['alt']?>" />
			</div>
		</div>
	</div>
</header>
<main class='container'>

