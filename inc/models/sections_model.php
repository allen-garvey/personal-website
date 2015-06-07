<?php

function sections_model(){
	$sections = [];
	$sections['Code'] = ['title' => 'Code', 'icon_url' => 'icons/code-icon.svg', 'link' => CODE_URL, 'description' => 'Mac, iOS, Android and web applications'];
	$sections['Artwork'] = ['title' => 'Artwork', 'icon_url' => 'icons/artwork-icon.svg', 'link' => ARTWORK_URL, 'description' => 'Photos, illustrations and digital art'];
	$sections['Music'] = ['title' => 'Music', 'icon_url' => 'icons/music-icon.svg', 'link' => MUSIC_URL, 'description' => 'Compositions and arrangements in jazz, classical and electronic styles'];
	$sections['Video'] = ['title' => 'Video', 'icon_url' => 'icons/video-icon.svg', 'link' => VIDEO_URL, 'description' => 'Game and movie trailers, rescored with original music'];

	return $sections;
}