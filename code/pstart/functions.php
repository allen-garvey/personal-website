<?php 
include_once 'master_bookmark_array.php';
function get_clickable_menu($title, $prefix, $list_name=null){
	if ($list_name === null) {
		$list_name = $prefix . '_contents_list';
	}

	return "	<div class='menu_container'>
				<a href='javascript:void(0);' class='heading'><span class='link_span'><div class='menu_title' id='$prefix" . "_title' onclick=\"show_contents(this)\">$title</div></span></a><div class='menu_contents' id='$prefix" . "_contents'>" . links_list($list_name) .  "</div>
	</div>\n";
}


function links_list($var_name){
	$master_bookmark_array = master_bookmark_array();
	$bookmark_array = $master_bookmark_array[$var_name];
	$link_list = "";

	foreach ($bookmark_array as $bookmark) {
		$description = $bookmark['description'];
		$url = $bookmark['url'];
		$link_list = $link_list . "<li><a href='$url'>$description</a></li>";
	}
	
	return $link_list;
}

function free_days_array(){
	return array('Wed','Thu', 'Fri', 'Sat', 'Sun');
}

function school_days_array(){
	return array('Mon', 'Wed');
}

function lucky_days_of_month_array(){
	return array(1);
}

function school_holidays_array(){
	return array('09/01/2014', '09/02/2014', '10/13/2014', '11/26/2014', '12/25/2014');
}

function is_mobile($user_agent){
	
	$mobile = false;
	if (strpos($user_agent, 'iP') !== false) { //tests for iPad, iPod, and iPhone
		$mobile = true;
	}
	return $mobile;
}

function set_timezone(){
	date_default_timezone_set("America/New_York");
}



?>