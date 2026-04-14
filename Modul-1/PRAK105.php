<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Smartphone Samsung - Associative</title>
    <style>
        table {
            border: 1px solid black;
            font-family: sans-serif;
            width: fit-content;
        }
        
        th {
            background-color: red; 
            padding: 20px 10px;    
            font-size: 24px;
            font-weight: bold;
            border: 1px solid black;
        }

        td {
            border: 1px solid black;
            padding: 4px 8px;
            font-size: 18px;
        }
    </style>
</head>
<body>

<?php
/**
 * Assosiative Array
 */
$smartphones = [
    "S22" => "Samsung Galaxy S22",
    "S22_plus" => "Samsung Galaxy S22+",
    "A03" => "Samsung Galaxy A03",
    "Xcover_5" => "Samsung Galaxy Xcover 5"
];
?>

<table>
    <thead>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($smartphones as $key => $nama): ?>
        <tr>
            <td><?php echo $nama; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>