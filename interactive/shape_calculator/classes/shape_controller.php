<?php

require_once('shape.php');
require_once('three_d_shape.php');
require_once('three_d_shape_composition.php');

abstract class Shape_Controller
{
	protected $shape_variable_array;

	abstract protected function get_calculation_results();
	abstract protected function set_shape_from_json($json_data_array);
	abstract protected function get_shape_icon_div();

	public function get_input_div()
	{
		$input_div = '';
		foreach ($this->shape_variable_array as $variable) {
			$placeholder_text = ucfirst(str_replace('_', ' ', $variable));
			$input_box = "<input type='number' id='{$variable}' placeholder='{$placeholder_text}' min='0' onkeyup='display_validation(this)'>";
			$input_div = $input_div . $input_box;
		}
		$input_div = $input_div . "<script type='text/javascript' id='validation_listeners'>";
		
		//adds the listeners now
		foreach ($this->shape_variable_array as $variable) {
			$listener = "document.getElementById('{$variable}').addEventListener('change', function(){display_validation(this)}, false);";
			$input_div = $input_div . $listener;
		}

		$input_div = $input_div . "</script>";
		
		return $input_div;
	}

}

class Circle_Controller extends Shape_Controller
{
	protected $circle;

	public function __construct(){

		$this->shape_variable_array = array('radius');
	}

	public function get_shape_icon_div()
	{
		return "<div class='shape_container' onclick=\"select_shape(this), get_input_div('circle')\"><div class='circle'></div></div>";
	}

	public function set_shape_from_json($json_data_array)
	{
		$radius = $json_data_array['radius'];
		$this->circle = new Circle($radius);
	}

	public function get_calculation_results()
	{
		$radius = $this->circle->get_radius();
		$area = $this->circle->get_area();
		$perimeter = $this->circle->get_perimeter();

		return "A circle with radius {$radius} has an area of {$area} and a perimeter of {$perimeter}.";
	}

}

class Rectangle_Controller extends Shape_Controller
{
	protected $rectangle;

	public function __construct(){

		$this->shape_variable_array = array('length', 'width');
	}

	public function get_shape_icon_div()
	{
		return "<div class='shape_container' onclick=\"select_shape(this), get_input_div('rectangle')\"><div class='rectangle'></div></div>";
	}

	public function set_shape_from_json($json_data_array)
	{
		$length = $json_data_array['length'];
		$width = $json_data_array['width'];
		$this->rectangle = new Rectangle($length, $width);
	}

	public function get_calculation_results()
	{
		$length = $this->rectangle->get_length();
		$width = $this->rectangle->get_width();
		$area = $this->rectangle->get_area();
		$perimeter = $this->rectangle->get_perimeter();
		
		return "A rectangle with length {$length} and width {$width} has an area of {$area} and a perimeter of {$perimeter}.";
	}

}

class Triangle_Controller extends Shape_Controller
{
	protected $triangle;

	public function __construct(){

		$this->shape_variable_array = array('side_1', 'side_2', 'side_3');
	}

	public function get_shape_icon_div()
	{
		return "<div class='shape_container' onclick=\"select_shape(this), get_input_div('triangle')\"><div class='triangle'></div></div>";
	}

	public function set_shape_from_json($json_data_array)
	{
		$side_1 = $json_data_array['side_1'];
		$side_2 = $json_data_array['side_2'];
		$side_3 = $json_data_array['side_3'];
		$this->triangle = new Triangle($side_1, $side_2, $side_3);
	}

	public function get_calculation_results()
	{
		$side_1 = $this->triangle->get_side_1();
		$side_2 = $this->triangle->get_side_2();
		$side_3 = $this->triangle->get_side_3();
		$area = $this->triangle->get_area();
		$perimeter = $this->triangle->get_perimeter();

		if(is_nan($area) || $area <= 0){
			return "The dimensions you entered are not possible for a triangle";
		}
		
		return "A triangle with sides {$side_1}, {$side_2} and {$side_3} has an area of {$area} and a perimeter of {$perimeter}.";
	}
}

class Sphere_Controller extends Shape_Controller
{
	protected $sphere;

	public function __construct(){

		$this->shape_variable_array = array('radius');
	}

	public function get_shape_icon_div()
	{
		return "<div class='shape_container' onclick=\"select_shape(this), get_input_div('sphere')\"><div class='sphere'></div></div>";
	}

	public function set_shape_from_json($json_data_array)
	{
		$radius = $json_data_array['radius'];
		$this->sphere = new Sphere($radius);
	}

	public function get_calculation_results()
	{
		$radius = $this->sphere->get_radius();
		$surface_area = $this->sphere->get_surface_area();
		$volume = $this->sphere->get_volume();

		return "A sphere with radius {$radius} has a surface area of {$surface_area} and a volume of {$volume}.";
	}

}

class Sphere_Composed_Controller extends Sphere_Controller
{
	public function get_shape_icon_div()
	{
		return "<div class='shape_container' onclick=\"select_shape(this), get_input_div('sphere_composed')\"><div class='sphere'></div></div>";
	}

	public function set_shape_from_json($json_data_array)
	{
		$radius = $json_data_array['radius'];
		$this->sphere = new Sphere_Composed(new Circle($radius));
	}
}

class Cylinder_Controller extends Shape_Controller
{
	protected $cylinder;

	public function __construct(){

		$this->shape_variable_array = array('radius', 'height');
	}

	public function get_shape_icon_div()
	{
		return "<div class='shape_container' onclick = \"select_shape(this), get_input_div('cylinder')\">
				<div class='cylinder_main'></div>
				<div class='cylinder_top'></div>
			</div>";
	}

	public function set_shape_from_json($json_data_array)
	{
		$radius = $json_data_array['radius'];
		$height = $json_data_array['height'];
		$this->cylinder = new Cylinder($radius, $height);
	}

	public function get_calculation_results()
	{
		$radius = $this->cylinder->get_radius();
		$height = $this->cylinder->get_height();
		$surface_area = $this->cylinder->get_surface_area();
		$volume = $this->cylinder->get_volume();

		return "A cylinder with radius {$radius} and height {$height} has a surface area of {$surface_area} and a volume of {$volume}.";
	}

}

class Cylinder_Composed_Controller extends Cylinder_Controller
{
	public function get_shape_icon_div()
	{
		return "<div class='shape_container' onclick = \"select_shape(this), get_input_div('cylinder_composed')\">
				<div class='cylinder_main'></div>
				<div class='cylinder_top'></div>
			</div>";
	}

	public function set_shape_from_json($json_data_array)
	{
		$radius = $json_data_array['radius'];
		$height = $json_data_array['height'];
		$this->cylinder = new Cylinder_Composed(new Circle($radius), $height);
	}
}

class Rectangular_Prism_Controller extends Shape_Controller
{
	protected $rectangular_prism;

	public function __construct(){

		$this->shape_variable_array = array('length', 'width', 'height');
	}

	public function get_shape_icon_div()
	{
		return "<div class='shape_container' onclick = \"select_shape(this), get_input_div('rectangular_prism')\">
				<div class='rectangular_prism_top'></div>
				<div class='rectangular_prism_front'></div>
				<div class='rectangular_prism_side'></div>
			</div>";
	}

	public function set_shape_from_json($json_data_array)
	{
		$length = $json_data_array['length'];
		$width = $json_data_array['width'];
		$height = $json_data_array['height'];
		$this->rectangular_prism = new Rectangular_Prism($length, $width, $height);
	}

	public function get_calculation_results()
	{
		$length = $this->rectangular_prism->get_length();
		$width = $this->rectangular_prism->get_width();
		$height = $this->rectangular_prism->get_height();
		$surface_area = $this->rectangular_prism->get_surface_area();
		$volume = $this->rectangular_prism->get_volume();
		
		return "A rectangular prism with length {$length}, width {$width} and height {$height} has a surface area of {$surface_area} and a volume of {$volume}.";
	}

}

class Rectangular_Prism_Composed_Controller extends Rectangular_Prism_Controller
{
	public function get_shape_icon_div()
	{
		return "<div class='shape_container' onclick = \"select_shape(this), get_input_div('rectangular_prism_composed')\">
				<div class='rectangular_prism_top'></div>
				<div class='rectangular_prism_front'></div>
				<div class='rectangular_prism_side'></div>
			</div>";
	}

	public function set_shape_from_json($json_data_array)
	{
		$length = $json_data_array['length'];
		$width = $json_data_array['width'];
		$height = $json_data_array['height'];
		$this->rectangular_prism = new Rectangular_Prism_Composed(new Rectangle($length, $width), $height);
	}
}

class Triangular_Prism_Controller extends Shape_Controller
{
	protected $triangular_prism;

	public function __construct(){

		$this->shape_variable_array = array('side_1', 'side_2', 'side_3', 'height');
	}

	public function get_shape_icon_div()
	{
		return "<div class='shape_container' onclick=\"select_shape(this), get_input_div('triangular_prism')\">
				<div class='triangular_prism_top'></div>
				<div class='triangular_prism_bottom'></div>
			</div>";
	}

	public function set_shape_from_json($json_data_array)
	{
		$side_1 = $json_data_array['side_1'];
		$side_2 = $json_data_array['side_2'];
		$side_3 = $json_data_array['side_3'];
		$height = $json_data_array['height'];
		$this->triangular_prism = new Triangular_Prism($side_1, $side_2, $side_3, $height);
	}

	public function get_calculation_results()
	{
		$side_1 = $this->triangular_prism->get_side_1();
		$side_2 = $this->triangular_prism->get_side_2();
		$side_3 = $this->triangular_prism->get_side_3();
		$height = $this->triangular_prism->get_height();
		$surface_area = $this->triangular_prism->get_surface_area();
		$volume = $this->triangular_prism->get_volume();

		if(is_nan($volume) || $volume <= 0){
			return "The dimensions you entered are not possible for a triangular prism";
		}
		
		return "A triangular prism with sides {$side_1}, {$side_2} and {$side_3} and a height of {$height} has a surface area of {$surface_area} and a volume of {$volume}.";
	}
}

class Triangular_Prism_Composed_Controller extends Triangular_Prism_Controller
{
	public function get_shape_icon_div()
	{
		return "<div class='shape_container' onclick=\"select_shape(this), get_input_div('triangular_prism_composed')\">
				<div class='triangular_prism_top'></div>
				<div class='triangular_prism_bottom'></div>
			</div>";
	}

	public function set_shape_from_json($json_data_array)
	{
		$side_1 = $json_data_array['side_1'];
		$side_2 = $json_data_array['side_2'];
		$side_3 = $json_data_array['side_3'];
		$height = $json_data_array['height'];
		$this->triangular_prism = new Triangular_Prism_Composed(new Triangle($side_1, $side_2, $side_3), $height);
	}
}




?>