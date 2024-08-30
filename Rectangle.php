<?php
// Class Rectangle
class Rectangle {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    // Method to calculate the area of the rectangle
    public function calculateArea() {
        return $this->length * $this->width;
    }

    // Method to calculate the perimeter of the rectangle
    public function calculatePerimeter() {
        return 2 * ($this->length + $this->width);
    }

    // Getter for length
    public function getLength() {
        return $this->length;
    }

    // Getter for width
    public function getWidth() {
        return $this->width;
    }
}

// Testing the Rectangle class
$rectangle = new Rectangle(10, 5);
echo "Length: " . $rectangle->getLength() . "\n"; // Should output 10
echo '<br>';
echo "Width: " . $rectangle->getWidth() . "\n"; // Should output 5
echo '<br>';
echo "Area: " . $rectangle->calculateArea() . "\n"; // Should output 50
echo '<br>';
echo "Perimeter: " . $rectangle->calculatePerimeter() . "\n"; // Should output 30
echo '<br>';
?>
