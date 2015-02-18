<?php 
	require_once('../inc/config.php');
	include(ROOT_PATH.'inc/head.php');
	$title = 'code'; //for nav-bar active class
?>
<body>
	<?php include(ROOT_PATH.'inc/navbar.php'); ?>
	<main class='container'>
		<div class='row'>
			<div class="col-md-3"><h3><a href="<?= CODE_URL ?>android-inflater/index.php">Android Inflater</a></h3></div>
			<div class="col-md-3"><h3><a href="https://github.com/allen-garvey/ruby-launcher">Ruby Launcher (github)</a></h3></div>
			<div class="col-md-3"><h3><a href="<?= CODE_URL ?>perfect_pitch/index.html">Perfect Pitch Trainer</a></h3></div>
			<div class="col-md-3"><h3><a href="<?= CODE_URL ?>shape_calculator/index.php">Shape Calculator</a></h3></div>
		</div>
		<div class='row row_top_buffer'>	
			<div class="col-md-3"><h3><a href="https://github.com/allen-garvey/countdowner">Countdowner (github)</a></h3></div>
			<div class="col-md-3"><h3><a href="<?= CODE_URL ?>game_of_life/index.html">Game of Life</a></h3></div>
			<div class="col-md-3"><h3><a href="<?= CODE_URL ?>schedule_monster2/index.php">Schedule Monster 2</a></h3></div>
			<div class="col-md-3"><h3><a href="<?= CODE_URL ?>mastermind/index.php">Mastermind</a></h3></div>
		</div>
	</main>
<?php include(ROOT_PATH.'inc/footer.php'); ?>