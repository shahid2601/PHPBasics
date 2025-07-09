<?php
// Set the content type to PNG image
header("Content-Type: image/png");

// Create a 200x100 pixel image
$image = imagecreate(200, 100);

// Allocate colors (RGB)
$background_color = imagecolorallocate($image, 255, 255, 255); // White
$text_color = imagecolorallocate($image, 0, 0, 255); // Blue

// Add text to the image
imagestring($image, 5, 50, 40, "PHP Image", $text_color);

// Output the image as PNG
imagepng($image);

// Free memory
imagedestroy($image);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h2>Image Creation Functions</h2>
    <p>Generated Image:</p>
    <img src="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" alt="Generated PHP Image">
</body>
</html>