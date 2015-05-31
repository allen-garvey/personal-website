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

	$artworks['djupivogur-mountain-painting'] = ['title' => 'Djúpivogur Mountain Painting', 
										'date_completed' => '08/06/2013',
										'full_url' => 'djupivogur-mountain-painting.jpg', 
										'thumb_url' => 'djupivogur-mountain-painting-thumbnail.jpg', 
										'alt' => 'Photo of mountain with man and a woman in Djupivogur, Iceland altered to look like a painting by Allen Garvey', 
										'description' => 'I took this photo in Djúpivogur, Iceland. Later I used a Photoshop filter to create an impressionistic, painting effect.'];

	$artworks['red-bay-landscape'] = ['title' => 'Red Bay Overlook', 
										'date_completed' => '07/17/2013',
										'full_url' => 'red-bay-overlook.jpg', 
										'thumb_url' => 'red-bay-overlook-thumbnail.jpg', 
										'alt' => 'Photo of Red Bay, Newfoundland and Labrador from Tracey Hill by Allen Garvey ', 
										'description' => 'Photo of Red Bay, Newfoundland and Labrador from Tracey Hill'];

	$artworks['forth-bridge'] = ['title' => 'Forth Bridge', 
										'date_completed' => '08/21/2012',
										'full_url' => 'forth-bridge.jpg', 
										'thumb_url' => 'forth-bridge-thumbnail.jpg', 
										'alt' => 'Photo of child in front of Forth Bridge in Queensferry, Scotland by Allen Garvey ', 
										'description' => 'Photo of child in front of Forth Bridge in Queensferry, Scotland'];

	return $artworks;
}