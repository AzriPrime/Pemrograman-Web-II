<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Buku</title>
    <?php $base_url = str_replace('/public/index.php', '', $_SERVER['SCRIPT_NAME']); ?>
    <link rel="stylesheet" href="<?= $base_url ?>/style.css">
</head>
<body class="form-layout">

    <header>
        <h2>Perpustakaan Azri</h2>
        <a href="/Modul-5/buku" class="btn-back">Kembali</a>
    </header>

    <div class="container">
        <div class="form-area">
            <h1><?= isset($buku) ? 'Edit Buku' : 'Tambah Buku' ?></h1>
            
            <form action="/Modul-5/buku/<?= isset($buku) ? 'update' : 'store' ?>" method="POST">
                <?php if(isset($buku)): ?>
                    <input type="hidden" name="id_buku" value="<?= $buku['id_buku'] ?>">
                <?php endif; ?>
                
                <div class="form-group">
                    <label>Judul Buku:</label>
                    <input type="text" name="judul_buku" value="<?= isset($buku) ? htmlspecialchars($buku['judul_buku']) : '' ?>" placeholder="Contoh: Negeri Para Bedebah" required>
                </div>
                
                <div class="form-group">
                    <label>Penulis:</label>
                    <input type="text" name="penulis" value="<?= isset($buku) ? htmlspecialchars($buku['penulis']) : '' ?>" placeholder="Contoh: Tere Liye" required>
                </div>
                
                <div class="form-group">
                    <label>Penerbit:</label>
                    <input type="text" name="penerbit" value="<?= isset($buku) ? htmlspecialchars($buku['penerbit']) : '' ?>" placeholder="Contoh: Gramedia" required>
                </div>
                
                <div class="form-group">
                    <label>Tahun Terbit:</label>
                    <input type="number" name="tahun_terbit" value="<?= isset($buku) ? $buku['tahun_terbit'] : '' ?>" placeholder="Contoh: 2011" required>
                </div>
                
                <button type="submit" class="btn-submit"><?= isset($buku) ? 'Ubah Data' : 'Tambah Data' ?></button>
            </form>
        </div>
    </div>

</body>
</html>
