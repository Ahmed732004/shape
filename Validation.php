<?php
// Class Validation
class Validation {
    // Static method to validate email addresses
    public static function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    // Static method to validate passwords (e.g., at least 8 characters long)
    public static function validatePassword($password) {
        return strlen($password) >= 8;
    }

    // Static method to validate if a field is not empty
    public static function validateField($field) {
        return !empty($field);
    }
}

// Testing the Validation class
$email = "test@example.com";
$password = "password123";
$field = "Some input";

echo "Email validation: " . (Validation::validateEmail($email) ? "Valid" : "Invalid") . "\n"; // Should output "Valid"
echo '<br>';
echo "Password validation: " . (Validation::validatePassword($password) ? "Valid" : "Invalid") . "\n"; // Should output "Valid"
echo '<br>';
echo "Field validation: " . (Validation::validateField($field) ? "Valid" : "Invalid") . "\n"; // Should output "Valid"
?>
