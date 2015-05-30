<?php

function sections_model(){
	$sections = [];
	$sections['Code'] = ['title' => 'Code', 'icon_url' => 'icons/code-icon.png', 'link' => CODE_URL, 'description' => 'Websites, web applications and Mac, iOS and Android apps'];
	$sections['Artwork'] = ['title' => 'Artwork', 'icon_url' => 'icons/art-icon.png', 'link' => ARTWORK_URL, 'description' => 'Photos, illustrations and digital art'];
	$sections['Music'] = ['title' => 'Music', 'icon_url' => 'icons/music-icon.png', 'link' => MUSIC_URL, 'description' => 'Compositions and arrangements in jazz, classical, electronic and eclectic styles'];
	$sections['Video'] = ['title' => 'Video', 'icon_url' => 'icons/video-icon.png', 'link' => VIDEO_URL, 'description' => 'Game and movie trailers, rescored with original music'];

	return $sections;
}