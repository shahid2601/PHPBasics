<?php
// Named function to calculate average score
function calculateAverage(array $scores): float {
    $total = 0;
    $count = count($scores);
    if ($count == 0) {
        return 0.0;
    }
    foreach ($scores as $score) {
        $total += $score;
    }
    return $total / $count;
}

// Sample data
$student_scores = array(85, 90, 78, 92);

// Call the function
$average = calculateAverage($student_scores);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h2>Named Function Example</h2>
    <p>Scores: <?php echo htmlspecialchars(implode(", ", $student_scores)); ?></p>
    <p>Average Score: <?php echo number_format($average, 2); ?></p>
</body>
</html>