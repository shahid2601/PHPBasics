<?php
// Function with default parameters and return type
function generateReport(string $name, array $scores, string $prefix = "Student"): string {
    $average = array_sum($scores) / (count($scores) ?: 1);
    return "$prefix: $name, Average Score: " . number_format($average, 2);
}

// Sample data
$name = "Alice";
$scores = array(85, 90, 78);

// Call the function with and without default parameter
$report1 = generateReport($name, $scores);
$report2 = generateReport($name, $scores, "Top Student");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h2>Function with Default Parameters Example</h2>
    <p>Scores: <?php echo htmlspecialchars(implode(", ", $scores)); ?></p>
    <p>Default Report: <?php echo htmlspecialchars($report1); ?></p>
    <p>Custom Report: <?php echo htmlspecialchars($report2); ?></p>
</body>
</html>