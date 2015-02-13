<?php
	require_once('controllers/index_controller.php'); 
	
	// header('Content-Type: text/html');
	date_default_timezone_set('America/New_York');

	$index_controller = new AGED_Productivity_Startpage_2_Index_Controller;
	echo $index_controller->get_index();
?>