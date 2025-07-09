<?php
// Sample data
$student_scores = array(85, 90, 78, 92);

// Arrow function to double scores
$doubled_scores = array_map(fn($score) => $score * 2, $student_scores);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h2>Arrow Function Example</h2>
    <p>Original Scores: <?php echo htmlspecialchars(implode(", ", $student_scores)); ?></p>
    <p>Doubled Scores: <?php echo htmlspecialchars(implode(", ", $doubled_scores)); ?></p>
</body>
</html>