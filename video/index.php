<?php 
	require_once('../inc/config.php');
	include(ROOT_PATH.'inc/head.php');
	$title = 'video'; //for nav-bar active class

	//video model
	$videos = array();
	$videos[] = array('url' => 'http://www.youtube-nocookie.com/embed/WEsaplY1yco', 'description' => 'A re-scoring of a clip from Final Fantasy XIV. This dramatic scene was both fun challenging to score. 
			It ended up being a showcase for my eclectic musical taste&#8212;I managed to use orchestral, funk, dubstep, downtempo, and a little polytonality all in the same track.');
	$videos[] = array('url' => 'http://www.youtube-nocookie.com/embed/N67DgzuSpEQ', 'description' => 'A re-scoring of the trailer for "The Edge of Tomorrow". 
			This trailer was a perfect fit both subject and lengthwise for a dark, atmospheric, militaristic track I had already written, and so I was was able to fit them together with only slight modifications.');
?>
<header class='jumbotron section_header'>
	<?php include(ROOT_PATH.'inc/navbar.php'); ?>
	<div class='container'>
		<h1 class='section_header'>Video</h1>
		<div class='row'>
			<div class='col-sm-6'>
				<p class='section_header'>
					Movie and video game scoring fascinates me because of its rare and challenging combination of music composition, technology, performance, sound design, sound engineering and music production.
					Here&#8217;s a selection of some of the clips I&#8217;ve scored.
				</p>
			</div>
		</div>
	</div>
</header>
<main class='container'>
	<?php 
		foreach ($videos as $video) {
			echo "<div class='video_container'>" . "<iframe class='youtube' src='$video[url]' allowfullscreen></iframe>" . "<p>$video[description]</p>" . "</div>";
		}
	 ?>
</main>
<?php include(ROOT_PATH.'inc/footer.php'); ?>