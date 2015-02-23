<?php 
	require_once('../inc/config.php');
	include(ROOT_PATH.'inc/head.php');
	$title = 'video'; //for nav-bar active class
?>
<body>
	<?php include(ROOT_PATH.'inc/navbar.php'); ?>
	<main class='container main'>
		<div class='video_container'>
			<iframe width="100%" height="360" src="http://www.youtube-nocookie.com/embed/WEsaplY1yco" frameborder="0" allowfullscreen></iframe>
			<p>A re-scoring of a clip from Final Fantasy XIV. Features a mix of epic orchestral, funk and electronic musical styles.</p>
		</div>
		<div class='video_container'>
			<iframe width="100%" height="360" src="http://www.youtube-nocookie.com/embed/N67DgzuSpEQ" frameborder="0" allowfullscreen></iframe>
			<p>A re-scoring of the trailer for "The Edge of Tomorrow". Features a mix of electronic, soundscape/sound design and orchestral styles.</p>
		</div>
	</main>
<?php include(ROOT_PATH.'inc/footer.php'); ?>