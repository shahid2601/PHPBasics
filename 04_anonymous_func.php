<?php
// Sample data
$student_scores = array(85, 55, 90, 45, 78);

// Anonymous function to filter passing scores
$filterPassing = function($scores) {
    $passing = array();
    foreach ($scores as $score) {
        if ($score >= 60) {
            $passing[] = $score;
        }
    }
    return $passing;
};

// Call the anonymous function
$passing_scores = $filterPassing($student_scores);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h2>Anonymous Function Example</h2>
    <p>All Scores: <?php echo htmlspecialchars(implode(", ", $student_scores)); ?></p>
    <p>Passing Scores (>= 60): <?php echo htmlspecialchars(implode(", ", $passing_scores)); ?></p>
</body>
</html>