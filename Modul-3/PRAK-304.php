<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soal 4</title>
</head>
<body>
  <form action="" method="GET">
    <label for="jumlah">Jumlah Bintang:</label>
    <input type="text" id="jumlah" name="jumlah">
    <br>
    <input type="submit" value="Cetak">
  </form>
</body>
</html>

<?php
if (isset($_GET['jumlah'])) {
  $jumlah = intval($_GET['jumlah']);
  $url = "bintang.png";
  echo "<br>";
  echo "Jumlah Bintang: " . $jumlah . "<br>";

  if ($jumlah <= 0) {
    echo "Jumlah bintang tidak boleh negatif.";
    exit;
  }

  for ($i = 0; $i < $jumlah; $i++) {
    echo "<img src='$url' width='30' height='30' alt='img'>" . " ";
  }

  echo "<br>";
  echo "<button onclick=\"location.href='?jumlah=" . ($jumlah + 1) . "';\">Tambah</button> 
  <button onclick=\"location.href='?jumlah=" . max(0, $jumlah - 1) . "';\">Kurang</button>";
}