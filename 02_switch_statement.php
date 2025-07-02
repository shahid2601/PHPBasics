<?php
// Sample grade
$grade = "B";

// Switch statement to display grade message
switch ($grade) {
    case "A":
        $message = "Excellent! You got an A grade!";
        break;
    case "B":
        $message = "Great job! You got a B grade.";
        break;
    case "C":
        $message = "Good effort! You got a C grade.";
        break;
    case "D":
        $message = "You passed with a D grade.";
        break;
    case "F":
        $message = "Sorry, you failed. Try again!";
        break;
    default:
        $message = "Invalid grade.";
}

// Output results with line breaks for web display
echo "Grade: " . htmlspecialchars($grade) . "<br>";
echo "Message: " . htmlspecialchars($message) . "<br>";
?>