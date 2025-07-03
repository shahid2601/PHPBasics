<?php
// Multidimensional Array (products with name, price, and stock)
$products = [
    ["name" => "Laptop", "price" => 999.99, "stock" => 10],
    ["name" => "Phone", "price" => 499.99, "stock" => 25],
    ["name" => "Tablet", "price" => 299.99, "stock" => 15]
];

// Apply array_map to increase price by 10%
$updated_products = array_map(function($product) {
    $product['price'] = $product['price'] * 1.10;
    return $product;
}, $products);

// Use array_column to extract product names
$product_names = array_column($products, 'name');

// Use array_walk to output products
echo "Multidimensional Array with Functions (Products):<br>";
array_walk($updated_products, function($product, $index) {
    echo "Product " . ($index + 1) . ": " . htmlspecialchars($product['name']) . "<br>";
    echo "Price: $" . number_format($product['price'], 2) . "<br>";
    echo "Stock: " . htmlspecialchars($product['stock']) . "<br>";
    echo "<br>";
});

// Output product names from array_column
echo "Product Names: " . htmlspecialchars(implode(", ", $product_names)) . "<br>";
?>