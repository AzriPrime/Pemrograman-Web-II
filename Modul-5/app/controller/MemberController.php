<?php

namespace App\controller;

require_once __DIR__ . '/../model/Model.php';

class MemberController
{
    public function index()
    {
        $members = getMember();
        require __DIR__ . '/../view/Member.php';
    }

    public function create()
    {
        require __DIR__ . '/../view/FormMember.php';
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tgl_mendaftar = date('Y-m-d', strtotime($_POST['tgl_mendaftar']));
            $tgl_terakhir_bayar = date('Y-m-d', strtotime($_POST['tgl_terakhir_bayar']));

            if ($tgl_terakhir_bayar < $tgl_mendaftar) {
                echo "<script>alert('Gagal: Tanggal terakhir bayar tidak boleh lebih awal dari tanggal mendaftar!'); history.back();</script>";
                exit;
            }

            insertMember($_POST);
            header("Location: /Modul-5/member");
            exit;
        }
    }

    public function edit()
    {
        if (isset($_GET['id'])) {
            $member = getMemberById($_GET['id']);
            require __DIR__ . '/../view/FormMember.php';
        }
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_member'])) {
            $tgl_mendaftar = date('Y-m-d', strtotime($_POST['tgl_mendaftar']));
            $tgl_terakhir_bayar = date('Y-m-d', strtotime($_POST['tgl_terakhir_bayar']));

            if ($tgl_terakhir_bayar < $tgl_mendaftar) {
                echo "<script>alert('Gagal: Tanggal terakhir bayar tidak boleh lebih awal dari tanggal mendaftar!'); history.back();</script>";
                exit;
            }

            $id = $_POST['id_member'];
            updateMember($id, $_POST);
            header("Location: /Modul-5/member");
            exit;
        }
    }

    public function delete()
    {
        if (isset($_GET['id'])) {
            deleteMember($_GET['id']);
            header("Location: /Modul-5/member");
            exit;
        }
    }
}
