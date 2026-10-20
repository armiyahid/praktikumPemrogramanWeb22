<?php
class Mahasiswa
{
    public $nim;
    public $nama;
    public $prodi;
    public $nilai;

    public function tampilkanData()
    {
        echo "NIM : " . $this->nim . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Prodi : " . $this->prodi . "<br>";
        echo "Nilai : " . $this->nilai . "<br>";
        echo "Grade : " . $this->tentukanGrade() . "<br>";
    }

    public function tentukanGrade()
    {
        if ($this->nilai >= 80) {
            return "A";
        } elseif ($this->nilai >= 70) {
            return "B";
        } elseif ($this->nilai >= 60) {
            return "C";
        } elseif ($this->nilai >= 50) {
            return "D";
        } else {
            return "E";
        }
    }
}

$mhs1 = new Mahasiswa();
$mhs1->nim = "24001";
$mhs1->nama = "Andi";
$mhs1->prodi = "Sistem Informasi";
$mhs1->nilai = 85;

$mhs2 = new Mahasiswa();
$mhs2->nim = "24002";
$mhs2->nama = "Budi";
$mhs2->prodi = "Sistem Informasi";
$mhs2->nilai = 58;

echo "<h2>Data Nilai Mahasiswa 1</h2>";
$mhs1->tampilkanData();

echo "<h2>Data Nilai Mahasiswa 2</h2>";
$mhs2->tampilkanData();
?>