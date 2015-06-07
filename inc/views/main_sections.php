<?php 
	include_once(ROOT_PATH.'inc/models/sections_model.php');
	$sections = sections_model();
	
	$i = 0;
	$sections_per_row = 2;

	foreach ($sections as $name => $section) {
		$row_class = 'row';
		$row_id = strtolower($name);
		$section_class = 'col-sm-6 bottom_margin_sm_only';

		if(($i !== 0) && ($i % $sections_per_row === 0)){
			$row_class = $row_class . ' top_buffer_sm';
		}
		if($i % $sections_per_row===0){
			echo "<div class='$row_class'>";
			include(ROOT_PATH.'inc/views/homepage_section.php');	
		}
		else{
			include(ROOT_PATH.'inc/views/homepage_section.php');
			echo "</div>";
		}
		$i++;
	}