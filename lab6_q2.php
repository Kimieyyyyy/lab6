<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q2</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
$students = [
    [ 
        'name' => 'Alice', 
        'program' => 'BIP', 
        'age' => 21 
    ],
    [ 
        'name' => 'Bob',   
        'program' => 'BIS', 
        'age' => 20 
    ],
    [ 
        'name' => 'Raju',  
        'program' => 'BIT', 
        'age' => 22 
    ],
];
?>

<h2 style="text-align:center;">Student Details</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Program</th>
        <th>Age</th>
    </tr>
    <?php foreach ($students as $student): ?>
        <tr>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['program']; ?></td>
            <td><?php echo $student['age']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
