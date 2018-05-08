<?php

  require_once 'Shape.php';

  /**
   * rectangle class for holding data and method for rectangle calculation
   */
   class Rectangle extends Shape
   {
       /**
        * private variable for holding length of rectangle
        */
      private $length;

       /**
        * private variable for holding width of rectangle
        */
      private $width;

        /**
         * constructor for initializing the length and width variable
         * by defauld its value will be zero
         */
       public function __construct($length = 0, $width = 0)
       {
           $this->length = $length;
           $this->width = $width;
       }

       /**
        * setter function for setting the length
        */
      public function setLength($length = 0)
       {
           $this->length = $length;
       }

       /**
        * setter function for setting the width
        */
      public function setWidth($width = 0)
       {
           $this->width = $width;
       }

       /**
        * overridden abstract method
        * function for returning the value of area.
        */
       public function getArea()
       {
           $this->area = $this->length * $this->width;
           return $this->area;
       }
   }

?>
