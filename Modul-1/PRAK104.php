<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Smartphone</title>
    <style>
        table {
            font-family: Arial, sans-serif;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 5px 10px;
            text-align: left;
        }
        th {
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
$smartphones = [
    "Samsung Galaxy S22",
    "Samsung Galaxy S22+",
    "Samsung Galaxy A03",
    "Samsung Galaxy Xcover 5"
];
?>

<table>
    <tr>
        <th>Daftar Smartphone Samsung</th>
    </tr>
    
    <?php 
    foreach ($smartphones as $hp) {
        echo "<tr>";
        echo "<td>$hp</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>