<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soal 1</title>
</head>
<body>
  <form action="" method="POST">
    <label for="panjang">Panjang :</label>
    <input type="number" id="panjang" name="panjang" required> <br>
    <label for="lebar">Lebar :</label>
    <input type="number" id="lebar" name="lebar" required> <br>
    <label for="nilai">Nilai :</label>
    <input type="text" id="nilai" name="nilai" required> <br>
    <button type="submit" name="cetak">Cetak</button>
  </form>
</body>
</html>

<?php
if (isset($_POST['cetak'])) {
  $panjang = $_POST['panjang'];
  $lebar = $_POST['lebar'];
  $nilai = $_POST['nilai'];

  $nilaiArray = explode(" ", trim($nilai));
  echo "<br>";
  

  if (count($nilaiArray) > $panjang * $lebar or count($nilaiArray) < $panjang * $lebar) {
    echo "Panjang nilai tidak sesuai dengan ukuran matriks.";
    return;
  } else {
    echo "<table border='1' style='border-collapse: collapse' cellpadding='10'>";
    $index = 0;
    for ($i = 0; $i < $panjang; $i++) {
      echo "<tr>";
      for ($j = 0; $j < $lebar; $j++) {
        if ($index < count($nilaiArray)) {
          echo "<td>$nilaiArray[$index]</td>";
          $index++;
        } else {
          echo "<td></td>";
        }
      }
      echo "</tr>";
    }
    echo "</table>";
  }


}