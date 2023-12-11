<?php
include_once "Shape.php";
class Circle extends Shape {
    public $radius;

    public function __construct($color, $radius) {
        $this->color = $color;
        $this->radius = $radius;
    }
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}
?>