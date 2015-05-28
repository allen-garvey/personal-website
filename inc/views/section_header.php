<header class='jumbotron section_header <?= $section_header['header_class']  ?>'>
	<?php include(ROOT_PATH.'inc/views/navbar.php'); ?>
	<div class='container'>
		<h1 class='section_header'><?= $section_header['title']  ?></h1>
		<div class='row'>
			<div class='col-sm-6'>
				<p class='section_header'><?= $section_header['body']  ?></p>
			</div>
			<div class='col-sm-6'>
				<img src="<?= IMAGE_URL. $section_header['image']['url'] ?>" alt='<?= $section_header['image']['alt']  ?>' />
			</div>
		</div>
	</div>
</header>