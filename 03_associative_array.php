<?php
// Associative Array
$student = [
    "name" => "Emma",
    "age" => 20,
    "grade" => "A",
    "is_enrolled" => true
];

// Output with line breaks for web display
echo "Associative Array (Student Info):<br>";
foreach ($student as $key => $value) {
    echo "$key: " . htmlspecialchars(is_bool($value) ? ($value ? "Yes" : "No") : $value) . "<br>";
}
?>