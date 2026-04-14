<?php

/** NIM Akhiran 6 Prisma Alas Segitiga */

$jari_jari = 4.2;
$tinggi    = 5.4;
$panjang   = 8.9;
$lebar     = 14.7;
$sisi      = 7.9;

/**
 * Rumus Volume Prisma Alas Segitiga:
 * V = Luas Alas * Tinggi
 * * Luas Alas = 0.5 * panjang * lebar
 */

$luas_alas = 0.5 * $panjang * $lebar;
$volume = $luas_alas * $tinggi;

echo "Bangun Ruang: Prisma Alas Segitiga\n";
echo "Parameter yang digunakan:\n";
echo "- Panjang (Alas Segitiga): $panjang\n";
echo "- Lebar (Tinggi Segitiga): $lebar\n";
echo "- Tinggi Prisma: $tinggi\n";
echo "\n";
echo "Hasil Volume: " . number_format($volume, 3, '.', '') . " m3\n";