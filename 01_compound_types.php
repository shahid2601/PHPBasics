<?php
// Compound Types
// Array
$fruits = ["Apple", "Banana", "Orange"];

// Object
class Fruit {
    public $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
}
$fruit_obj = new Fruit("Mango");

// Output with line breaks for web display
echo "Array (fruits):<br>";
foreach ($fruits as $index => $fruit) {
    echo "Fruit " . ($index + 1) . ": " . htmlspecialchars($fruit) . "<br>";
}
echo "Object (Fruit): " . htmlspecialchars($fruit_obj->name) . "<br>";
?>