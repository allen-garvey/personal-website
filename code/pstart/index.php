<?php 
include_once 'functions.php';

set_timezone();
$current_timestamp = time();
$day_of_week = date('D', $current_timestamp);
$day_of_month = date('d', $current_timestamp);

$user_agent = $_SERVER['HTTP_USER_AGENT'];
$mobile = is_mobile($user_agent);

$free_days = free_days_array();
$school_days = school_days_array();

?>
<html>
<head><title>PStart</title>
<link rel="stylesheet" type="text/css" href="productivity_startpage.css">
<meta name=viewport content='width=device-width, initial-scale=1'>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" async></script>
<script type="text/javascript" src="scripts/show_contents.js" async></script>
</head>
<body>
	<div id='center'>
		<?php
			echo get_clickable_menu('E', 'e');
			echo get_clickable_menu('L', 'l', 'l_contents_list_mobile');
			if(!$mobile){
				echo get_clickable_menu('R', 'r');
			}

			echo get_clickable_menu('C', 'c');
		

			if(!$mobile && in_array($day_of_week, $free_days)){
				echo get_clickable_menu('X', 'x');
			}

			if($mobile){
				echo get_clickable_menu('X', 'x', 'x_contents_list_mobile');
			}		
		?>

</body></html>