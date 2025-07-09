<?php
// Set content type to PNG image
header("Content-Type: image/png");

// Create a 300x200 pixel image
$image = imagecreate(300, 200);

// Allocate colors (RGB)
$background_color = imagecolorallocate($image, 255, 255, 255); // White
$blue_color = imagecolorallocate($image, 0, 0, 255); // Blue
$red_color = imagecolorallocate($image, 255, 0, 0); // Red

// Draw a filled rectangle
imagefilledrectangle($image, 50, 50, 150, 150, $blue_color);

// Draw a line
imageline($image, 50, 50, 150, 150, $red_color);

// Output the image as PNG
imagepng($image);

// Free memory
imagedestroy($image);
?>