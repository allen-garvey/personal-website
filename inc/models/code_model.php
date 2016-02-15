<?php 
//model for code index page

function code_model(){
	$code_model = [];
	
	$code_model['wordpop'] = ['title' => 'Wordpop', 'link' => 'https://github.com/allen-garvey/wordpop-node', 'release_date' => '08/15/2015', 'icon_url' => 'wordpop-icon.png', 
					'blurb' => "I wanted some practice in data visualization and creating infographics, so I created this web app using d3.js and node.js to dynamically display word frequencies in Craigslist listings in scatterplot and bar graph formats."];

	$code_model['h-news'] = ['title' => 'H-News', 'link' => 'http://hnews.co', 'release_date' => '06/28/2015', 'icon_url' => 'h-news-icon.svg', 
					'blurb' => "A redesign of <a href='http://news.ycombinator.com'>Hacker News</a> with an emphasis on mobile first design and usability. Uses the official Hacker News API for story data and jQuery to populate the page with stories using AJAX."];
	
	$code_model['annuncified'] = ['title' => 'Annuncified', 'link' => 'https://github.com/allen-garvey/annuncified', 'release_date' => '05/19/2015', 'icon_url' => 'annuncified-icon.png', 
					'blurb' => "A native Android app that allows you to set ringtones per group and custom notification sounds per contact or group. Additionally, it can automatically silence calls and texts from non-contacts."];
	
	$code_model['android-inflater'] = ['title' => 'Android Inflater', 'link' => CODE_URL.'android-inflater/', 'release_date' => '02/10/2015', 'icon_url' => 'android-inflater-icon.png', 
					'blurb' => "To increase productivity when accessing Android XML layout widgets in Java code, I wrote a Python script automate it for me. That evolved into a web app that uses JavaScript to parse the XML layout files and Bootstrap and Angular to display the results."];
	
	$code_model['font-check'] = ['title' => 'Font Check', 'link' => 'https://github.com/allen-garvey/font-check/', 'release_date' => '02/05/2015', 'icon_url' => 'font-check-icon.png', 
					'blurb' => "To make it easier to compare fonts, I created this native Mac app using Swift to automatically display all the fonts installed on my computer."];
	
	// $code_model['ruby-launcher'] = ['title' => 'Ruby Launcher', 'link' => 'https://github.com/allen-garvey/ruby-launcher/', 'release_date' => '01/12/2015', 'icon_url' => 'ruby-launcher-icon.png', 
	// 				'blurb' => "While learning Ruby, I wanted to easily launch my Ruby programs from the Finder. Similar to the Python Launcher, this native Mac app is a Swift/Cocoa GUI wrapper around AppleScript."];
	
	$code_model['perfect-pitch-trainer'] = ['title' => 'Perfect Pitch Trainer', 'link' => 'https://github.com/allen-garvey/perfect-pitch-trainer', 'release_date' => '12/20/2014', 'icon_url' => 'perfect-pitch-trainer-icon.png', 
					'blurb' => "In music school, I was interested in perfect pitch training, or learning to identify notes without a reference point. This web app(created using JavaScript and Angular) would have been helpful at that time. I also used Apache Cordova to create native iOS and Android versions of the app."];
	
	// $code_model[] = ['title' => 'Shape Calculator', 'link' => CODE_URL.'shape_calculator/', 'release_date' => '09/28/2014', 'icon_url' => '', 'blurb' => ""];
	
	// $code_model['countdowner'] = ['title' => 'Countdowner', 'link' => 'https://github.com/allen-garvey/countdowner/', 'release_date' => '06/23/2014', 'icon_url' => 'countdowner-icon.png', 
	// 				'blurb' => "This app counts down how much time you have left. What started as an iOS app (through the miracle of object-oriented programming and shared Cocoa libraries) was easily ported to become a Mac status bar widget."];
	
	// $code_model['schedule-monster-2'] = ['title' => 'Schedule Monster 2', 'link' => CODE_URL.'schedule-monster-2/', 'release_date' => '06/09/2014', 'icon_url' => 'schedule-monster-icon.png', 
					// 'blurb' => "Watching my Mom manually resizing a grid in Word for her schedule inspired me to make a web app to do that automatically using Javascript. Version two uses PHP to create dynamically sized grids with user selected amounts of days and periods."];
	
	// $code_model['game-of-life'] = ['title' => 'Game of Life', 'link' => CODE_URL.'game-of-life/', 'release_date' => '5/22/2014', 'icon_url' => 'game-of-life-icon.png', 
	// 				'blurb' => "After reading a book on the Game of Life(<a href='http://www.amazon.com/The-Recursive-Universe-Complexity-Scientific/dp/0809252023'>The Recursive Universe</a>) I wanted to create my own version, using JavaScript. I got my first use case for a multi-dimensional array and I found the game itself surprisingly fun despite(or maybe because of) the very simple rules."];
	
	// $code_model['mastermind'] = ['title' => 'Mastermind', 'link' => CODE_URL.'mastermind/', 'release_date' => '04/12/2014', 'icon_url' => 'mastermind-icon.png', 
	// 				'blurb' => "After creating a text-only version of Mastermind using Python, I was interested in creating a graphical version using color and sound. This more challenging version of the game gets more difficult with each solved puzzle."];

	return $code_model;
}
