<?php
// Function to reverse a string without built-in functions
function reverseString($input) {
    // Initialize empty string for result
    $reversed = "";
    
    // Get string length by counting characters
    $length = 0;
    while (isset($input[$length])) {
        $length++;
    }
    
    // Loop through string from end to beginning
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $input[$i];
    }
    
    return $reversed;
}

// Test the function
$inputString = "Hello, World!";
$result = reverseString($inputString);

// Output as plain text with HTML line break for web display
echo "Original String: " . htmlspecialchars($inputString) . "<br>";
echo "Reversed String: " . htmlspecialchars($result);
?>