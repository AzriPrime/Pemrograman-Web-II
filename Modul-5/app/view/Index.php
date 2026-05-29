<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Azri</title>
    <?php $base_url = str_replace('/public/index.php', '', $_SERVER['SCRIPT_NAME']); ?>
    <link rel="stylesheet" href="<?= $base_url ?>/style.css">
</head>
<body class="home-layout">

    <div class="card">
        <div class="card-content">
            <h1>Perpustakaan<br>Azri</h1>
        </div>
        <div class="buttons">
            <a href="/Modul-5/member" class="btn">Member</a>
            <a href="/Modul-5/buku" class="btn">Buku</a>
            <a href="/Modul-5/peminjaman" class="btn">Peminjaman</a>
        </div>
    </div>

</body>
</html>
