<?php
class Produk {
    public $kode;
    public $nama;
    public $harga;
    public $stok;
    public $diskon;

    public function __construct($kode, $nama, $harga, $stok, $diskon) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
        $this->diskon = $diskon;
    }
    public function hitungNilaiStok() {
        return $this->harga * $this->stok;
    }
    public function hitungDiskon() {
        return $this->harga * $this->diskon / 100;
    }
    public function hargaSetelahDiskon() {
        return $this->harga - $this->hitungDiskon();
    }
    public function restock($jumlah) {
        $this->stok += $jumlah;
    }
    public function tampilkanData() {
        echo "Kode Produk : " . $this->kode . "<br>";
        echo "Nama Produk : " . $this->nama . "<br>";
        echo "Harga : Rp" . number_format($this->harga, 0, ',', '.') . "<br>";
        echo "Stok : " . $this->stok . "<br>";
        echo "Diskon : " . $this->diskon . "%<br>";
        echo "Nilai Stok : Rp" . number_format($this->hitungNilaiStok(), 0, ',', '.') . "<br>";
        echo "Potongan Diskon : Rp" . number_format($this->hitungDiskon(), 0, ',', '.') . "<br>";
        echo "Harga Setelah Diskon : Rp" . number_format($this->hargaSetelahDiskon(), 0, ',', '.') . "<br>";
    }
}
$produk1 = new Produk("P001", "Laptop", 7000000, 10, 10);
$produk2 = new Produk("P002", "Mouse", 150000, 25, 5);

$produk1->restock(5);
$produk2->restock(10);

echo "<h3>Data Produk 1</h3>";
$produk1->tampilkanData();

echo "<br>";

echo "<h3>Data Produk 2</h3>";
$produk2->tampilkanData();
?>