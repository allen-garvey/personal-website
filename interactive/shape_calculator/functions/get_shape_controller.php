<?php 
//shape controller classes required in file

function get_shape_controller($shape_type_string){
	if ($shape_type_string === 'circle') {
		return new Circle_Controller();
	}
	elseif ($shape_type_string === 'rectangle') {
		return new rectangle_Controller();
	}
	elseif ($shape_type_string === 'triangle') {
		return new Triangle_Controller();
	}
	elseif ($shape_type_string === 'sphere') {
		return new Sphere_Controller();
	}
	elseif ($shape_type_string === 'cylinder') {
		return new Cylinder_Controller();
	}
	elseif ($shape_type_string === 'triangular_prism') {
		return new Triangular_Prism_Controller();
	}
	elseif ($shape_type_string === 'rectangular_prism') {
		return new Rectangular_Prism_Controller();
	}
	elseif ($shape_type_string === 'sphere_composed') {
		return new Sphere_Composed_Controller();
	}
	elseif ($shape_type_string === 'cylinder_composed') {
		return new Cylinder_Composed_Controller();
	}
	elseif ($shape_type_string === 'triangular_prism_composed') {
		return new Triangular_Prism_Composed_Controller();
	}
	elseif ($shape_type_string === 'rectangular_prism_composed') {
		return new Rectangular_Prism_Composed_Controller();
	}
	else{
		return null;
	}
}


function get_shape_controller2($a){
	return null;
}

?>