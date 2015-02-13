<?php 

header('Content-Type: application/json');
require_once('classes/shape_controller.php');
require_once('functions/get_shape_controller.php');

$data_array = json_decode(file_get_contents('php://input'), true);


$shape_type = $data_array['shape'];

$shape_controller = get_shape_controller($shape_type);

if(!is_null($shape_controller)){
	$result['response'] = $shape_controller->get_input_div();
}
else{
	$result['response'] = $data_array['shape'] . " not a valid shape type (get_input_div)";
}

$result['script'] = 'true';


echo json_encode($result);
?>