<?php

interface Shape {
    public function calculateArea();
}

class Circle implements Shape {
    public $radius;

    function __construct($radius) {
        $this->radius = $radius;
    }

    function calculateArea() {
        return 3.14 * $this->radius * $this->radius;
    }
}

class Square implements Shape {
    public $side;

    function __construct($side) {
        $this->side = $side;
    }

    function calculateArea() {
        return $this->side * $this->side;
    }
}

$c = new Circle(5);
$s = new Square(4);

echo "Circle Area: " . $c->calculateArea() . "<br>";
echo "Square Area: " . $s->calculateArea();

?>
