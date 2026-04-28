<?php 
$errorNama = $errorNim = $errorJk = "*";
$nama = $nim = $jk = "";

if (isset($_POST['submit'])) {
    
    if (empty($_POST['nama'])) {
        $errorNama = "* nama tidak boleh kosong";
    } else {
        $nama = $_POST['nama'];
        $errorNama = "*"; 
    }

    if (empty($_POST['nim'])) {
        $errorNim = "* nim tidak boleh kosong";
    } else {
        $nim = $_POST['nim'];
        $errorNim = "*"; 
    }

    if (!isset($_POST['jk'])) {
        $errorJk = "* jenis kelamin tidak boleh kosong";
    } else {
        $jk = $_POST['jk'];
        $errorJk = "*";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Soal 2</title>
</head>
<body>
    <form action="" method="POST">
        <label>Nama</label>
        <input type="text" name="nama" value="<?php echo $nama; ?>"> 
        <span style="color: red;"><?php echo $errorNama; ?></span><br>

        <label>NIM</label>
        <input type="text" name="nim" value="<?php echo $nim; ?>"> 
        <span style="color: red;"><?php echo $errorNim; ?></span><br>

        <label>Jenis Kelamin</label> 
        <span style="color: red;"><?php echo $errorJk; ?></span><br>
        <input type="radio" name="jk" value="Laki-laki" <?php if($jk == "Laki-laki") echo "checked"; ?>> Laki-laki <br>
        <input type="radio" name="jk" value="Perempuan" <?php if($jk == "Perempuan") echo "checked"; ?>> Perempuan <br>

        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit']) && $errorNama == "*" && $errorNim == "*" && $errorJk == "*") {
        echo "<hr><h3>Hasil</h3>";
        echo "Nama: $nama <br> NIM: $nim <br> Jenis Kelamin: $jk";
    }
    ?>
</body>
</html>