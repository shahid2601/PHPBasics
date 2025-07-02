<?php
// Numeric Array
$colors = ["Red", "Blue", "Green", "Yellow"];

// Output with line breaks for web display
echo "Numeric Array (Colors):<br>";
for ($i = 0; $i < count($colors); $i++) {
    echo "Index $i: " . htmlspecialchars($colors[$i]) . "<br>";
}
?>