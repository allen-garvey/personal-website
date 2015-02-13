<?php 

//*********Abstract Shape Parent Class************
abstract class Shape
{
	//protected forces child classes to define function
	abstract protected function get_area();
	abstract protected function get_perimeter();
}

//*********Circle************
class Circle extends Shape
{
	protected $radius;

	public function __construct($radius) 
    { 
        $this->radius = $radius; 
    }
    public function get_area()
    {
    	return $this->radius * $this->radius * pi();
    }
    public function get_perimeter()
    {
    	return $this->radius * 2 * pi();
    }
    public function get_radius()
    {
    	return $this->radius;
    }
}

//*********Rectangle************

class Rectangle extends Shape
{
	protected $length;
	protected $width;
	
	public function __construct($length, $width) 
    { 
        $this->length = $length;
        $this->width = $width;
    }
	
    public function get_area()
    {
    	return $this->length * $this->width;
    }
    public function get_perimeter()
    {
    	return 2 * ($this->length + $this->width);
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

//*********Triangle************

class Triangle extends Shape
{
	protected $side1;
	protected $side2;
	protected $side3;


	public function __construct($side1, $side2, $side3) 
    { 
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function get_area()
    {
    	//numerically stable version of Heron's formula from wikipedia
    	$sorted_sides = array($this->side3, $this->side2, $this->side1);
    	rsort($sorted_sides);
    	$a = $sorted_sides[0];
    	$b = $sorted_sides[1];
    	$c = $sorted_sides[2];
    	
    	return .25 * sqrt(($a + ($b+$c)) * ($c-($a-$b)) * ($c + ($a-$b)) * ($a + ($b - $c)));
    	
    }
    public function get_perimeter()
    {
    	return $this->side3 + $this->side2 + $this->side1;
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




?>
