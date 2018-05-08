<?php

  require_once 'Circle.php';
  require_once 'Rectangle.php';

  $circle = new Circle;
  $circle->setRadius(6);
  echo 'area of circle: ' . $circle->getArea() . '<br>';

  $rectangle = new Rectangle;
  $rectangle->setLength(3);
  $rectangle->setWidth(9);
  echo 'area of rectangle: ' . $rectangle->getArea() . '<br>';

?>
