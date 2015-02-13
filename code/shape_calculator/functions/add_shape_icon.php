<?php 
//requires shape_controller class

function echo_shape_icons($shape_controller_array){
	foreach ($shape_controller_array as $shape_controller) {
		echo $shape_controller->get_shape_icon_div();
	}
}




?>