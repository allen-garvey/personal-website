<?php 
	require_once('../inc/config.php');
	include_once(ROOT_PATH.'inc/controllers/text_formatter.php');
	include(ROOT_PATH.'inc/views/head.php');
	include_once(ROOT_PATH.'inc/models/code_model.php');
	$title = 'code'; //for nav-bar active class
	$code_model = code_model();

	$items_per_row = 4;

	//for section header jumbotron
	$section_header = [];
	$section_header['title'] = 'Code';
	$section_header['header_class'] = 'cyan_background';
	$section_header['body'] = "What I enjoy about programming is that you are only limited by your own imagination. 
		At the same time, there are pragmatic limitations that you have to overcome, as I learned after creating my first real program in Python, when I discovered how hard it would be to deploy to my family and friends. 
		I'm also fascinated by the tension between web and native apps. While the web has almost unlimited reach, it has limited capabilities compared to native apps, while native apps will always be stuck (to an extent) on the platforms they are created for.";
	$section_header['image'] = ['url' => 'portraits/allen-garvey-code-portrait.png', 'alt' => 'Self-portrait of Allen Garvey using character glyphs'];
	include(ROOT_PATH.'inc/views/section_header.php');

?>

<main class='container'>
	<aside class='bottom_margin'><sup>*</sup> indicates link to github</aside>
	<div class='row'>
		<?php
			$i = 0;
			foreach ($code_model as $entry) {
				$icon_url = IMAGE_URL. 'code-icons/' . $entry['icon_url'];
				$alt = $entry['title'] . ' icon';
				$release_date = DateTime::createFromFormat('m/d/Y', $entry['release_date']);
				$formatted_release_date = $release_date->format('m/d/y');
				
				if($i > 0 && $i % $items_per_row === 0){
					echo "</div><div class='row top_buffer_sm'>";
				}
				echo "<div class='col-md-3 bottom_margin_sm'><a href=$entry[link] class='code_link explode'><h3>$entry[title]</h3><figure><img src='$icon_url' alt='$alt' /></figure></a><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><small class='italic'>$formatted_release_date</small></div>";
				
				$i++;
			}
		?>
	</div>
</main>
<?php include(ROOT_PATH.'inc/views/footer.php'); ?>