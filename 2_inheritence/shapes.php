<?php
  abstract class Shapes
  {
    protected $area;

    function __construct()
    {
      $this->area = 0;
    }
    abstract public function get_area();
  } // end class shapes
  class Circle extends Shapes
  {
    private $radius;
    function __construct()
    {
      $this->radius = 0;
    }
    public function set_radius($radius = 0 )
    {
      $this->radius = $radius;
    }
    public function get_area()
    {
      $this->area = $this->radius * 3.14159 * 3.14159;
      echo 'area of circle: ' .$this->area . '<br>';
    }
  } // end circle class
  class Rectangle extends Shapes
  {
    private $length;
    private $width;
    function __construct()
    {
      $this->length = 0;
      $this->width = 0;
    }
    public function set_length($length = 0 )
    {
      $this->length = $length;
    }
    public function set_width($width = 0 )
    {
      $this->width = $width;
    }
    public function get_area()
    {
      $this->area = $this->length * $this->width;
      echo 'area of rectangle: ' .$this->area . '<br>';
    }
  } //end rectangle class
  $circle = new Circle;
  $circle->set_radius(10);
  $circle->get_area();
  $rectangle = new Rectangle;
  $rectangle->set_length(14);
  $rectangle->set_width(5);
  $rectangle->get_area();
?>
