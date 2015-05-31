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
	$section_header['body'] = format_html_text("I think that music is an integral part of movies and games, and my favorites always have great soundtracks. What I find most intriguing is how music can enhance drama and continuity, or even create it. Imagine what Star Wars, Inception, Halo, Bioshock, or The Last of Us would be like <em>without</em> music.");
	$section_header['image'] = ['url' => 'portraits/allen-garvey-video-portrait.gif', 'alt' => 'Low-res bitmap photo self-portrait of Allen Garvey'];
	include(ROOT_PATH.'inc/views/section_header.php');

?>

<main class='container'>
	<?php 
		foreach ($videos as $video) {
			$release_date = DateTime::createFromFormat('m/d/Y', $video['release_date']);
			$formatted_release_date = $release_date->format('m/d/y');
			echo "<section class='video_container'>" . "<h2>$video[title]</h2>" . "<iframe class='youtube' src='$video[url]' allowfullscreen></iframe>" . "<p>".format_html_text($video['description'])."</p>" ."<small class='italic'>$formatted_release_date</small>" . "</section>";
		}
	 ?>
</main>
<?php include(ROOT_PATH.'inc/views/footer.php'); ?>