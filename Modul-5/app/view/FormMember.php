<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Member</title>
    <?php $base_url = str_replace('/public/index.php', '', $_SERVER['SCRIPT_NAME']); ?>
    <link rel="stylesheet" href="<?= $base_url ?>/style.css">
</head>
<body class="form-layout">

    <header>
        <h2>Perpustakaan Azri</h2>
        <a href="/Modul-5/member" class="btn-back">Kembali</a>
    </header>

    <div class="container">
        <div class="form-area">
            <h1><?= isset($member) ? 'Ada yang perlu diganti di<br>Data Member?' : 'Form Penambahan Member<br>Perpustakaan Azri' ?></h1>
            
            <form action="/Modul-5/member/<?= isset($member) ? 'update' : 'store' ?>" method="POST">
                <?php if(isset($member)): ?>
                    <input type="hidden" name="id_member" value="<?= $member['id_member'] ?>">
                <?php endif; ?>
                
                <div class="form-group">
                    <label>Nama Member:</label>
                    <input type="text" name="nama_member" value="<?= isset($member) ? htmlspecialchars($member['nama_member']) : '' ?>" required>
                </div>
                
                <div class="form-group">
                    <label>Nomor Member:</label>
                    <input type="text" name="nomor_member" value="<?= isset($member) ? htmlspecialchars($member['nomor_member']) : '' ?>" required>
                </div>
                
                <div class="form-group">
                    <label>Alamat:</label>
                    <textarea name="alamat" rows="3" required><?= isset($member) ? htmlspecialchars($member['alamat']) : '' ?></textarea>
                </div>
                
                <div class="form-group">
                    <label>Tgl Mendaftar:</label>
                    <input type="datetime-local" name="tgl_mendaftar" value="<?= isset($member) ? date('Y-m-d\TH:i', strtotime($member['tgl_mendaftar'])) : '' ?>" required>
                </div>
                
                <div class="form-group">
                    <label>Tgl Terakhir Bayar:</label>
                    <input type="date" name="tgl_terakhir_bayar" value="<?= isset($member) ? $member['tgl_terakhir_bayar'] : '' ?>" required>
                </div>
                
                <button type="submit" class="btn-submit"><?= isset($member) ? 'Ubah Data' : 'Tambah Data' ?></button>
            </form>
        </div>
    </div>

    <script>
        const tglMendaftar = document.querySelector('input[name="tgl_mendaftar"]');
        const tglTerakhirBayar = document.querySelector('input[name="tgl_terakhir_bayar"]');

        function updateMinDate() {
            if (tglMendaftar.value) {
                const dateOnly = tglMendaftar.value.split('T')[0];
                tglTerakhirBayar.min = dateOnly;
                
                if (tglTerakhirBayar.value && tglTerakhirBayar.value < dateOnly) {
                    tglTerakhirBayar.value = '';
                }
            }
        }

        tglMendaftar.addEventListener('change', updateMinDate);
        updateMinDate();
    </script>

</body>
</html>
