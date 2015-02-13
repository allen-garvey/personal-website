<?php 
require_once('classes/shape_controller.php');
require_once('functions/add_shape_icon.php');
$title = 'Shape Calculator 1';
include('templates/header.php');

echo_shape_icons(array(new Circle_Controller(), new Rectangle_Controller(), new Triangle_Controller()));

include('templates/footer.html');


?>