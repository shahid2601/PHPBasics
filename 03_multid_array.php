<?php
// Multidimensional Array (students with name and grades)
$students = [
    ["name" => "Alice", "grades" => [85, 90, 88]],
    ["name" => "Bob", "grades" => [78, 82, 80]],
    ["name" => "Charlie", "grades" => [95, 92, 90]]
];

// Output with line breaks for web display
echo "Multidimensional Array (Student Records):<br>";
foreach ($students as $index => $student) {
    echo "Student " . ($index + 1) . ": " . htmlspecialchars($student['name']) . "<br>";
    echo "Grades: " . htmlspecialchars(implode(", ", $student['grades'])) . "<br>";
    echo "<br>";
}
?>