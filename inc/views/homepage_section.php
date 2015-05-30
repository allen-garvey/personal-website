<section class='<?= $section_class; ?>'>
	<div class='row'>
		<div class='col-sm-6'>
			<h3 class='explode'><a href="<?= $section['link']; ?>"><?= $section['title']; ?></a></h3>
			<p class='sm_col_desc'><?= $section['description']; ?></p>
		</div>
		<div class='col-sm-6'>
			<a href="<?= $section['link']; ?>"><img class='icon' alt='' src='<?= IMAGE_URL. $section['icon_url']; ?>'/></a>
		</div>
	</div>
</section>