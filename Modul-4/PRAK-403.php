<?php
$data_krs = [
    "Ridho" => [
        "matakuliah" => [
            ["nama_mk" => "Pemrograman I", "sks" => 2],
            ["nama_mk" => "Praktikum Pemrograman I", "sks" => 1],
            ["nama_mk" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
            ["nama_mk" => "Arsitektur Komputer", "sks" => 3]
        ]
    ],
    "Ratna" => [
        "matakuliah" => [
            ["nama_mk" => "Basis Data I", "sks" => 2],
            ["nama_mk" => "Praktikum Basis Data I", "sks" => 1],
            ["nama_mk" => "Kalkulus", "sks" => 3]
        ]
    ],
    "Tono" => [
        "matakuliah" => [
            ["nama_mk" => "Rekayasa Perangkat Lunak", "sks" => 3],
            ["nama_mk" => "Analisis dan Perancangan Sistem", "sks" => 3],
            ["nama_mk" => "Komputasi Awan", "sks" => 3],
            ["nama_mk" => "Kecerdasan Bisnis", "sks" => 3]
        ]
    ]
];

echo "<table border='1' style='border-collapse: collapse' cellpadding='10'>
      <thead style='background-color: #cccccc;'>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Mata Kuliah Diambil</th>
        <th>SKS</th>
        <th>Total SKS</th>
        <th>Keterangan</th>
      </tr>
    </thead>
    <tbody>";

$no = 1;
foreach ($data_krs as $nama => $data) {
    $matakuliah = $data['matakuliah'];
    $total_sks = 0;

    $mk_list = "";
    $sks_list = "";

    foreach ($matakuliah as $mk) {
        $total_sks += $mk['sks'];
    }

    if ($total_sks < 7) {
        $keterangan = "Revisi KRS";
        $bg_warna   = "#900D09";
    } else {
        $keterangan = "Tidak Revisi";
        $bg_warna   = "#0B6623";
    }

    $mk_pertama = $matakuliah[0]['nama_mk'];
    $sks_pertama = $matakuliah[0]['sks'];

    echo "<tr>";
    echo "<td align='center'>$no</td>";
    echo "<td>$nama</td>";
    echo "<td>$mk_pertama</td>";
    echo "<td>$sks_pertama</td>";
    echo "<td>$total_sks</td>";
    echo "<td style='background-color: $bg_warna;' align='center'>$keterangan</td>";
    echo "</tr>";

    foreach ($matakuliah as $index => $mk) {
        if ($index === 0) {
            continue;
        }

        echo "<tr>";
        echo "<td></td>"; 
        echo "<td></td>";
        echo "<td>" . $mk['nama_mk'] . "</td>";
        echo "<td>" . $mk['sks'] . "</td>";
        echo "<td></td>";
        echo "<td></td>"; 
        echo "</tr>";
    }

    $no++;
}
;