<?php 
	require_once('../inc/config.php');
	include(ROOT_PATH.'inc/head.php');
	$title = 'code'; //for nav-bar active class
	$code_model = [];
	$code_model[] = ['title' => 'Android Inflater', 'link' => CODE_URL.'android-inflater/', 'release_date' => '02/10/2015'];
	$code_model[] = ['title' => 'Font Check (github)', 'link' => 'https://github.com/allen-garvey/font-check/', 'release_date' => '02/05/2015'];
	$code_model[] = ['title' => 'Ruby Launcher (github)', 'link' => 'https://github.com/allen-garvey/ruby-launcher/', 'release_date' => '01/12/2015'];
	$code_model[] = ['title' => 'Perfect Pitch Trainer', 'link' => CODE_URL.'perfect_pitch/', 'release_date' => '12/20/2014'];
	$code_model[] = ['title' => 'Shape Calculator', 'link' => CODE_URL.'shape_calculator/', 'release_date' => '09/28/2014'];
	$code_model[] = ['title' => 'Countdowner (github)', 'link' => 'https://github.com/allen-garvey/countdowner/', 'release_date' => '06/23/2014'];
	$code_model[] = ['title' => 'Game of Life', 'link' => CODE_URL.'game_of_life/', 'release_date' => '5/22/2014'];
	$code_model[] = ['title' => 'Schedule Monster 2', 'link' => CODE_URL.'schedule_monster2/', 'release_date' => '06/09/2014'];
	$code_model[] = ['title' => 'Mastermind', 'link' => CODE_URL.'mastermind/', 'release_date' => '04/12/2014'];

	$items_per_row = 4;

?>
<body>
	<?php include(ROOT_PATH.'inc/navbar.php'); ?>
	<main class='container main'>
		<div class='row'>
			<?php
				$i = 0;
				foreach ($code_model as $entry) {
					if($i > 0 && $i % $items_per_row === 0){
						echo "</div><div class='row top_buffer_sm'>";
					}
					echo "<div class='col-md-3'><h3><a href=$entry[link]>$entry[title]</a></h3></div>";
					
					$i++;
				}
			?>
		</div>
	</main>
<?php include(ROOT_PATH.'inc/footer.php'); ?>