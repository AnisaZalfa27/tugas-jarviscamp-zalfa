<?php


function tampilkan_angka_ganjil($awal, $akhir) {
    echo "Angka ganjil antara $awal dan $akhir adalah: ";
    for ($i = $awal; $i <= $akhir; $i++) {
        if ($i % 2 != 0) {
            echo $i . " ";
        }
    }
}

function tampilkan_angka_genap($awal, $akhir) {
    echo "Angka genap antara $awal dan $akhir adalah: ";
    for ($i = $awal; $i <= $akhir; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}

// Contoh penggunaan:
$awal = 1;
$akhir = 20;

tampilkan_angka_ganjil($awal, $akhir);
tampilkan_angka_genap($awal, $akhir);


?>