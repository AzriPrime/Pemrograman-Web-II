<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soal 3</title>
</head>
<body>
  <form action="" method="POST">
    <label for="bawah">Batas Bawah:</label>
    <input type="text" id="bawah" name="bawah">
    <br>
    <label for="atas">Batas Atas:</label>
    <input type="text" id="atas" name="atas">
    <br>
    <input type="submit" value="Cetak">
  </form>
  
</body>
</html>

<?php
if (isset($_POST['bawah']) && isset($_POST['atas'])) {
  $bawah = intval($_POST['bawah']);
  $atas = intval($_POST['atas']);
  $url = "bintang.png";
  echo "<br>";

  do {
    if (($bawah + 7) % 5 == 0) {
      echo "<img src='$url' width='12' height='12' alt='img'>" .  " ";
    } else {
      echo $bawah . " ";
    }
    $bawah++;
  } while ($bawah <= $atas);
}
?>