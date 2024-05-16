<?php


function tambah($angka1, $angka2) {
    return $angka1 + $angka2;
}

function kurang($angka1, $angka2) {
    return $angka1 - $angka2;
}

function bagi($angka1, $angka2) {
    // Validasi untuk pembagian oleh nol
    if ($angka2 == 0) {
        return "Tidak bisa dibagi oleh nol";
    } else {
        return $angka1 / $angka2;
    }
}

function kali($angka1, $angka2) {
    return $angka1 * $angka2;
}

// Contoh penggunaan:
$angka1 = 10;
$angka2 = 5;

echo "Hasil penambahan: " . tambah($angka1, $angka2) . " ";
echo "Hasil pengurangan: " . kurang($angka1, $angka2) . " ";
echo "Hasil pembagian: " . bagi($angka1, $angka2) . " ";
echo "Hasil perkalian: " . kali($angka1, $angka2) . " ";





?>