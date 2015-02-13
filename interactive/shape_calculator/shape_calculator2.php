<?php 
require_once('classes/shape_controller.php');
require_once('functions/add_shape_icon.php');
$title = 'Shape Calculator 2';
include('templates/header.php');

echo_shape_icons(array(new Circle_Controller(), new Rectangle_Controller(), new Triangle_Controller(), 
	new Sphere_Controller(), new Cylinder_Controller(), new Rectangular_Prism_Controller, new Triangular_Prism_Controller()));

include('templates/footer.html');


?>