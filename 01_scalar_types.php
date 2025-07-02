<?php
// Scalar Types
$age = 30; // Integer
$price = 19.99; // Float
$name = "Alice"; // String
$is_active = true; // Boolean

// Basic operation
$total = $age * $price;

// Output with line breaks for web display
echo "Name (string): " . htmlspecialchars($name) . "<br>";
echo "Age (integer): " . htmlspecialchars($age) . "<br>";
echo "Price (float): $" . htmlspecialchars($price) . "<br>";
echo "Active (boolean): " . ($is_active ? "Yes" : "No") . "<br>";
echo "Total (age * price): $" . number_format($total, 2) . "<br>";
?>