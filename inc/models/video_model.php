<?php 

//model for video index page
function videos(){
	$videos = [];
	$videos[] = ['title' => 'The Last Battle', 
						'release_date' => '01/28/2014',
						'url' => 'http://www.youtube-nocookie.com/embed/WEsaplY1yco', 
					'description' => "Always on the lookout for dramatic videos to score, I happened upon this trailer for <em>Final Fantasy XIV: A Realm Reborn.</em> While challenging, I had a lot of fun scoring this because of the many changes in action and mood. This ended up being a showcase for my eclectic musical taste---I managed to use orchestral, funk, dubstep, downtempo, and a bit of polytonality."];
	$videos[] = ['title' => 'Marching Orders', 
						'release_date' => '01/05/2014',
						'url' => 'http://www.youtube-nocookie.com/embed/N67DgzuSpEQ', 
						'description' => "While playing around with a plug-in that emulated the old Speak &amp; Spell on a bassline, I was reminded of a military walkie talkie. After adding a boot stomp-like bass drum and some bells, I was well on my way to creating a dark, atmospheric, militaristic track. Shortly after I finished the piece I saw the trailer for <em>Edge of Tomorrow</em> and had a hunch that they would go well together. Indeed they did, as I was able to get everything to line up with only minor cutting. If only every was that easy!"];
	return $videos;
}