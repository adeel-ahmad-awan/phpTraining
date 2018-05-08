<?php

  require_once 'shape.php';

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
     public function SetRadius($radius = 0 )
     {
       $this->radius = $radius;
     }

     /**
      * overridden abstract method
      * function for returning the value of area.
      */
     public function GetArea()
     {
       $this->area = pow($this->radius, 2) * 3.14159;
       return $this->area;
     }
   }

?>
