<?php 
	require_once('../inc/config.php');
	include_once(ROOT_PATH.'inc/controllers/text_formatter.php');
	include(ROOT_PATH.'inc/views/head.php');
	include_once(ROOT_PATH.'inc/models/code_model.php');
	include_once(ROOT_PATH.'inc/models/section_homepages_model.php');
	$title = 'code'; //for nav-bar active class
	$code_model = code_model();

	$items_per_row = 4;

	//for section header jumbotron
	$section_header = code_homepage_header();
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
				echo "<div class='col-md-3 bottom_margin_sm_only'><a href=$entry[link] class='code_link explode'><h3>$entry[title]</h3><figure><img src='$icon_url' alt='$alt' /></figure></a><p>".
				TextFormatter::format_html_text_xpath($entry['blurb'])
				."</p><small class='italic'>$formatted_release_date</small></div>";
				
				$i++;
			}
		?>
	</div>
</main>
<?php include(ROOT_PATH.'inc/views/footer.php'); ?>