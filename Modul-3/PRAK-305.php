<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soal 5</title>
</head>
<body>
  <form action="" method ="GET">
    <input type="text" name="kata">
    <input type="submit" value="Submit">
  </form>
</body>
</html>

<?php
if (isset($_GET['kata'])) {
  $kata = $_GET['kata'];
  $panjangkata = strlen($kata);

  for ($i = 0; $i < $panjangkata; $i++) {
    for ($j = 0; $j < $panjangkata; $j++) {
      if ($j == 0) {
      echo (strtoupper($kata[$i]));
      } else {
        echo $kata[$i];
      }
    }
  }
}
?>