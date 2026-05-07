<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soal 2</title>
</head>
<body>
  <form action="" method="POST">
    <label for="tinggi">Tinggi:</label>
    <input type="text" id="tinggi" name="tinggi">
    <br>
    <label for="url">Alamat Gambar:</label>
    <input type="text" id="url" name="url">
    <br>
    <input type="submit" value="Cek">
    <br>
  </form>
</body>
</html>

<?php
if (isset($_POST['tinggi']) && isset($_POST['url'])) {
      $tinggi = (int)$_POST['tinggi'];
      $url = $_POST['url'];

      $i = $tinggi;
      echo "<br>";
      while ($i > 0) {
          $spasi = 0;
          while ($spasi < ($tinggi - $i)) {
              echo "<img src='$url' width='30' height='30' style='opacity:0;'>";
              $spasi++;
          }

          $j = 0;
          while ($j < $i) {
              echo "<img src='$url' width='30' height='30' alt='img'>";
              $j++;
          }
          echo "<br>";
          $i--;
      }
  }
?>