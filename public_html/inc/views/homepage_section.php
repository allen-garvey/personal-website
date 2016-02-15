<section class='<?= $section_class; ?>' id='<?= $row_id; ?>'>
	<div class='row'>
		<div class='col-sm-6'>
			<h3 class='explode'><a href="<?= $section['link']; ?>"><?= $section['title']; ?></a></h3>
			<p class='sm_col_desc'><?= $section['description']; ?></p>
		</div>
		<div class='col-sm-6'>
			<a href="<?= $section['link']; ?>"><?php include(ROOT_PATH.'images/'. $section['icon_url']); ?></a>
		</div>
	</div>
</section>