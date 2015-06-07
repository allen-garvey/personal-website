<?php
//unless otherwise specified, fullsize is assumed to be in images/artwork/$get_url . $fullsize_extension and 
//thumbnails at images/artwork/thumbnails/$get_url . '-thumbnail' . $fullsize_extension
//add 'full_url' and 'thumb_url' keys if you don't want this behavior
function artworks(){
	//key also used to generate get url
	$artworks = [];
	$artworks['personal-comic-book'] = ['title' => 'Personal Comic Book Cover', 
										'date_completed' => '05/16/2015',
										'fullsize_extension' => '.jpg',
										'thumbnail_extension' => '.jpg',
										'full_url' => ARTWORK_IMAGE_URL.'allen-garvey-personal-comic-book.jpg', 
										'thumb_url' => ARTWORK_IMAGE_THUMBNAIL_URL.'allen-garvey-personal-comic-book-thumbnail.jpg', 
										'alt' => 'Self-portrait illustration of Allen Garvey as a classic comic book superhero', 
										'description' => "<p>This illustration was created for a project in which we had to create an authentic-looking gold or silver-age comic book cover starring ourselves.
This was a challenge both because of the historical accuracy required in the art style, type, color choices and layout, and because the simple art style of the time period leaves no place to hide errors. It was a further challenge for me because the comics I am both most familiar with and prefer the style of are the bronze age comics from the 80's and early 90's. While I do not think I completely nailed the historical accuracy part of the assignment, I was pleased with the final result and thought I did better adapting to the simpler style than I envisioned I would.</p>",
										'orientation' => 'portrait'
										];

	$artworks['jk-simmons-illustration'] = ['title' => 'J.K. Simmons Celebrity Illustration', 
										'date_completed' => '04/21/2015',
										'fullsize_extension' => '.png',
										'thumbnail_extension' => '.jpg',
										'alt' => 'Digital illustration of J.K. Simmons by Allen Garvey based on photo by Mark Mann', 
										'description' => "<p>This picture was done for an assignment to create a recognizable illustration of a celebrity. I chose J.K. Simmons because I always enjoy his screen presence and acting skill, and because despite his recent Oscar I feel he is an underappreciated actor. Since he is equally talented at dramatic and comedic acting, early on I decided I wanted to use bold, contrasting colors to convey the wide breadth of characters he's portrayed. I started out by finding a photo that I thought captured his essence, which was taken by <a href='http://www.markmannphoto.com'>Mark Mann.</a> I then traced it using tracing paper and made a copy. On the copy I created smooth vector shapes over the soft pencil shading and scanned it in. I then traced the scan in Adobe Illustrator using black and white and shades of gray. Then I selected appropriate Pantone colors and used live paint to color it in.</p>",
										'orientation' => 'portrait'
										];

	$artworks['bitter-polar-bear'] = ['title' => 'Bitter Polar Bear', 
										'date_completed' => '04/08/2015',
										'fullsize_extension' => '.png',
										'thumbnail_extension' => '.jpg',
										'alt' => 'Digital illustration of a bitter polar bear by Allen Garvey based on photo by Mike Reyfman', 
										'description' => "<p>Inspired by the phrase bitter polar bear which popped up in a random word generator, I wanted to imagine what that would look like. After some exploratory sketches, I decided on an image somewhere between a bear growling and a baby bawling. Starting out with a polar bear photo I found by <a href='http://www.mikereyfman.com'>Mike Reyfman</a>, I made a series of sketches. I took the better half of one of the sketches, I reversed it in Photoshop to create a symmetrical drawing. I then further refined the sketch, adding more detail and asymmetry. I alternated between scanning in and tracing the sketch in Adobe Illustrator and printing it out and drawing on the printout until I was satisfied with the level of detail. I then used live paint in Illustrator to color the illustration, using tints and shades of Pantone colors.</p>",
										'orientation' => 'portrait'
										];

	$artworks['think-logo'] = ['title' => 'Think Logo', 
										'date_completed' => '12/14/2014',
										'fullsize_extension' => '.svg',
										'thumbnail_extension' => '.svg', 
										'full_url' => ARTWORK_IMAGE_URL.'think-logo.svg', 
										'thumb_url' => ARTWORK_IMAGE_URL.'think-logo.svg', 
										'alt' => 'Wordmark for think, a sophisticated urban tattoo shop, by Allen Garvey', 
										'description' => "<p>The goal of this project was to create a wordmark to represent thINK, a fictional sophisticated urban tattoo shop targeting the general public.</p>
														<p>I started out on the computer to get an idea of the shapes of the letterforms. I was drawn to Didot, because I think that modern serif fonts have connotations of sophistication. I also thought about using typographic symbols to use as a dot for the letter I as a distinctive mark. I thought the Helvetica asterisk was both simple and paired well with Didot and looked like a simplified human body, which is what tattooing is all about.
														After much sketching, I decided to use a slab serif font for the 'INK' part of the logo as a contrast to the thin Didot based 'th'.</p>
														<p>The next part of the process was to translate my sketches in Adobe Illustrator. I started out with the letters th in Didot and the letters INK in the font Rockwell. I then proceeded to alter the letterforms to conform to my sketches. I decided to use different shades of midnight blue color to the letters 'INK' in increasing value. While I wanted the logo to be mostly black and white due to my feeling that that looks more sophisticated, I felt that the slight color added subtlety to the logo, as well as having connotations of pen or tattoo ink.</p>
														<p>After looking over my final design, I think the ascending letter heights draw your eye from left to right, and the middle asterisk adds balance to the design, as well as creating possibilities for it to be used as a stand-alone mark or symbol. The uneven letter heights also create a sense of interest and make the logo more distinctive.</p>",
										'orientation' => 'portrait'
										];

	$artworks['djupivogur-mountain-scene'] = ['title' => 'Djúpivogur Mountain Scene', 
										'date_completed' => '08/06/2013',
										'fullsize_extension' => '.jpg',
										'thumbnail_extension' => '.jpg', 
										'alt' => 'Photo of mountain with a man and a woman in the foreground in Djupivogur, Iceland altered to look like a painting by Allen Garvey', 
										'description' => "<p>While hiking through the hills of Djúpivogur, Iceland, there was a couple ahead of me that kept ending up in my photos. Serendipitously, the bright colors in their clothes contrasted beautifully with the surrounding landscape. I then used Photoshop's palette knife filter to create an impressionistic, painted effect.</p>",
										'orientation' => 'landscape'
										];

	$artworks['red-bay-overlook'] = ['title' => 'Red Bay Overlook', 
										'date_completed' => '07/17/2013',
										'fullsize_extension' => '.jpg',
										'thumbnail_extension' => '.jpg', 
										'alt' => 'Photo of Red Bay, Newfoundland and Labrador from Tracey Hill by Allen Garvey ', 
										'description' => "<p>While taking a walk around Red Bay, Newfoundland and Labrador, the flies were fierce---constantly flying in your face and biting all exposed skin. Fortunately, they disappeared by the time I reached the top of Tracey Hill, and the view was definitely worth the difficulty in getting there. Towards the middle of the photo you can see the ship's tender, as well as the large iceberg shaped like a snail, sitting in the harbor despite it being the middle of July.</p>",
										'orientation' => 'landscape'
										];

	$artworks['forth-bridge'] = ['title' => 'Forth Bridge', 
										'date_completed' => '08/21/2012',
										'fullsize_extension' => '.jpg',
										'thumbnail_extension' => '.jpg',
										'alt' => 'Photo of a child in front of Forth Bridge in Queensferry, Scotland by Allen Garvey ', 
										'description' => "<p>While waiting for the tender back to the ship in Queensferry, Scotland, a little boy wondered to the end of the dock facing the Forth Bridge. Sensing a great shot, I took the photo. Later on, I thought that making the picture black and white really emphasized the composition, as will as the theme of contrasting human fragility against a large, monolithic structure.</p>",
										'orientation' => 'landscape'
										];

	return $artworks;
}