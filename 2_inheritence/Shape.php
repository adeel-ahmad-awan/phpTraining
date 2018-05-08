<?php

/**
 * abstract shape class which will be extended by its children classes
 */
  abstract class Shape
  {
    /**
     * variable for holding area of shape
     */
    protected $area;

    /**
     * constructor for initializing the variable
     */
    function __construct()
    {
      $this->area = 0;
    }

    /**
     * abstract method which will be returning the area of shape
     */
    abstract function getArea();

  }
?>
