<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <?php $base_url = str_replace('/public/index.php', '', $_SERVER['SCRIPT_NAME']); ?>
    <link rel="stylesheet" href="<?= $base_url ?>/style.css">
</head>
<body class="table-layout">

    <div class="content">
        <div class="page-header">
            <h1>Daftar Buku Perpustakaan Azri</h1>
            <div class="header-actions">
                <a href="<?= $base_url ?>/buku/create" class="btn btn-add-data">Tambah Data Buku</a>
                <a href="<?= $base_url ?>/" class="btn btn-back">Kembali</a>
            </div>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th>ID Buku</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($bukus)): ?>
                    <?php foreach($bukus as $b): ?>
                    <tr>
                        <td><?= $b['id_buku'] ?></td>
                        <td><?= htmlspecialchars($b['judul_buku']) ?></td>
                        <td><?= htmlspecialchars($b['penulis']) ?></td>
                        <td><?= htmlspecialchars($b['penerbit']) ?></td>
                        <td><?= $b['tahun_terbit'] ?></td>
                        <td>
                            <a href="<?= $base_url ?>/buku/delete?id=<?= $b['id_buku'] ?>" onclick="return confirm('Yakin hapus?')" class="btn btn-delete" title="Hapus"><img src="<?= $base_url ?>/icons/trash.svg" width="16" height="16" alt="Hapus"></a>
                            <a href="<?= $base_url ?>/buku/edit?id=<?= $b['id_buku'] ?>" class="btn btn-edit" title="Ubah"><img src="<?= $base_url ?>/icons/wrench.svg" width="16" height="16" alt="Ubah"></a>
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
