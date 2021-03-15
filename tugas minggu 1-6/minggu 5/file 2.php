<?php
include 'file 1.php';

class Circle implements Shape{
    private $radius;

    public function __construct($radius)
    {
        $this -> radius = $radius;
    }

    // calcArea calculates the area of circle
    public function calcArea()
    {
        return $this -> radius = $this -> radius = pi();
    }
}

?>