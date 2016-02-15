<?php 
	require_once('../../inc/config.php');
	include(INC_PATH.'views/head.php');
	include_once(INC_PATH.'controllers/text_formatter.php');
	include_once(INC_PATH.'models/video_model.php');
	include_once(INC_PATH.'models/section_homepages_model.php');
	$title = 'video'; //for nav-bar active class

	//video model
	$videos = videos();

	//for section header jumbotron
	$section_header = video_homepage_header();
	include(INC_PATH.'views/section_header.php');

?>

<main class='container'>
	<?php 
		foreach ($videos as $video) {
			$release_date = DateTime::createFromFormat('m/d/Y', $video['release_date']);
			$formatted_release_date = $release_date->format('m/d/y');
			echo "<section class='video_container'>" . "<h2>$video[title]</h2>" . "<iframe class='youtube' src='$video[url]' allowfullscreen></iframe>" . "<p>".TextFormatter::format_html_text_xpath($video['description'])."</p>" ."<small class='italic'>$formatted_release_date</small>" . "</section>";
		}
	 ?>
</main>
<?php include(INC_PATH.'views/footer.php'); ?>