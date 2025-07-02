<?php
// Sample score
$score = 85;

// If-elseif-else statement to determine grade
if ($score >= 90) {
    $grade = "A";
} elseif ($score >= 80) {
    $grade = "B";
} elseif ($score >= 70) {
    $grade = "C";
} elseif ($score >= 60) {
    $grade = "D";
} else {
    $grade = "F";
}

// Output results with line breaks for web display
echo "Score: " . htmlspecialchars($score) . "<br>";
echo "Grade: " . htmlspecialchars($grade) . "<br>";
?>