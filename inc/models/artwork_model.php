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
										'orientation' => 'portrait',
										'carousel' => [
											['image_url' => ARTWORK_IMAGE_URL. 'personal-comic/' . 'allen-garvey-personal-comic-book.jpg', 'alt' => 'Self-portrait illustration of Allen Garvey as a classic comic book superhero'],
											['image_url' => ARTWORK_IMAGE_URL. 'personal-comic/' . 'allen-garvey-personal-comic-book1.jpg', 'alt' => 'Initial sketch of illustration of Allen Garvey as a classic comic book superhero', 'caption' => '<p>Initial sketch</p>'],
											['image_url' => ARTWORK_IMAGE_URL. 'personal-comic/' . 'allen-garvey-personal-comic-book2.jpg', 'alt' => 'Initial sketch of background for illustration of Allen Garvey as a classic comic book superhero', 'caption' => '<p>Background sketch with completed vector body</p>'],
											['image_url' => ARTWORK_IMAGE_URL. 'personal-comic/' . 'allen-garvey-personal-comic-book3.svg', 'alt' => 'Black and white illustration of Allen Garvey as a classic comic book superhero', 'caption' => '<p>Completed vector trace in black and white</p>']
										]
										];

	$artworks['jk-simmons-illustration'] = ['title' => 'J.K. Simmons Celebrity Illustration', 
										'date_completed' => '04/21/2015',
										'fullsize_extension' => '.png',
										'thumbnail_extension' => '.jpg',
										'alt' => 'Digital illustration of J.K. Simmons by Allen Garvey based on photo by Mark Mann', 
										'description' => "<p>This picture was done for an assignment to create a recognizable illustration of a celebrity. I chose J.K. Simmons because I always enjoy his screen presence and acting skill, and because despite his recent Oscar I feel he is an underappreciated actor. Since he is equally talented at dramatic and comedic acting, early on I decided I wanted to use bold, contrasting colors to convey the wide breadth of characters he's portrayed. I started out by finding a photo that I thought captured his essence, which was taken by <a href='http://www.markmannphoto.com/PORTFOLIOS/A-list-B-list/4/caption'>Mark Mann.</a> I then traced it using tracing paper and made a copy. On the copy I created smooth vector shapes over the soft pencil shading and scanned it in. I then traced the scan in Adobe Illustrator using black and white and shades of gray. Then I selected appropriate Pantone colors and used live paint to color it in.</p>",
										'orientation' => 'portrait',
										'carousel' => [
											['image_url' => ARTWORK_IMAGE_URL. 'jk-simmons/' . 'jk-simmons-illustration.png', 'alt' => 'Digital illustration of J.K. Simmons by Allen Garvey based on photo by Mark Mann'],
											['image_url' => ARTWORK_IMAGE_URL. 'jk-simmons/' . 'jk-simmons-illustration1.jpg', 'alt' => 'Initial sketch for illustration of J.K. Simmons by Allen Garvey', 'caption' => '<p>Initial sketch</p>'],
											['image_url' => ARTWORK_IMAGE_URL. 'jk-simmons/' . 'jk-simmons-illustration2.jpg', 'alt' => 'Refined sketch for illustration of J.K. Simmons by Allen Garvey', 'caption' => '<p>Refined sketch with smoother shapes for vector tracing</p>'],
											['image_url' => ARTWORK_IMAGE_URL. 'jk-simmons/' . 'jk-simmons-illustration3.png', 'alt' => 'Black and white illustration of J.K. Simmons by Allen Garvey', 'caption' => '<p>Completed vector trace in black and white with top of the head added</p>']
										]
										];

	$artworks['bitter-polar-bear'] = ['title' => 'Bitter Polar Bear', 
										'date_completed' => '04/08/2015',
										'fullsize_extension' => '.png',
										'thumbnail_extension' => '.jpg',
										'alt' => 'Digital illustration of a bitter polar bear by Allen Garvey based on photo by Mike Reyfman', 
										'description' => "<p>Inspired by the phrase bitter polar bear which popped up in a random word generator, I wanted to imagine what that would look like. After some exploratory sketches, I decided on an image somewhere between a bear growling and a baby bawling. Starting out with a polar bear photo I found by <a href='http://www.mikereyfman.com/photo/gallery.php?Gallery=Polar-Bears-Svalbard-Spitsbergen-Norway'>Mike Reyfman</a>, I made a series of sketches. I took the better half of one of the sketches, I reversed it in Photoshop to create a symmetrical drawing. I then further refined the sketch, adding more detail and asymmetry. I alternated between scanning in and tracing the sketch in Adobe Illustrator and printing it out and drawing on the printout until I was satisfied with the level of detail. I then used live paint in Illustrator to color the illustration, using tints and shades of Pantone colors.</p>",
										'orientation' => 'portrait',
										'carousel' => [
											['image_url' => ARTWORK_IMAGE_URL. 'bitter-polar-bear/' .'bitter-polar-bear.png', 'alt' => 'Digital illustration of a bitter polar bear by Allen Garvey based on photo by Mike Reyfman'],
											['image_url' => ARTWORK_IMAGE_URL. 'bitter-polar-bear/' .'bitter-polar-bear1.jpg', 'alt' => 'Pen outline of initial sketch of a bitter polar bear by Allen Garvey', 'caption' => '<p>Initial sketch outlined in pen</p>'],
											['image_url' => ARTWORK_IMAGE_URL. 'bitter-polar-bear/' .'bitter-polar-bear2.jpg', 'alt' => 'Sketch copied and reversed to create symmetrical bear drawing by Allen Garvey', 'caption' => '<p>Right half reversed to create symmetrical drawing</p>'],
											['image_url' => ARTWORK_IMAGE_URL. 'bitter-polar-bear/' .'bitter-polar-bear3.jpg', 'alt' => 'Smoother pen outline of bear drawing by Allen Garvey', 'caption' => '<p>Smoother pen outline with asymmetry added</p>'],
											['image_url' => ARTWORK_IMAGE_URL. 'bitter-polar-bear/' .'bitter-polar-bear4.jpg', 'alt' => 'More detail sketched over vector printout of bear illustration by Allen Garvey', 'caption' => '<p>More detail sketched over vector printout</p>']
										
										]
										];
	$artworks['app-icons'] = ['title' => 'App Icons', 
										'date_completed' => '2015&ndash;',
										'thumbnail_extension' => '.png',
										'alt' => 'Thumbnails of assorted app icons by Allen Garvey', 
										'description' => "<p>When creating the icon for my app <a href='" . CODE_URL . "perfect-pitch-trainer/'>Perfect Pitch Trainer,</a> I knew that the icon would have to be based around type, because ear training is an abstract concept. I used the two 'P's from the title as the basis for my icon. I modified the counters to suggest a harp and changed the size of the two letters to suggest a teacher-student relationship. The circle around the letters is meant to suggest that the whole environment is a place for learning, or perhaps that the app is a bubble, creating a safe space for learning.</p>
														<p>For my iPhone and Mac app <a href='https://github.com/allen-garvey/countdowner/'>Countdowner</a>, I had originally thought of using the omega symbol as the icon because it is about looking towards the end of something, since it counts down to a given date. I thought about how time passing is made of discrete seconds like sand in an hourglass, so I decided to represent that by using different sized circles. I left part of the outline unfinished to suggest a few different things: that either time is always slipping away and you can't finish what you have started, or that you still have some time left because the hourglass isn't yet full.</p>
														<p>While designing the logo for my Mac app <a href='https://github.com/allen-garvey/ruby-launcher/'>Ruby Launcher</a>, I wanted to created something that was recognizably connected to the Ruby language logo, without being too derivative. Originally, I decided to simplify it, and create a flat, geometric design. I ended up using a filter that suggests that the icon is made of construction paper, as this really reflects the app's function, which is to run the user's home-made Ruby programs.</p>
														<p>While creating an icon for an Android app about famous athletes, I knew I wanted to incorporate Futurism in some way. I used a Futurist sculpture of a man running as a basis for my design, and simplified it down until it started to look like a capital 'A'. I really wanted the shape to 'pop' and convey strength, boldness and speed, so I used lots of sharp angles and multiple outlines to achieve this.</p>
														<p>When I was designing an icon for an Android app that compares different country's income tax rates, I was initially at a loss for what to do. After much brainstorming, I came up with the idea that the user might be 'investigating' different tax rates, like a detective, and the concept for the icon came together after that. I used the color green and a decorative art-deco like font to allude to the type style on money.</p>
														<p>When I was making an icon for a taxi fare calculator app, I wanted something to evoke friendliness and customer service. I used the color yellow since it is a common color for taxis and chose a rounded sans-serif font and rounded rectangle because their curves convey warmth. The rotated letter 'I' can be construed as the idea of the taxi moving forward, or someone holding out their arm to hail a taxi.</p>",
										'orientation' => 'portrait',
										'carousel' => [
											['image_url' => ARTWORK_IMAGE_URL. 'app-icons/' . 'perfect-pitch-trainer-icon.png', 'alt' => 'Icon for Perfect Pitch Trainer app', 'caption' => "<p>Perfect Pitch Trainer icon</p>"],
											['image_url' => ARTWORK_IMAGE_URL. 'app-icons/' . 'countdowner-icon.png', 'alt' => 'Icon for countdowner app', 'caption' => '<p>Countdowner icon</p>'],
											['image_url' => ARTWORK_IMAGE_URL. 'app-icons/' . 'ruby-launcher-icon.png', 'alt' => 'Icon for Ruby launcher app', 'caption' => '<p>Ruby Launcher icon</p>'],
											['image_url' => ARTWORK_IMAGE_URL. 'app-icons/' . 'favorite-athletes-icon.png', 'alt' => 'Icon for app that shows information about different famous athletes', 'caption' => '<p>Famous Athletes app icon</p>'],
											['image_url' => ARTWORK_IMAGE_URL. 'app-icons/' . 'tax-sleuth-icon.png', 'alt' => 'Icon for tax rate comparison app', 'caption' => "<p>Tax Sleuth icon</p>"],
											['image_url' => ARTWORK_IMAGE_URL. 'app-icons/' . 'taxi-icon.png', 'alt' => 'Icon for Taxi app', 'caption' => '<p>Taxi app icon</p>']
										
										]
										];

	$artworks['think-logo'] = ['title' => 'Think Wordmark', 
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
										'orientation' => 'portrait',
										'carousel' => [
											['image_url' => ARTWORK_IMAGE_URL.'think-logo.svg', 'alt' => 'Wordmark for think, a sophisticated urban tattoo shop, by Allen Garvey'],
											['image_url' => ARTWORK_IMAGE_URL.'think-logo1.jpg', 'alt' => 'Initial explorations for think wordmark', 'caption' => '<p>Initial explorations</p>'],
											['image_url' => ARTWORK_IMAGE_URL.'think-logo2.png', 'alt' => 'Alternate candidates for think logo', 'caption' => '<p>Alternative candidates for the mark</p>']
										]
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