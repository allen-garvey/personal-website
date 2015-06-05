<?php 
//model for code index page

function code_model(){
	$code_model = [];
	$code_model[] = ['title' => 'Annuncified', 'link' => 'https://github.com/allen-garvey/annuncified', 'release_date' => '05/19/2015', 'icon_url' => 'annuncified-icon.png', 
					'blurb' => "Irritated that I couldn't set custom notification for texts, I created this native Android app. Additionally, it can automatically silence texts from people not in your contacts."];
	
	$code_model[] = ['title' => 'Android Inflater', 'link' => CODE_URL.'android-inflater/', 'release_date' => '02/10/2015', 'icon_url' => 'android-inflater-icon.png', 
					'blurb' => "To reduce the amount of time spent on writing repetitive, boilerplate code to access Android XML layout widgets in Java code, I wrote a simple Python script to do it for me from Java declarations. That morphed into a full web app that uses Javascript to parse the XML layout files and Bootstrap and Angular to display the results."];
	
	$code_model[] = ['title' => 'Font Check', 'link' => 'https://github.com/allen-garvey/font-check/', 'release_date' => '02/05/2015', 'icon_url' => 'font-check-icon.png', 
					'blurb' => "When I realized how much time I was spending comparing fonts on my computer while designing, I created this native Mac app using Swift to automatically display all my fonts for me."];
	
	$code_model[] = ['title' => 'Ruby Launcher', 'link' => 'https://github.com/allen-garvey/ruby-launcher/', 'release_date' => '01/12/2015', 'icon_url' => 'ruby-launcher-icon.png', 
					'blurb' => "While learning Ruby, I something to easily launch my Ruby programs from the Finder. Based on the Python Launcher, I created a native Mac app using a Swift/Cocoa GUI wrapper around AppleScript."];
	
	$code_model[] = ['title' => 'Perfect Pitch Trainer', 'link' => CODE_URL.'perfect_pitch/', 'release_date' => '12/20/2014', 'icon_url' => 'perfect-pitch-trainer-icon.png', 
					'blurb' => "In music school, I was interested for a wile in perfect pitch training, or traing to identify notes without a reference point. This is a web app(created using Javascript and Angular) would have been helpful at that time. I also used Apache Cordova to create native iOS and Android versions of the app."];
	
	// $code_model[] = ['title' => 'Shape Calculator', 'link' => CODE_URL.'shape_calculator/', 'release_date' => '09/28/2014', 'icon_url' => '', 'blurb' => ""];
	
	$code_model[] = ['title' => 'Countdowner', 'link' => 'https://github.com/allen-garvey/countdowner/', 'release_date' => '06/23/2014', 'icon_url' => 'countdowner-icon.png', 
					'blurb' => "While stuck on a ship I really wanted to get off, I was motivated to write an app to countdown the time. What started as an iOS app, through the miracle of object-oriented programming and shared iOS and Mac libraries, was easily ported to become a Mac status bar widget."];
	
	$code_model[] = ['title' => 'Schedule Monster 2', 'link' => CODE_URL.'schedule_monster2/', 'release_date' => '06/09/2014', 'icon_url' => 'schedule-monster-icon.png', 
					'blurb' => "Watching my Mom manually resizing a grid in Word for her schedule inspired me to make a web app to do that automatically using Javascript. Version two uses PHP to create dynamically sized grids with user selected amounts of days and periods."];
	
	$code_model[] = ['title' => 'Game of Life', 'link' => CODE_URL.'game_of_life/', 'release_date' => '5/22/2014', 'icon_url' => 'game-of-life-icon.png', 
					'blurb' => "After reading a book on the Game of Life(<a href='http://www.amazon.com/The-Recursive-Universe-Complexity-Scientific/dp/0809252023'>The Recursive Universe</a>) I wanted to create my own version, using Javascript. I got my first use case for a multi-dimensional array and I found the game itself surprisingly fun despite(or maybe because of) the very simple rules."];
	
	$code_model[] = ['title' => 'Mastermind', 'link' => CODE_URL.'mastermind/', 'release_date' => '04/12/2014', 'icon_url' => 'mastermind-icon.png', 
					'blurb' => "After creating a text-only version of Mastermind using Python, I was interested in creating a graphical version using color and sound. This more challenging version of the game gets more difficult with each solved puzzle."];

	return $code_model;
}
