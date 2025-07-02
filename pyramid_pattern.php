<?php
// Set the number of rows for the pyramid
$rows = 5;

// Initialize an empty string to store the pattern
$pattern = "";

// Loop through each row
for ($i = 1; $i <= $rows; $i++) {
    // Add spaces before the asterisks
    for ($j = 1; $j <= $rows - $i; $j++) {
        $pattern .= "&nbsp;";
    }
    
    // Add asterisks for the current row
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        $pattern .= "*";
    }
    
    // Add a line break for HTML display
    $pattern .= "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pyramid Pattern</title>
</head>
<body>
    <pre><?php echo $pattern; ?></pre>
</body>
</html>