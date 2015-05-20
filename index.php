<?php 
	include_once('inc/config.php');
	include(ROOT_PATH.'inc/head.php');
	$title = 'home'; //for nav-bar active class
?>
<header class='jumbotron home'>
	<?php include(ROOT_PATH.'inc/navbar.php'); ?>
	<div class='container main_brand'>
		<h1 class='logo_text'>Allen Garvey</h1>
		<p class='lead'>Software Developer, Designer, Musician</p>
	</div>
</header>
<div class='jumbotron about'>
	<div class='container about_me'>
		<h2>Hi, I&#8217;m Allen.</h2>
		<div class='row'>
			<div class='col-sm-4'>
				<p>I&#8217;m a software developer, designer and musician. As far back as I can remember I&#8217;ve always been intensely curious, which leads me to never stop learning. I believe that if you do the work and put in the time for the things that you are most passionate about, good things will come to you.</p>
			</div>
			<div class='col-sm-4'>
				<p>Some highlights so far: I&#8217;ve <strong>written an opera</strong> while completing a degree in music composition, <strong>performed all over the world,</strong> changed track to study computer science, <strong>taught web development</strong> to high-schoolers and have <strong>created all the illustrations and graphics</strong> on this site.</p>
			</div>
			<div class='col-sm-4'>
				<img src="<?= BASE_URL.'images/allen1.jpg'; ?>" alt="Allen Garvey portrait illustration" height='150' width='150' />
			</div>
		</div>
	</div>
</div>
<main class='container'>
	<div class='row'>
		<div class='col-sm-6'>
			<div class='row'>
				<div class='col-sm-6'>
					<h3><a href="<?= CODE_URL; ?>">Code</a></h3>
					<p class='sm_col_desc'>Some apps and websites I&#8217;ve made.</p>
				</div>
				<div class='col-sm-6'>
					<img class='icon' alt='' src='<?= BASE_URL.'images/icons/code-icon.png'; ?>'/>
				</div>
			</div>
		</div>
		<div class='col-sm-6 top_margin_sm_max'>
			<div class='row'>
				<div class='col-sm-6'>
					<h3><a href="<?= ARTWORK_URL; ?>">Artwork</a></h3>
					<p class='sm_col_desc'>Some of my artwork, illustrations and designs.</p>
				</div>
				<div class='col-sm-6'>
					<img class='icon' alt='' src='<?= BASE_URL.'images/icons/art-icon.png'; ?>'/>
				</div>
			</div>
		</div>
	</div>

	<div class='row top_buffer_sm top_margin_sm_max'>
		<div class='col-sm-6'>
			<div class='row'>
				<div class='col-sm-6'>
					<h3><a href="<?= MUSIC_URL; ?>">Music</a></h3>
					<p class='sm_col_desc'>Some music I&#8217;ve written.</p>
				</div>
				<div class='col-sm-6'>
					<img class='icon' alt='' src='<?= BASE_URL.'images/icons/music-icon.png'; ?>'/>
				</div>
			</div>
		</div>
		<div class='col-sm-6 top_margin_sm_max'>
			<div class='row'>
				<div class='col-sm-6'>
					<h3><a href="<?= VIDEO_URL; ?>">Video</a></h3>
					<p class='sm_col_desc'>Some videos I&#8217;ve made.</p>
				</div>
				<div class='col-sm-6'>
					<img class='icon' alt='' src='<?= BASE_URL.'images/icons/video-icon.png'; ?>'/>
				</div>
			</div>
		</div>
	</div>
</main>

<?php include(ROOT_PATH.'inc/footer.php'); ?>