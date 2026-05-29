<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Member</title>
    <?php $base_url = str_replace('/public/index.php', '', $_SERVER['SCRIPT_NAME']); ?>
    <link rel="stylesheet" href="<?= $base_url ?>/style.css">
</head>
<body class="table-layout">

    <div class="content">
        <div class="page-header">
            <h1>Daftar Member Perpustakaan Azri</h1>
            <div class="header-actions">
                <a href="<?= $base_url ?>/member/create" class="btn btn-add-data">Tambah Data Member</a>
                <a href="<?= $base_url ?>/" class="btn btn-back">Kembali</a>
            </div>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th>ID Member</th>
                    <th>Nama</th>
                    <th>Nomor Member</th>
                    <th>Alamat</th>
                    <th>Tgl Mendaftar</th>
                    <th>Tgl Terakhir Bayar</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($members)): ?>
                    <?php foreach($members as $m): ?>
                    <tr>
                        <td><?= $m['id_member'] ?></td>
                        <td><?= htmlspecialchars($m['nama_member']) ?></td>
                        <td><?= htmlspecialchars($m['nomor_member']) ?></td>
                        <td><?= htmlspecialchars($m['alamat']) ?></td>
                        <td><?= $m['tgl_mendaftar'] ?></td>
                        <td><?= $m['tgl_terakhir_bayar'] ?></td>
                        <td>
                            <a href="/Modul-5/member/delete?id=<?= $m['id_member'] ?>" onclick="return confirm('Yakin hapus?')" class="btn btn-delete">Hapus</a>
                            <a href="/Modul-5/member/edit?id=<?= $m['id_member'] ?>" class="btn btn-edit">Ubah</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="7">Belum ada data.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</body>
</html>
