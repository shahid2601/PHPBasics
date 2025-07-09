<?php
// Sample string
$text = "Hello, PHP World!";

// Apply string functions
$length = strlen($text);
$uppercase = strtoupper($text);
$lowercase = strtolower($text);
$substring = substr($text, 7, 3); // Extracts "PHP"
$replaced = str_replace("World", "Universe", $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h2>Built-in String Functions</h2>
    <p>Original String: <?php echo htmlspecialchars($text); ?></p>
    <p>Length (strlen): <?php echo htmlspecialchars($length); ?></p>
    <p>Uppercase (strtoupper): <?php echo htmlspecialchars($uppercase); ?></p>
    <p>Lowercase (strtolower): <?php echo htmlspecialchars($lowercase); ?></p>
    <p>Substring (substr, 7, 3): <?php echo htmlspecialchars($substring); ?></p>
    <p>Replaced (str_replace): <?php echo htmlspecialchars($replaced); ?></p>
</body>
</html>