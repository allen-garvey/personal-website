<?php 

require_once("shape.php");

//*********Abstract three d Shape Parent Class************
abstract class Three_D_Shape
{
	//protected forces child classes to define function
	abstract protected function get_volume();
	abstract protected function get_surface_area();
}

//*********Abstract Parent Class for prism objects************
abstract class Prism extends Three_D_Shape
{
	protected $base_shape;
	protected $height;

	public function __construct(Shape $base_shape, $height)
	{
		$this->base_shape = $base_shape;
		$this->height = $height;
	}

	public function get_volume()
	{
		return $this->base_shape->get_area() * $this->height;
	}

	public function get_surface_area()
	{
		return ($this->base_shape->get_area() * 2) + ($this->height * $this->base_shape->get_perimeter());
	}

	public function get_height()
    {
    	return $this->height;
    }


}

//*********Cylinder class using object composition************
class Cylinder_Composed extends Prism
{

	public function __construct(Circle $base_shape, $height)
	{
		parent::__construct($base_shape, $height);
	}

	public function get_radius()
    {
    	return $this->base_shape->get_radius();
    }

}

//*********Rectangular Prism class using object composition************
class Rectangular_Prism_Composed extends Prism
{

	public function __construct(Rectangle $base_shape, $height)
	{
		parent::__construct($base_shape, $height);
	}

	public function get_length()
    {
    	return $this->base_shape->get_length();
    }

    public function get_width()
    {
    	return $this->base_shape->get_width();
    }

}

//*********Triangular Prism class using object composition************
class Triangular_Prism_Composed extends Prism
{

	public function __construct(Triangle $base_shape, $height)
	{
		parent::__construct($base_shape, $height);
	}

	public function get_side_1()
    {
    	return $this->base_shape->get_side_1();
    }

    public function get_side_2()
    {
    	return $this->base_shape->get_side_2();
    }

    public function get_side_3()
    {
    	return $this->base_shape->get_side_3();
    }

}

//*********Sphere class using object composition************
//circle used in the constructor instead of radius because of extra type safety through type hinting
class Sphere_Composed extends Three_D_Shape
{
	protected $circle;

	public function __construct(Circle $circle)
	{
		$this->circle = $circle;
	}
	public function get_volume()
	{
		$radius = $this->circle->get_radius();
		return  $radius * $radius * $radius * pi() * 4 / 3;
	}
	public function get_surface_area()
	{
		return $this->circle->get_area() * 4;
	}

	public function get_radius()
    {
    	return $this->circle->get_radius();
    }


}


?>