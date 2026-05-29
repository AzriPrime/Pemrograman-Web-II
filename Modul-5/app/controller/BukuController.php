<?php

namespace App\controller;

require_once __DIR__ . '/../model/Model.php';

class BukuController
{
    public function index()
    {
        $bukus = getBuku();
        require __DIR__ . '/../view/Buku.php';
    }

    public function create()
    {
        require __DIR__ . '/../view/FormBuku.php';
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            insertBuku($_POST);
            header("Location: /Modul-5/buku");
            exit;
        }
    }

    public function edit()
    {
        if (isset($_GET['id'])) {
            $buku = getBukuById($_GET['id']);
            require __DIR__ . '/../view/FormBuku.php';
        }
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_buku'])) {
            $id = $_POST['id_buku'];
            updateBuku($id, $_POST);
            header("Location: /Modul-5/buku");
            exit;
        }
    }

    public function delete()
    {
        if (isset($_GET['id'])) {
            deleteBuku($_GET['id']);
            header("Location: /Modul-5/buku");
            exit;
        }
    }
}
