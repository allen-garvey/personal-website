<?php
function get_stylesheets(){
	$stylesheets = 
		"<link rel='stylesheet' type='text/css' href='http://www.allengarvey.com/style.css'>" . 
		"<link href='http://fonts.googleapis.com/css?family=Sorts+Mill+Goudy' rel='stylesheet' type='text/css'>" .
		"<link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>";

	return $stylesheets;
}

function get_metadata(){
	$metadata = 
		"<meta name='Description' content='Personal web page of bass player and composer Allen Garvey'>" .
		"<meta name='Keywords' content='music, musician, bass, electric bass, acoustic bass, composer, cruise ship, cruise ship musician, film music'>".
		"<meta name=viewport content='width=device-width, initial-scale=1'>";

	return $metadata;
}

function get_titlebar(){
	$titlebar = "<h1 class='title'>" . 
		"<div class='menu_box'><a class='title' href='http://www.allengarvey.com/index.php'>Home</a></div>" . 
		"<div class='menu_box'><a class='title' href='http://www.allengarvey.com/interactive/index.php#center'>Interactive</a></div>" .
		"<div class='menu_box'><a class='title' href='http://www.allengarvey.com/music.php#center'>Music</a></div>" .
		"<div class='menu_box'><a class='title' href='http://www.allengarvey.com/video.php#center'>Video</a></div>" .
		"<div class='menu_box'><a class='title' href='http://www.allengarvey.com/contact.php#center'>Contact</a></div>" .
		"</h1>";

	return $titlebar;
}

function get_title(){
	return "Allen Garvey | Musician";
}





?>