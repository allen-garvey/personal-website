<?php
//used to format text pretty for html display
class TextFormatter{
	//*******************Refactor in the future to eliminate redundant methods
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

		$unformatted_text = str_replace('---', $em_dash, $unformatted_text);
		$formatted_text = str_replace('--', $en_dash, $unformatted_text);
		return $formatted_text;
	}

	public static function unicode_char_to_php($js_unicode){
		return json_decode('"'.$js_unicode.'"');
	}

	public static function format_html_text_unicode($unformatted_text){
		$left_smart_single_quote = TextFormatter::unicode_char_to_php('\u2018');
		$right_smart_single_quote = TextFormatter::unicode_char_to_php('\u2019');
		$left_smart_double_quote = TextFormatter::unicode_char_to_php('\u201C');
		$right_smart_double_quote = TextFormatter::unicode_char_to_php('\u201D');
		$en_dash = TextFormatter::unicode_char_to_php('\u2013');
		$em_dash = TextFormatter::unicode_char_to_php('\u2014');

		$unformatted_text = preg_replace('/\\B"\\b/', $left_smart_double_quote, $unformatted_text);
		$unformatted_text = str_replace('"', $right_smart_double_quote, $unformatted_text);
		$unformatted_text = preg_replace('/\\B\'\\b/', $left_smart_single_quote, $unformatted_text);
		$unformatted_text = str_replace("'", $right_smart_single_quote, $unformatted_text);

		$unformatted_text = str_replace('---', $em_dash, $unformatted_text);
		$formatted_text = str_replace('--', $en_dash, $unformatted_text);
		return $formatted_text;
	}



	//formats text nodes in string of html but uses xpath to preserve html elements and attributes (such as links)
	//optional argument is function used to format all text nodes in the supplied html string
	public static function format_html_text_xpath($unformatted_text, $format_function=null){
		if($unformatted_text === ''){ //empty strings throw errors
			return '';
		}
		$format_function = isset($format_function) ? $format_function : function($text){return TextFormatter::format_html_text_unicode($text);};
		libxml_use_internal_errors(TRUE); //suppresses errors in non-wellformed input
		$dom = new DOMDocument;
		//add xml encoding to preserve html character entities
		$dom->loadHTML("<?xml encoding='UTF-8'><div>$unformatted_text</div>", LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD); //flag so no doctype or <html> wrapper added //div required to be added so that a <p> element isn't added around the whole document
		// remove xml encoding
		foreach ($dom->childNodes as $item){
    		if ($item->nodeType == XML_PI_NODE){
        		$dom->removeChild($item); // remove hack
        	}
    	}
		$dom->encoding = 'UTF-8'; // insert proper
		//added div element is now subtracted from the dom
	    $container = $dom->getElementsByTagName('div')->item(0);
	    $container = $container->parentNode->removeChild($container);
	    while ($container->firstChild) {
	        $dom->appendChild($container->firstChild);
	    }

		$xp = new DOMXPath($dom);
		$xpath = '//text()'; //selects all text nodes in document

		foreach($xp->query($xpath) as $node) {
			//edits the text nodes
			$node->nodeValue = $format_function($node->nodeValue);
		}

		return $dom->saveHTML();
	}


}

