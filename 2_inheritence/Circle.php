<?php

  require_once 'Shape.php';

  /**
   * circle class for holding data and method for circle calculation
   */
   class Circle extends Shape
   {

     /**
      * private variable for holding radius of circle
      */
     private $radius;

     /**
      * constructor for initializing the radius variable
      * by defauld its value will be zero
      */
     function __construct($radius = 0)
     {
       $this->radius = 0;
     }

     /**
      * setter function for setting the radius
      */
     public function setRadius($radius = 0 )
     {
       $this->radius = $radius;
     }

     /**
      * overridden abstract method
      * function for returning the value of area.
      */
     public function getArea()
     {
       $this->area = pow($this->radius, 2) * pi();
       return $this->area;
     }
   }

?>
