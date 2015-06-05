<?php
//used to format text pretty for html display
class TextFormatter{

	//replaces dumb quotes with smart quotes, and -- and --- with en and em dash character codes, respectively
	public static function format_html_text($unformatted_text){
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

	//formats text nodes in string of html but uses xpath to preserve html elements and attributes (such as links)
	//optional argument is function used to format all text nodes in the supplied html string
	public static function format_html_text_xpath($unformatted_text, $format_function=null){
		$format_function = !isset($format_function) ? function($text){return TextFormatter::format_html_text($text);} : $format_function;
		libxml_use_internal_errors(TRUE); //suppresses errors in non-wellformed input
		$dom = new DOMDocument;
		$dom->loadHTML($unformatted_text, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD); //flag so no doctype or <html> wrapper added
		$xp = new DOMXPath($dom);
		$xpath = '//*/text()'; //selects all text nodes in document

		foreach($xp->query($xpath) as $node) {
			//edits the text nodes
			$node->nodeValue = $format_function($node->nodeValue);
		}

		return htmlspecialchars_decode($dom->saveHTML()); //htmlspecialchars_decode required so that ampersands aren't encoded, even though they are already in a character entity
	}


}

