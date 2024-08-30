<?php
// Interface Resizable
interface Resizable {
    public function resize($percentage);
}

// Class Square implementing Resizable
class Square implements Resizable {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    // Implement resize method
    public function resize($percentage) {
        $this->side = $this->side * ($percentage / 100);
    }

    // Method to get the area of the square
    public function getArea() {
        return pow($this->side, 2);
    }

    // Method to get the side length of the square
    public function getSide() {
        return $this->side;
    }
}

// Testing the Square class
$square = new Square(10);
echo "Initial Side Length: " . $square->getSide() . "\n"; // Should output 10
echo '<br>';

$square->resize(60); // Resize the square to 60% of its original size
echo "Resized Side Length: " . $square->getSide() . "\n"; // Should output 6
echo '<br>';

echo "Area: " . $square->getArea() . "\n"; // Should output 36
echo '<br>'
?>
