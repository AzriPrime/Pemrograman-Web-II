<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soal 1</title>
</head>
<body>
  <form action="" method="POST">
    <label for="peserta">Jumlah Peserta:</label>
    <input type="text" id="peserta" name="name">
    <br>
    <input type="submit" value="cetak">
  </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $peserta = $_POST['name'];
  $jumlahpeserta = 1;
  while ($jumlahpeserta <= $peserta) {
    if ($jumlahpeserta % 2 == 0) {
      echo "<h2><span style='color: green;'>Peserta ke-" . $jumlahpeserta . " Genap</span></h2>";
    } else {
      echo "<h2><span style='color: red;'>Peserta ke-" . $jumlahpeserta . " Ganjil</span></h2>";
    }
    $jumlahpeserta++;
  }
}
?>