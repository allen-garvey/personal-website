<?php

//*********three d Shape interface************
interface Three_D_Shape_Interface
{
	
	public function get_volume();
	public function get_surface_area();
}

//*********Cylinder class************
class Cylinder implements Three_D_Shape_Interface
{
	protected $radius;
	protected $height;

	public function __construct($radius, $height)
	{
		$this->radius = $radius;
		$this->height = $height;
	}

	public function get_volume()
	{
		return $this->radius * $this->radius * pi() * $this->height;
	}

	public function get_surface_area()
	{
		return ($this->radius * $this->radius * pi() * 2) + ($this->height * $this->radius * pi() * 2);
	}

	public function get_radius()
    {
    	return $this->radius;
    }

    public function get_height()
    {
    	return $this->height;
    }

}

//*********Rectangular Prism class************
class Rectangular_Prism implements Three_D_Shape_Interface
{
	protected $length;
	protected $width;
	protected $height;

	public function __construct($length, $width, $height)
	{
		$this->length = $length;
		$this->width = $width;
		$this->height = $height;
	}

	public function get_volume()
	{
		return $this->length * $this->width * $this->height;
	}

	public function get_surface_area()
	{
		return ($this->length * $this->width * 2) + ($this->height * 2 * ($this->length + $this->width));
	}

	public function get_height()
    {
    	return $this->height;
    }

    public function get_length()
    {
    	return $this->length;
    }

    public function get_width()
    {
    	return $this->width;
    }

}

//*********Triangular Prism class************
class Triangular_Prism implements Three_D_Shape_Interface
{
	protected $side1;
	protected $side2;
	protected $side3;
	protected $height;

	public function __construct($side1, $side2, $side3, $height)
	{
		$this->side1 = $side1;
		$this->side2 = $side2;
		$this->side3 = $side3;
		$this->height = $height;
	}
	
	protected function get_base_area()
	{
		//numerically stable version of Heron's formula from wikipedia
    	$sorted_sides = array($this->side3, $this->side2, $this->side1);
    	rsort($sorted_sides);
    	$a = $sorted_sides[0];
    	$b = $sorted_sides[1];
    	$c = $sorted_sides[2];
    	
    	return .25 * sqrt(($a + ($b+$c)) * ($c-($a-$b)) * ($c + ($a-$b)) * ($a + ($b - $c)));							
	}

	public function get_volume()
	{
		return $this->get_base_area() * $this->height;
	}

	public function get_surface_area()
	{
		return ($this->get_base_area() * 2) + ($this->height * ($this->side1 + $this->side2 + $this->side3));
	}

	public function get_height()
    {
    	return $this->height;
    }

    public function get_side_1()
    {
    	return $this->side1;
    }

    public function get_side_2()
    {
    	return $this->side2;
    }

    public function get_side_3()
    {
    	return $this->side3;
    }

}

//*********Sphere class************
class Sphere implements Three_D_Shape_Interface
{
	protected $radius;

	public function __construct($radius)
	{
		$this->radius = $radius;
	}
	public function get_volume()
	{
		return  $this->radius * $this->radius * $this->radius * pi() * 4 / 3;
	}
	public function get_surface_area()
	{
		return $this->radius * $this->radius * pi() * 4;
	}

	public function get_radius()
    {
    	return $this->radius;
    }
}




?>