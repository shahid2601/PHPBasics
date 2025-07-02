<?php
// Define constants using define()
define("ITEM_PRICE", 25.50);
define("DISCOUNT_RATE", 0.1); // 10% discount

// Define constant using const keyword
const MAX_QUANTITY = 10;

// Sample inputs
$quantity = 8;
$customer_is_premium = true;

// Arithmetic operators: Calculate total cost
$subtotal = $quantity * ITEM_PRICE;

// Comparison and logical operators: Apply discount if conditions met
$discount = 0;
if ($quantity >= MAX_QUANTITY && $customer_is_premium) {
    $discount = $subtotal * DISCOUNT_RATE;
} elseif ($quantity > 5 || $customer_is_premium) {
    $discount = $subtotal * (DISCOUNT_RATE / 2); // 5% discount
}

$total = $subtotal - $discount;

// Output results with line breaks for web display
echo "Item Price: $" . htmlspecialchars(ITEM_PRICE) . "<br>";
echo "Max Quantity for Full Discount: " . htmlspecialchars(MAX_QUANTITY) . "<br>";
echo "Quantity Purchased: " . htmlspecialchars($quantity) . "<br>";
echo "Premium Customer: " . ($customer_is_premium ? "Yes" : "No") . "<br>";
echo "Subtotal: $" . number_format($subtotal, 2) . "<br>";
echo "Discount: $" . number_format($discount, 2) . "<br>";
echo "Total: $" . number_format($total, 2) . "<br>";
?>