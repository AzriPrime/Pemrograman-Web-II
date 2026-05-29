<?php
require_once 'Koneksi.php';

//  MEMBER  //
function getMember() {
    $pdo = getKoneksi();
    $stmt = $pdo->query("SELECT * FROM member ORDER BY id_member ASC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getMemberById($id) {
    $pdo = getKoneksi();
    $stmt = $pdo->prepare("SELECT * FROM member WHERE id_member = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function insertMember($data) {
    $pdo = getKoneksi();
    $stmt = $pdo->prepare("INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) VALUES (?, ?, ?, ?, ?)");
    return $stmt->execute([$data['nama_member'], $data['nomor_member'], $data['alamat'], $data['tgl_mendaftar'], $data['tgl_terakhir_bayar']]);
}

function updateMember($id, $data) {
    $pdo = getKoneksi();
    $stmt = $pdo->prepare("UPDATE member SET nama_member=?, nomor_member=?, alamat=?, tgl_mendaftar=?, tgl_terakhir_bayar=? WHERE id_member=?");
    return $stmt->execute([$data['nama_member'], $data['nomor_member'], $data['alamat'], $data['tgl_mendaftar'], $data['tgl_terakhir_bayar'], $id]);
}

function deleteMember($id) {
    $pdo = getKoneksi();
    $stmt = $pdo->prepare("DELETE FROM member WHERE id_member = ?");
    return $stmt->execute([$id]);
}

//  BUKU  //
function getBuku() {
    $pdo = getKoneksi();
    $stmt = $pdo->query("SELECT * FROM buku ORDER BY id_buku ASC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getBukuById($id) {
    $pdo = getKoneksi();
    $stmt = $pdo->prepare("SELECT * FROM buku WHERE id_buku = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function insertBuku($data) {
    $pdo = getKoneksi();
    $stmt = $pdo->prepare("INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) VALUES (?, ?, ?, ?)");
    return $stmt->execute([$data['judul_buku'], $data['penulis'], $data['penerbit'], $data['tahun_terbit']]);
}

function updateBuku($id, $data) {
    $pdo = getKoneksi();
    $stmt = $pdo->prepare("UPDATE buku SET judul_buku=?, penulis=?, penerbit=?, tahun_terbit=? WHERE id_buku=?");
    return $stmt->execute([$data['judul_buku'], $data['penulis'], $data['penerbit'], $data['tahun_terbit'], $id]);
}

function deleteBuku($id) {
    $pdo = getKoneksi();
    $stmt = $pdo->prepare("DELETE FROM buku WHERE id_buku = ?");
    return $stmt->execute([$id]);
}

//  PEMINJAMAN  //
function getPeminjaman() {
    $pdo = getKoneksi();
    // Join with member and buku to get names instead of just IDs
    $sql = "SELECT p.*, m.nama_member, b.judul_buku 
            FROM peminjaman p
            JOIN member m ON p.id_member = m.id_member
            JOIN buku b ON p.id_buku = b.id_buku
            ORDER BY p.id_peminjaman ASC";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getPeminjamanById($id) {
    $pdo = getKoneksi();
    $stmt = $pdo->prepare("SELECT * FROM peminjaman WHERE id_peminjaman = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function insertPeminjaman($data) {
    $pdo = getKoneksi();
    $stmt = $pdo->prepare("INSERT INTO peminjaman (id_member, id_buku, tgl_pinjam, tgl_kembali) VALUES (?, ?, ?, ?)");
    return $stmt->execute([$data['id_member'], $data['id_buku'], $data['tgl_pinjam'], $data['tgl_kembali']]);
}

function updatePeminjaman($id, $data) {
    $pdo = getKoneksi();
    $stmt = $pdo->prepare("UPDATE peminjaman SET id_member=?, id_buku=?, tgl_pinjam=?, tgl_kembali=? WHERE id_peminjaman=?");
    return $stmt->execute([$data['id_member'], $data['id_buku'], $data['tgl_pinjam'], $data['tgl_kembali'], $id]);
}

function deletePeminjaman($id) {
    $pdo = getKoneksi();
    $stmt = $pdo->prepare("DELETE FROM peminjaman WHERE id_peminjaman = ?");
    return $stmt->execute([$id]);
}
