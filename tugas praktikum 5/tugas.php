<?php
// Class Kendaraan
class Kendaraan {
    // Properti
    public $merk;
    public $model;

    // Konstruktor
    public function __construct($merk, $model) {
        $this->merk = $merk;
        $this->model = $model;
    }

    // Method
    public function getInfo() {
        return "Merk: $this->merk, Model: $this->model";
    }
}

// Class Mobil yang mewarisi Kendaraan
class Mobil extends Kendaraan {
    // Properti baru
    public $jenisBahanBakar;

    // Konstruktor
    public function __construct($merk, $model, $jenisBahanBakar) {
        // Memanggil konstruktor parent
        parent::__construct($merk, $model);
        $this->jenisBahanBakar = $jenisBahanBakar;
    }

    // Method
    public function getFullInfo() {
        $infoKendaraan = $this->getInfo();
        return "$infoKendaraan, Jenis Bahan Bakar: $this->jenisBahanBakar";
    }
}

// Membuat objek dari class Mobil
$mobilSaya = new Mobil("Toyota", "Corolla", "Bensin");
echo $mobilSaya->getFullInfo();
?>