<?php

namespace App\Models;

class Profile
{
    private array $studentInfo = [
        'nama'       => 'Muhammad Azri Rahman',
        'nim'        => '2410817110016',
        'asal_prodi' => 'Teknologi Informasi',
        'hobi'       => 'Coding, Membaca Komik (Manga/Manhwa), Bermain Game',
        'skill'      => 'Web Development, Mobile App Development, System Analyst',
        'gambar'     => 'images/PASFOTO-BGMERAH.jpg'
    ];

    private array $experiences = [
        [
            'id'          => 1,
            'title'       => 'Webinar Desain Aplikasi Al-Quran 2025',
            'description' => 'Ketua Pelaksana dalam webinar yang membahas tentang desain aplikasi Al-Quran untuk memudahkan akses dan pembelajaran bagi pengguna. Saya bertanggung jawab dalam merancang UI/UX serta menyampaikan materi tentang pentingnya desain yang user-friendly.',
            'time'        => 'Oktober 2025',
            'image'       => 'images/exp1.jpg',
            'impression'  => 'Pengalaman pertama kali memimpin sebuah acara besar memberikan banyak pelajaran tentang manajemen acara, komunikasi, dan pentingnya kerja sama tim untuk mencapai kesuksesan bersama.'
        ],
        [
            'id'          => 2,
            'title'       => 'VEND IT 2025',
            'description' => 'Menjadi Koor PDD (kebanyakan bingung dan overthinking), Vend IT adalah acara tahunan yang diadakan HMTI untuk maba',
            'time'        => 'September 2025',
            'image'       => 'images/exp2.jpg',
            'impression'  => 'Pengalaman yang sangat baru dan membingungkan serta banyak miskom'
        ],
        [
            'id'          => 3,
            'title'       => 'Webinar Kewirausahaan HMTI 2025',
            'description' => 'enjadi anggota PDD dalam webinar yang membahas tentang kewirausahaan di bidang teknologi.',
            'time'        => 'July 2025',
            'image'       => 'images/exp3.jpg',
            'impression'  => 'Mendapatkan wawasan baru tentang dunia kewirausahaan serta belajar bagaimana memulai dan mengelola bisnis di era digital yang terus berkembang.'
        ],
        [
            'id'          => 4,
            'title'       => 'Opening IT FEST 2025',
            'description' => 'Menjadi anggota PDD dalam acara pembukaan IT FEST 2025, sebuah festival teknologi yang menampilkan berbagai inovasi dan kreativitas dari mahasiswa.',
            'time'        => 'Mei 2026',
            'image'       => 'images/exp4.jpg',
            'impression'  => 'Pengalaman yang capek dan biasa aja'
        ]
    ];

    public function getStudentInfo(): array
    {
        return $this->studentInfo;
    }

    public function getExperiences(): array
    {
        return $this->experiences;
    }

    public function getExperienceById($id)
    {
        foreach ($this->experiences as $exp) {
            if ($exp['id'] == $id) {
                return $exp;
            }
        }
        return null;
    }
}
