<!DOCTYPE html>
<html lang="id">
<head>
    <title>Soal 1</title>
</head>
<body>
    <h2>Soal 1</h2>
    <form method="POST" action="">
        Nama 1: <input type="text" name="nama1" required><br>
        Nama 2: <input type="text" name="nama2" required><br>
        Nama 3: <input type="text" name="nama3" required><br>
        <button type="submit" name="urutkan">Urutkan</button>
    </form>

    <hr>

    <?php
    if (isset($_POST['urutkan'])) {
        $n1 = $_POST['nama1'];
        $n2 = $_POST['nama2'];
        $n3 = $_POST['nama3'];

        
        $temp = "";
        if ($n1 > $n2) {
            $temp = $n1;
            $n1 = $n2;
            $n2 = $temp;
        }

        if ($n1 > $n3) {
            $temp = $n1;
            $n1 = $n3;
            $n3 = $temp;
        }

        if ($n2 > $n3) {
            $temp = $n2;
            $n2 = $n3;
            $n3 = $temp;
        }

        echo "<h3>Output:</h3>";
        echo "<table border='1' cellpadding='5' cellspacing='0' width='200px'>";
        echo "<tr><td>$n1</td></tr>";
        echo "<tr><td>$n2</td></tr>";
        echo "<tr><td>$n3</td></tr>";
        echo "</table>";
    }
    ?>
</body>
</html>