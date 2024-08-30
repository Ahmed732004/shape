<?php
// Abstract class Animal
abstract class Animal {
    // Abstract methods
    abstract public function eat();
    abstract public function makeSound();
}

// Subclass Dog
class Dog extends Animal {
    // Implement eat method
    public function eat() {
        return "Dog is eating.";
    }

    // Implement makeSound method
    public function makeSound() {
        return "Dog says: Woof!";
    }
}

// Subclass Cat
class Cat extends Animal {
    // Implement eat method
    public function eat() {
        return "Cat is eating.";
    }

    // Implement makeSound method
    public function makeSound() {
        return "Cat says: Meow!";
    }
}

// Subclass Bird
class Bird extends Animal {
    // Implement eat method
    public function eat() {
        return "Bird is eating.";
    }

    // Implement makeSound method
    public function makeSound() {
        return "Bird says: Tweet!";
    }
}

// Testing the classes
$dog = new Dog();
echo $dog->eat() . "\n"; // Should output "Dog is eating."
echo '<br>';
echo $dog->makeSound() . "\n"; // Should output "Dog says: Woof!"
echo '<br>';

$cat = new Cat();
echo $cat->eat() . "\n"; // Should output "Cat is eating."
echo '<br>';
echo $cat->makeSound() . "\n"; // Should output "Cat says: Meow!"
echo '<br>';

$bird = new Bird();
echo $bird->eat() . "\n"; // Should output "Bird is eating."
echo '<br>';
echo $bird->makeSound() . "\n"; // Should output "Bird says: Tweet!"
?>
