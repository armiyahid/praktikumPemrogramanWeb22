<?php

class Kendaraan {
    public $platNomor;
    public $merk;    public $hargaSewaPerHari;

    public function __construct($platNomor, $merk, $hargaSewaPerHari) {
        $this->platNomor = $platNomor;
        $this->merk = $merk;
        $this->hargaSewaPerHari = $hargaSewaPerHari;
    }

    public function tampilkanData() {
        return "Kendaraan: {$this->merk} | Plat: {$this->platNomor} | Tarif/Hari: Rp " . number_format($this->hargaSewaPerHari, 0, ',', '.');
    }

    public function hitungTotalSewa($jumlahHari) {
        return $this->hargaSewaPerHari * $jumlahHari;
    }
}

class Pelanggan {
    public $idPelanggan;
    public $nama;
    public $nomorTelepon;

    public function __construct($idPelanggan, $nama, $nomorTelepon) {
        $this->idPelanggan = $idPelanggan;
        $this->nama = $nama;
        $this->nomorTelepon = $nomorTelepon;
    }

    public function tampilkanData() {
        return "Pelanggan [{$this->idPelanggan}]: {$this->nama} (Telp: {$this->nomorTelepon})";
    }

    public function sewaKendaraan($kendaraan, $jumlahHari) {
        $total = $kendaraan->hitungTotalSewa($jumlahHari);
        echo "{$this->nama} menyewa kendaraan {$kendaraan->merk} ({$kendaraan->platNomor}) selama {$jumlahHari} hari.<br>";
        echo "Total Biaya Sewa: Rp " . number_format($total, 0, ',', '.') . "<br>";
    }
}

// --- Instansiasi Object ---

// Object 1: Kendaraan
$mobil1 = new Kendaraan("B 1234 ABC", "Toyota Avanza", 350000);
$mobil2 = new Kendaraan("D 5678 XYZ", "Honda CR-V", 600000);

// Object 2: Pelanggan
$pelanggan1 = new Pelanggan("P001", "Budi Santoso", "081234567890");
$pelanggan2 = new Pelanggan("P002", "Siti Rahma", "089876543210");

// Menampilkan Data
echo "<h3>--- Info Kendaraan ---</h3>";
echo $mobil1->tampilkanData() . "<br>";
echo $mobil2->tampilkanData() . "<br><br>";

echo "<h3>--- Info Pelanggan ---</h3>";
echo $pelanggan1->tampilkanData() . "<br>";
echo $pelanggan2->tampilkanData() . "<br><br>";

echo "<h3>--- Transaksi Rental ---</h3>";
$pelanggan1->sewaKendaraan($mobil1, 5);
echo "<br>";
$pelanggan2->sewaKendaraan($mobil2, 7);

?>