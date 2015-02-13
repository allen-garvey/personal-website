<?php 
require_once("../classes/shape.php");
require_once("../classes/three_d_shape.php");
require_once("../classes/three_d_shape_composition.php");
require_once("../classes/shape_controller.php");

function print_shape(Shape $shape){
	echo $shape->get_area();
	echo "<br>";
	echo $shape->get_perimeter();
	echo "<br>";
}


function print_3d_shape(Three_D_Shape $shape){
	echo $shape->get_surface_area();
	echo "<br>";
	echo $shape->get_volume();
	echo "<br>";
}
echo "Circle<br>";
print_shape(new Circle(1));
echo "Rectangle<br>";
print_shape(new Rectangle(2, 4));
echo "Triangle<br>";
print_shape(new Triangle(3, 4, 5));
echo "Cylinder_Composed<br>";
print_3d_shape(new Cylinder_Composed(new Circle(1), 10));
echo "Cylinder<br>";
print_3d_shape(new Cylinder(1, 10));
echo "Sphere_Composed<br>";
print_3d_shape(new Sphere_Composed(new Circle(1)));
echo "Sphere<br>";
print_3d_shape(new Sphere(1));
echo "Rectangular_Prism_Composed<br>";
print_3d_shape(new Rectangular_Prism_Composed(new Rectangle(2, 4), 10));
echo "Rectangular_Prism<br>";
print_3d_shape(new Rectangular_Prism(2, 4, 10));
echo "Triangular_Prism_Composed<br>";
print_3d_shape(new Triangular_Prism_Composed(new Triangle(3, 4, 5), 10));
echo "Triangular_Prism<br>";
print_3d_shape(new Triangular_Prism(3, 4, 5, 10));

$circle_controller = new Circle_Controller();
echo $circle_controller->get_input_div();

$triangle_controller = new Triangle_Controller();
$triangle_controller->set_shape_from_json(array('side_1'=> 3, 'side_2'=> 4, 'side_3'=> 5));
echo $triangle_controller->get_calculation_results();

?>