<?php 
	include_once('../inc/config.php');
	include_once(INC_PATH.'controllers/text_formatter.php');
	include_once(INC_PATH.'models/homepage_model.php');
	include(INC_PATH.'views/head.php');
	$title = 'home'; //for nav-bar active class
	$model = main_index_model();

?>
<header class='jumbotron home'>
	<?php include(INC_PATH.'views/navbar.php'); ?>
	<div class='container main_brand'>
		<h1 class='logo_text'>Allen Garvey</h1>
		<p class='lead'>Software Developer, Designer, Musician</p>
	</div>
</header>
<main>
	<article class='jumbotron about'>
		<div class='container about_me'>
			<div class='row'>
				<section class='col-md-4'>
					<h2>Hi, I&#8217;m Allen.</h2>
					<p><?= TextFormatter::format_html_text($model['main_text']); ?></p>
				</section>
				<section class='col-md-4 highlights_section'>
					<h4>Some highlights:</h4>
					<ul class='highlights_list bullets'>
						<?php 
							foreach ($model['accomplishment_list'] as $accomplishment) {
								echo '<li>'.TextFormatter::format_html_text($accomplishment).'</li>';
							}
						?>
					</ul>
				</section>
				<figure class='col-md-4'>
					<img src="<?= BASE_URL.'images/allen1.jpg'; ?>" alt="Allen Garvey portrait illustration" height='150' width='150' />
				</figure>
			</div>
		</div>
	</article>
	<article class='container'>
		<?php 
			include_once(INC_PATH.'views/main_sections.php');
	 	?>
	</article>
</main>
<?php include(INC_PATH.'views/footer.php'); ?>