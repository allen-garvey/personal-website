<?php 
	require_once('../inc/config.php');
	include(ROOT_PATH.'inc/views/head.php');
	include_once(ROOT_PATH.'inc/controllers/functions.php');
	include_once(ROOT_PATH.'inc/models/video_model.php');
	$title = 'video'; //for nav-bar active class

	//video model
	$videos = videos();

	//for section header jumbotron
	$section_header = [];
	$section_header['title'] = 'Video';
	$section_header['header_class'] = 'purple_background';
	$section_header['body'] = format_html_text("Movie and video game scoring fascinates me because of its rare and challenging combination of music composition, technology, performance, sound design, sound engineering and music production.
					Here's a selection of some of the clips I've scored.");
	$section_header['image'] = ['url' => 'portraits/allen-garvey-video-portrait.gif', 'alt' => 'Low-res bitmap photo self-portrait of Allen Garvey'];
	include(ROOT_PATH.'inc/views/section_header.php');

?>

<main class='container'>
	<?php 
		foreach ($videos as $video) {
			echo "<div class='video_container'>" . "<iframe class='youtube' src='$video[url]' allowfullscreen></iframe>" . "<p>".format_html_text($video['description'])."</p>" . "</div>";
		}
	 ?>
</main>
<?php include(ROOT_PATH.'inc/views/footer.php'); ?>