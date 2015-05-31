<?php 
	include_once('inc/config.php');
	include_once(ROOT_PATH.'inc/models/sections_model.php');
	include(ROOT_PATH.'inc/views/head.php');
	$title = 'home'; //for nav-bar active class
	$sections = sections_model();

?>
<header class='jumbotron home'>
	<?php include(ROOT_PATH.'inc/views/navbar.php'); ?>
	<div class='container main_brand'>
		<h1 class='logo_text'>Allen Garvey</h1>
		<p class='lead'>Software Developer, Designer, Musician</p>
	</div>
</header>
<main>
	<article class='jumbotron about'>
		<div class='container about_me'>
			<h2>Hi, I&#8217;m Allen.</h2>
			<div class='row'>
				<section class='col-sm-4'>
					<p>I&#8217;m a software developer, designer and musician. As far back as I can remember I&#8217;ve always been intensely curious, which leads me to never stop learning. I believe that if you do the work and put in the time for the things that you are most passionate about, good things will come to you.</p>
				</section>
				<section class='col-sm-4'>
					<h4>Some highlights so far:</h4>
					<ul class='highlights_list'>
						<li>wrote and produced an opera based on <em>Brave New World</em></li>
						<li>performed in over 50 countries on 4 continents</li>
						<li>climbed Mt. Pahia in Bora Bora on three separate occasions</li>
						<li>taught web development, web design and Android app development to high school and college students</li>
						<li>had artwork chosen for the <em>2015 Stacy M. Israel Art, Architecture + Design Student Exhibition</em> at Norwalk Community College</li>
					</ul>
				</section>
				<div class='col-sm-4'>
					<img src="<?= BASE_URL.'images/allen1.jpg'; ?>" alt="Allen Garvey portrait illustration" height='150' width='150' />
				</div>
			</div>
		</div>
	</article>
	<article class='container'>
			<?php 
			$i = 0;
			$sections_per_row = 2;

			foreach ($sections as $section) {
				$row_class = 'row';
				$section_class = 'col-sm-6 bottom_margin_sm_only';

				if(($i !== 0) && ($i % $sections_per_row === 0)){
					$row_class = $row_class . ' top_buffer_sm';
				}
				if($i % $sections_per_row===0){
					echo "<div class='$row_class'>";
					include(ROOT_PATH.'inc/views/homepage_section.php');	
				}
				else{
					include(ROOT_PATH.'inc/views/homepage_section.php');
					echo "</div>";
				}
				$i++;
			}
		 ?>
	</article>
</main>

<?php include(ROOT_PATH.'inc/views/footer.php'); ?>