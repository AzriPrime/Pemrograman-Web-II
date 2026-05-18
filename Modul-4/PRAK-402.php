<?php
$data_mahasiswa = [
    "2101001" => [
        "nama" => "Andi",
        "uts"  => 87,
        "uas"  => 65
    ],
    "2101002" => [
        "nama" => "Budi",
        "uts"  => 76,
        "uas"  => 79
    ],
    "2101003" => [
        "nama" => "Tono",
        "uts"  => 50,
        "uas"  => 41
    ],
    "2101004" => [
        "nama" => "Jessica",
        "uts"  => 60,
        "uas"  => 75
    ]
];

echo "<table border='1' style='border-collapse: collapse' cellpadding='10'>";
echo "<thead style='background-color: #cccccc;'>";
echo "<tr>";
echo "<th>NIM</th>";
echo "<th>Nama</th>";
echo "<th>Nilai UTS</th>";
echo "<th>Nilai UAS</th>";
echo "<th>Nilai Akhir</th>";
echo "<th>Kategori</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

foreach ($data_mahasiswa as $nim => $data) {
    $nama = $data['nama'];
    $uts = $data['uts'];
    $uas = $data['uas'];
    $nilai_akhir = ($data['uts'] * 0.4) + ($data['uas'] * 0.6);
    $kategori = KategoriNilai($nilai_akhir);

    echo "<tr>";
    echo "<td>$nama</td>";
    echo "<td>$nim</td>";
    echo "<td>$uts</td>";
    echo "<td>$uas</td>";
    echo "<td>$nilai_akhir</td>";
    echo "<td>$kategori</td>";
    echo "</tr>";
}

function KategoriNilai($nilai_akhir) {
          if ($nilai_akhir >= 80) {
              return "A";
          } elseif ($nilai_akhir >= 70) {
              return "B";
          } elseif ($nilai_akhir >= 60) {
              return "C";
          } elseif ($nilai_akhir >= 50) {
              return "D";
          } else {
              return "E";
          }
}
?>