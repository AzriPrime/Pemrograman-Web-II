<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peminjaman</title>
    <?php $base_url = str_replace('/public/index.php', '', $_SERVER['SCRIPT_NAME']); ?>
    <link rel="stylesheet" href="<?= $base_url ?>/style.css">
</head>
<body class="table-layout">

    <div class="content">
        <div class="page-header">
            <h1>Daftar Peminjaman Perpustakaan Azri</h1>
            <div class="header-actions">
                <a href="<?= $base_url ?>/peminjaman/create" class="btn btn-add-data">Tambah Data Peminjaman</a>
                <a href="<?= $base_url ?>/" class="btn btn-back">Kembali</a>
            </div>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Member</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($peminjamans)): ?>
                    <?php foreach($peminjamans as $p): ?>
                    <tr>
                        <td><?= $p['id_peminjaman'] ?></td>
                        <td><?= htmlspecialchars($p['nama_member']) ?></td>
                        <td><?= htmlspecialchars($p['judul_buku']) ?></td>
                        <td><?= $p['tgl_pinjam'] ?></td>
                        <td><?= $p['tgl_kembali'] ?></td>
                        <td>
                            <a href="/Modul-5/peminjaman/delete?id=<?= $p['id_peminjaman'] ?>" onclick="return confirm('Yakin hapus?')" class="btn btn-delete">Hapus</a>
                            <a href="/Modul-5/peminjaman/edit?id=<?= $p['id_peminjaman'] ?>" class="btn btn-edit">Ubah</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="6">Belum ada data.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</body>
</html>
