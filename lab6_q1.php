<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
    <link rel="stylesheet" href="style.css">
        <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 30px;
        }
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 0 auto;
        }
        td, th {
            border: 1px solid #444;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<?php
    $name = "AHMAD HAKIMI BIN MOHD TAIJUDDIN";
    $matric = "AI230132"; // Use your actual matric number
    $course = "BIT";
    $year = "3RD YEAR";
    $address = "NO 14, JALAN LIMAU, TAMAN BINTANG, PARIT RAJA, 86400, JOHOR";
?>

<h2 style="text-align:center;">My Personal Information</h2>

<table border="1" cellpadding="5">
    <tr><td>Name</td><td><?php echo $name; ?></td></tr>
    <tr><td>Matric Number</td><td><?php echo $matric; ?></td></tr>
    <tr><td>Course</td><td><?php echo $course; ?></td></tr>
    <tr><td>Year of Study</td><td><?php echo $year; ?></td></tr>
    <tr><td>Address</td><td><?php echo $address; ?></td></tr>
</table>

</body>
</html>
