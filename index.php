<?php 
	include_once('inc/config.php');
?>
<html><title>Allen Garvey | Software Developer, Designer, Musician</title><head>
<?php include(ROOT_PATH . 'inc/bootstrap.php'); ?>
<link rel="stylesheet" type="text/css" href="<?= BASE_URL.'styles/master.css'; ?>">
</head>
<body>
<div class='main'>
	<header class='jumbotron'>
		<h1 class='logo_text'>Allen Garvey</h1>
		<p class='lead'>Software Developer, Designer, Musician</p>
	</header>
	<div class='jumbotron about'>
	<div class='container about_me'>
			<div class='row'>
				<div class='col-sm-12'><h2>Me in 20 Seconds</h2></div>
			</div>
			<div class='row'>
				<div class='col-sm-4'>
					<p>I'm a software developer, designer and musician. I believe in passionately following your dreams. I hope to do blank and blank. I've done blank and blank.</p>
				</div>
				<div class='col-sm-4'>
					<p>Some other stuff I believe in.</p>
				</div>
				<div class='col-sm-4'>
					<div class='allen_pic'><img width='300px' src="<?= BASE_URL.'images/allen1.jpg'; ?>"/></div>
				</div>
			</div>
		</div>
		</div>
	<main class='container'>
		


		<div class='row'>
			<div class='col-sm-6'>
				<div class='row'>
					<div class='col-sm-6'>
						<h3><a href="<?= BASE_URL.'code/' ?>">Code</a></h3>
						<p>Some programs and websites I've made.</p>
					</div>
					<div class='col-sm-6'>
						<?php include(ROOT_PATH.'images/evil-icons/ei-gear.svg'); ?>
					</div>
				</div>
			</div>
			<div class='col-sm-6'>
				<div class='row'>
					<div class='col-sm-6 col_top_buffer'>
						<h3><a href="<?= BASE_URL.'artwork/' ?>">Artwork</a></h3>
						<p>Some of my artwork.</p>
					</div>
					<div class='col-sm-6'>
						<?php include(ROOT_PATH.'images/evil-icons/ei-eye.svg'); ?>
					</div>
				</div>
			</div>
		</div>

		<div class='row row_top_buffer'>
			<div class='col-sm-6'>
				<div class='row'>
					<div class='col-sm-6'>
						<h3><a href="<?= BASE_URL.'music/' ?>">Music</a></h3>
						<p>Some music I've written.</p>
					</div>
					<div class='col-sm-6'>
						<?php include(ROOT_PATH.'images/evil-icons/ei-bell.svg'); ?>
					</div>
				</div>
			</div>
			<div class='col-sm-6'>
				<div class='row col_top_buffer'>
					<div class='col-sm-6'>
						<h3><a href="<?= BASE_URL.'code/' ?>">Video</a></h3>
						<p>Some videos I've made.</p>
					</div>
					<div class='col-sm-6'>
						<?php include(ROOT_PATH.'images/evil-icons/ei-camera.svg'); ?>
					</div>
				</div>
			</div>
		</div>
	</main>
</div>
	<footer class='container footer'>&copy;2015 Allen Garvey &mdash; <a href="mailto:allen@allengarvey.com">allen@allengarvey.com</a></footer>
</body></html>