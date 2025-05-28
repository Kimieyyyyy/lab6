<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q3</title>
    <link rel="stylesheet" href="style.css">
        <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
        }
        .result-box {
            display: inline-block;
            border: 2px solid #4CAF50;
            padding: 20px;
            border-radius: 10px;
            background-color: #f9fff9;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .result-box h2 {
            color: #4CAF50;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Rectangle Area Calculation</h2>

<?php
function calculateArea($length, $width) {
    return $length * $width;
}

$length = 5;
$width = 10;
$area = calculateArea($length, $width);

echo "<p>The area of the rectangle with length $length and width $width is $area.</p>";
?>



</body>
</html>
