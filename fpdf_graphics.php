<?php
// Include FPDF library
require_once "fpdf186/fpdf.php";

// Create a new PDF instance
$pdf = new FPDF();
$pdf->AddPage();

// Set font for text
$pdf->SetFont("Arial", "B", 16);
$pdf->Cell(0, 10, "FPDF Graphics Example", 0, 1, "C");

// Set draw color for graphics
$pdf->SetDrawColor(255, 0, 0); // Red
$pdf->SetFillColor(0, 0, 255); // Blue

// Draw a filled rectangle
$pdf->Rect(50, 30, 100, 50, "F");

// Draw a line
$pdf->Line(50, 30, 150, 80);

// Add more text
$pdf->SetFont("Arial", "", 12);
$pdf->Ln(60);
$pdf->Cell(0, 10, "Rectangle and Line drawn above", 0, 1, "C");

// Output the PDF to the browser
$pdf->Output("I", "graphics.pdf");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h2>FPDF Graphics Example</h2>
    <p>Click <a href="fpdf_graphics.php" target="_blank">here</a> to generate and view the PDF with graphics.</p>
</body>
</html>