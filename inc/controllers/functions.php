<?php
//replaces dumb quotes with smart quotes, and -- and --- with en and em dash character codes, respectively
function format_html_text($unformatted_text){
	$left_smart_single_quote = '&#8216;';
	$right_smart_single_quote = '&#8217;';
	$left_smart_double_quote = '&#8220;';
	$right_smart_double_quote = '&#8221;';
	$en_dash = '&#8211;';
	$em_dash = '&#8212;';

	$unformatted_text = preg_replace('/\\B"\\b/', $left_smart_double_quote, $unformatted_text);
	$unformatted_text = str_replace('"', $right_smart_double_quote, $unformatted_text);
	$unformatted_text = preg_replace('/\\B\'\\b/', $left_smart_single_quote, $unformatted_text);
	$unformatted_text = str_replace("'", $right_smart_single_quote, $unformatted_text);

	$formatted_text = str_replace('---', $em_dash, $unformatted_text);
	$unformatted_text = str_replace('--', $en_dash, $unformatted_text);
	return $formatted_text;
}




