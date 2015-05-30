<?php 

//model for video index page
function videos(){
	$videos = array();
	$videos[] = array('title' => 'The Last Battle', 
						'release_date' => '01/28/2014',
						'url' => 'http://www.youtube-nocookie.com/embed/WEsaplY1yco', 
					'description' => 'A re-scoring of a clip from Final Fantasy XIV. This dramatic scene was both fun challenging to score. 
			It ended up being a showcase for my eclectic musical taste---I managed to use orchestral, funk, dubstep, downtempo, and a little polytonality all in the same track.');
	$videos[] = array('title' => 'Marching Orders', 
						'release_date' => '01/05/2014',
						'url' => 'http://www.youtube-nocookie.com/embed/N67DgzuSpEQ', 
						'description' => 'A re-scoring of the trailer for "The Edge of Tomorrow". 
			This trailer was a perfect fit both subject and lengthwise for a dark, atmospheric, militaristic track I had already written, and so I was was able to fit them together with only slight modifications.');
	return $videos;
}