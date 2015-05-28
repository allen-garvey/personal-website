<?php
function artworks(){
	//key also used to generate get url
	$artworks = [];
	$artworks['personal-comic-book'] = ['title' => 'Personal Comic Book Cover', 
										'date_completed' => '05/16/2015',
										'full_url' => 'allen-garvey-personal-comic-book.jpg', 
										'thumb_url' => 'allen-garvey-personal-comic-book-thumbnail.jpg', 
										'alt' => 'Self-portrait illustration of Allen Garvey as a classic comic book superhero', 
										'description' => 'Final project for digital illustration'];

	$artworks['jk-simmons-illustration'] = ['title' => 'JK Simmons Celebrity Illustration', 
										'date_completed' => '04/21/2015',
										'full_url' => 'allen-garvey-jk-simmons-illustration.png', 
										'thumb_url' => 'allen-garvey-jk-simmons-illustration-thumbnail.jpg', 
										'alt' => 'Digital illustration of JK Simmons by Allen Garvey based on photo by Mark Mann', 
										'description' => 'Illustration of JK Simmons based on a photo by Mark Mann'];

	$artworks['bitter-polar-bear'] = ['title' => 'Bitter Polar Bear', 
										'date_completed' => '04/08/2015',
										'full_url' => 'allen-garvey-bitter-polar-bear.png', 
										'thumb_url' => 'allen-garvey-bitter-polar-bear-thumbnail.jpg', 
										'alt' => 'Digital illustration of a bitter polar bear by Allen Garvey based on photo by Mike Reyfman', 
										'description' => 'Illustration of a bitter polar bear based on a photo by Mike Reyfman'];	

	return $artworks;
}