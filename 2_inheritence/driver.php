<?php

  require_once 'circle.php';
  require_once 'rectangle.php';

  $circle = new Circle;
  $circle->SetRadius(6);
  echo 'area of circle: ' . $circle->GetArea() . '<br>';

  $rectangle = new Rectangle;
  $rectangle->SetLength(3);
  $rectangle->SetWidth(9);
  echo 'area of rectangle: ' . $rectangle->GetArea() . '<br>';

?>
