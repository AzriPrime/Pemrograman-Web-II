<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjaman</title>
    <?php $base_url = str_replace('/public/index.php', '', $_SERVER['SCRIPT_NAME']); ?>
    <link rel="stylesheet" href="<?= $base_url ?>/style.css">
</head>
<body class="form-layout">

    <header>
        <h2>Perpustakaan Azri</h2>
        <a href="/Modul-5/peminjaman" class="btn-back">Kembali</a>
    </header>

    <div class="container">
        <div class="form-area">
            <h1><?= isset($peminjaman) ? 'Edit Peminjaman' : 'Tambah Peminjaman' ?></h1>
            
            <form action="/Modul-5/peminjaman/<?= isset($peminjaman) ? 'update' : 'store' ?>" method="POST">
                <?php if(isset($peminjaman)): ?>
                    <input type="hidden" name="id_peminjaman" value="<?= $peminjaman['id_peminjaman'] ?>">
                <?php endif; ?>
                
                <div class="form-group">
                    <label>Member:</label>
                    <select name="id_member" required>
                        <option value="">-- Pilih Member --</option>
                        <?php foreach($members as $m): ?>
                            <option value="<?= $m['id_member'] ?>" <?= (isset($peminjaman) && $peminjaman['id_member'] == $m['id_member']) ? 'selected' : '' ?>>
                                <?= htmlspecialchars($m['nama_member']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Buku:</label>
                    <select name="id_buku" required>
                        <option value="">-- Pilih Buku --</option>
                        <?php foreach($bukus as $b): ?>
                            <option value="<?= $b['id_buku'] ?>" <?= (isset($peminjaman) && $peminjaman['id_buku'] == $b['id_buku']) ? 'selected' : '' ?>>
                                <?= htmlspecialchars($b['judul_buku']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Tanggal Pinjam:</label>
                    <input type="date" name="tgl_pinjam" value="<?= isset($peminjaman) ? $peminjaman['tgl_pinjam'] : '' ?>" required>
                </div>
                
                <div class="form-group">
                    <label>Tanggal Kembali:</label>
                    <input type="date" name="tgl_kembali" value="<?= isset($peminjaman) ? $peminjaman['tgl_kembali'] : '' ?>" required>
                </div>
                
                <button type="submit" class="btn-submit"><?= isset($peminjaman) ? 'Ubah Data' : 'Tambah Data' ?></button>
            </form>
        </div>
    </div>

</body>
</html>
