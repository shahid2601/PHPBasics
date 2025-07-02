<?php
// Special Types
// Null
$phone = null;

// Resource-like (file handling)
$filename = "test.txt";
file_put_contents($filename, "Sample text");
$file_handle = fopen($filename, "r");

// Output with line breaks for web display
echo "Phone (null): " . ($phone === null ? "Not provided" : htmlspecialchars($phone)) . "<br>";
echo "File Resource: " . (is_resource($file_handle) ? "File opened" : "File error") . "<br>";
echo "File Content: " . htmlspecialchars(fread($file_handle, filesize($filename))) . "<br>";

// Close the file resource
fclose($file_handle);
?>