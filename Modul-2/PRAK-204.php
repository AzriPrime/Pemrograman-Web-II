<?php
$nilai = "";
$hasil = "";

if (isset($_POST['konversi'])) {
    if (isset($_POST['nilai']) && $_POST['nilai'] !== "") {
        $nilai = $_POST['nilai'];

        if ($nilai == 0) {
            $hasil = "nol";
        } elseif ($nilai >= 1 && $nilai <= 9) {
            $hasil = "satuan";
        } elseif ($nilai >= 11 && $nilai <= 19) {
            $hasil = "belasan";
        } elseif ($nilai == 10 || ($nilai >= 20 && $nilai <= 99)) {
            $hasil = "puluhan";
        } elseif ($nilai >= 100 && $nilai <= 999) {
            $hasil = "ratusan";
        } else {
            $hasil = "Error";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Soal 4</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Nilai</label>
        <input type="text" name="nilai" value="<?php echo $nilai; ?>"><br>
        <button type="submit" name="konversi">Konversi</button>
    </form>

    <?php if ($hasil !== ""): ?>
        <h1>Hasil: <?php echo $hasil; ?></h1>
    <?php endif; ?>
</body>
</html>