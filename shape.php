<?php
// Abstract class Shape
abstract class Shape {
    // Abstract method calculateArea
    abstract public function calculateArea();
}

// Subclass Triangle
class Triangle extends Shape {
    private $base;
    private $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    // Implement calculateArea method
    public function calculateArea() {
        return 0.5 * $this->base * $this->height;
    }
}

// Subclass Rectangle
class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    // Implement calculateArea method
    public function calculateArea() {
        return $this->width * $this->height;
    }
}

// Testing the classes
$triangle = new Triangle(10, 5);
echo "Area of Triangle: " . $triangle->calculateArea() . "\n"; // Should output 25
echo "<br>";
$rectangle = new Rectangle(10, 5);
echo "Area of Rectangle: " . $rectangle->calculateArea() . "\n"; // Should output 50
?>
