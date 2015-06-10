<?php

function code_homepage_header(){
	$section_header = [];
	$section_header['title'] = 'Code';
	$section_header['header_class'] = 'cyan_background';
	$section_header['body'] = "What I enjoy about programming is that you are only limited by your own imagination. 
		At the same time, there are pragmatic limitations that you have to overcome, as I learned after creating my first real program in Python, when I discovered how hard it would be to deploy to my family and friends. 
		I'm also fascinated by the tension between web and native apps. While the web has almost unlimited reach, it has limited capabilities compared to native apps, while native apps will always be stuck (to an extent) on the platforms they are created for.";
	$section_header['image'] = ['url' => 'portraits/allen-garvey-code-portrait.png', 'alt' => 'Self-portrait of Allen Garvey using character glyphs'];
	return $section_header;
}

function art_homepage_header(){
	$section_header = [];
	$section_header['title'] = 'Artwork';
	$section_header['header_class'] = 'red_background';
	$section_header['body'] = "While studying aesthetics I learned that art can be representative, expressive, embody form, convey the art tradition, or engage your critical thinking. 
								I think all successful art contains these qualities, to some extent. 
								As a graphic designer, I also always try to think about the appropriateness of the visual---for the subject, medium, message and the intended audience.";
	$section_header['image'] = ['url' => 'portraits/allen-garvey-comic-book-portrait.png', 'alt' => 'Digital self-portrait of Allen Garvey as comic book super-hero'];
	return $section_header;
}

function video_homepage_header(){
	$section_header = [];
	$section_header['title'] = 'Video';
	$section_header['header_class'] = 'purple_background';
	$section_header['body'] = "I think that music is an integral part of movies and games, and my favorites always have great soundtracks. What I find most intriguing is how music can enhance drama and continuity, or even create it. Imagine what Star Wars, Inception, Halo, Bioshock, or The Last of Us would be like <em>without</em> music.";
	$section_header['image'] = ['url' => 'portraits/allen-garvey-video-portrait.gif', 'alt' => 'Low-res bitmap photo self-portrait of Allen Garvey'];
	return $section_header;
}

function music_homepage_header(){
	$section_header = [];
	$section_header['title'] = 'Music';
	$section_header['header_class'] = 'blue_background';
	$section_header['body'] = "What I love about music is how it can be anything you want---from very simple to impossibly complex. 
		I like to have a balance between preparation and spontaneity---of being able to have a general plan while still allowing the possibility of happy accidents. 
		I like music that transcends genre, because it enables the listener to be pleasantly surprised since anything can happen";
	$section_header['image'] = ['url' => 'portraits/allen-garvey-video-portrait.gif', 'alt' => 'Low-res bitmap photo self-portrait of Allen Garvey'];
	return $section_header;
}