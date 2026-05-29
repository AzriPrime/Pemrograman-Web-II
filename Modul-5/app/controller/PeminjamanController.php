<?php

namespace App\controller;

require_once __DIR__ . '/../model/Model.php';

class PeminjamanController
{
    public function index()
    {
        $peminjamans = getPeminjaman();
        require __DIR__ . '/../view/Peminjaman.php';
    }

    public function create()
    {
        $members = getMember();
        $bukus = getBuku();
        require __DIR__ . '/../view/FormPeminjaman.php';
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            insertPeminjaman($_POST);
            header("Location: /Modul-5/peminjaman");
            exit;
        }
    }

    public function edit()
    {
        if (isset($_GET['id'])) {
            $peminjaman = getPeminjamanById($_GET['id']);
            $members = getMember();
            $bukus = getBuku();
            require __DIR__ . '/../view/FormPeminjaman.php';
        }
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_peminjaman'])) {
            $id = $_POST['id_peminjaman'];
            updatePeminjaman($id, $_POST);
            header("Location: /Modul-5/peminjaman");
            exit;
        }
    }

    public function delete()
    {
        if (isset($_GET['id'])) {
            deletePeminjaman($_GET['id']);
            header("Location: /Modul-5/peminjaman");
            exit;
        }
    }
}
