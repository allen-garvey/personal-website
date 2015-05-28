<?php 
//model for code index page

function code_model(){
	$code_model = [];
	$code_model[] = ['title' => 'Annuncified', 'link' => 'https://github.com/allen-garvey/annuncified', 'release_date' => '05/19/2015', 'icon_url' => 'annuncified-icon.png'];
	$code_model[] = ['title' => 'Android Inflater', 'link' => CODE_URL.'android-inflater/', 'release_date' => '02/10/2015', 'icon_url' => 'android-inflater-icon.png'];
	$code_model[] = ['title' => 'Font Check', 'link' => 'https://github.com/allen-garvey/font-check/', 'release_date' => '02/05/2015', 'icon_url' => 'font-check-icon.png'];
	$code_model[] = ['title' => 'Ruby Launcher', 'link' => 'https://github.com/allen-garvey/ruby-launcher/', 'release_date' => '01/12/2015', 'icon_url' => 'ruby-launcher-icon.png'];
	$code_model[] = ['title' => 'Perfect Pitch Trainer', 'link' => CODE_URL.'perfect_pitch/', 'release_date' => '12/20/2014', 'icon_url' => 'perfect-pitch-trainer-icon.png'];
	// $code_model[] = ['title' => 'Shape Calculator', 'link' => CODE_URL.'shape_calculator/', 'release_date' => '09/28/2014', 'icon_url' => ''];
	$code_model[] = ['title' => 'Countdowner', 'link' => 'https://github.com/allen-garvey/countdowner/', 'release_date' => '06/23/2014', 'icon_url' => 'countdowner-icon.png'];
	$code_model[] = ['title' => 'Schedule Monster 2', 'link' => CODE_URL.'schedule_monster2/', 'release_date' => '06/09/2014', 'icon_url' => 'http://assets-s3.usmagazine.com/uploads/assets/celebrities/238-brad-pitt/1250530894_brad_pitt_290x402.jpg'];
	$code_model[] = ['title' => 'Game of Life', 'link' => CODE_URL.'game_of_life/', 'release_date' => '5/22/2014', 'icon_url' => 'game-of-life-icon.png'];
	$code_model[] = ['title' => 'Mastermind', 'link' => CODE_URL.'mastermind/', 'release_date' => '04/12/2014', 'icon_url' => 'mastermind-icon.png'];

	return $code_model;
}
