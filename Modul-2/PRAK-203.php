<?php
$hasil = "";
$satuan_ke = "";
$nilai = "";
$dari = "C";
$ke = "F";  

if (isset($_POST['nilai'])) {
    $nilai = $_POST['nilai'];
} else {
    $nilai = "";
}

if (isset($_POST['dari'])) {
    $dari = $_POST['dari'];
} else {
    $dari = "C";
}

if (isset($_POST['ke'])) {
    $ke = $_POST['ke'];
} else {
    $ke = "F";
}

if (isset($_POST['konversi'])) {
    if (is_numeric($nilai)) {
        $celsius = 0;
        
        if ($dari == "C") { 
            $celsius = $nilai; 
        } elseif ($dari == "F") { 
            $celsius = ($nilai - 32) * 5/9; 
        } elseif ($dari == "R") { 
            $celsius = $nilai * 5/4; 
        } elseif ($dari == "K") { 
            $celsius = $nilai - 273.15; 
        }

        if ($ke == "C") { 
            $hasil = $celsius; 
            $satuan_ke = "°C"; 
        } elseif ($ke == "F") { 
            $hasil = ($celsius * 9/5) + 32; 
            $satuan_ke = "°F"; 
        } elseif ($ke == "R") { 
            $hasil = $celsius * 4/5; 
            $satuan_ke = "°R"; 
        } elseif ($ke == "K") { 
            $hasil = $celsius + 273.15; 
            $satuan_ke = "K"; 
        }
        
        $hasil = round($hasil, 1); 
    } else {
        $hasil = "Input harus angka!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Soal 3</title>
</head>
<body>
    <form method="POST">
        Nilai : <input type="text" name="nilai" value="<?= $nilai ?>"><br>
        
        Dari :<br>
        <input type="radio" name="dari" value="C" <?= ($dari=="C")?"checked":"" ?>> Celcius<br>
        <input type="radio" name="dari" value="F" <?= ($dari=="F")?"checked":"" ?>> Fahrenheit<br>
        <input type="radio" name="dari" value="R" <?= ($dari=="R")?"checked":"" ?>> Rheamur<br>
        <input type="radio" name="dari" value="K" <?= ($dari=="K")?"checked":"" ?>> Kelvin<br>
        
        Ke :<br>
        <input type="radio" name="ke" value="C" <?= ($ke=="C")?"checked":"" ?>> Celcius<br>
        <input type="radio" name="ke" value="F" <?= ($ke=="F")?"checked":"" ?>> Fahrenheit<br>
        <input type="radio" name="ke" value="R" <?= ($ke=="R")?"checked":"" ?>> Rheamur<br>
        <input type="radio" name="ke" value="K" <?= ($ke=="K")?"checked":"" ?>> Kelvin<br>
        
        <button type="submit" name="konversi">Konversi</button>
    </form>

    <?php if ($hasil !== ""): ?>
        <h2>Hasil Konversi: <?= $hasil ?> <?= $satuan_ke ?></h2>
    <?php endif; ?>
    
</body>
</html>