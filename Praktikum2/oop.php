<?php
class Mahasiswa
{
  public $nim;
  public $nama;
  public $prodi;
  public $semester;

public function tampilkanData(){
  echo "NIM :" . $this->nim."<br>";
  echo "Nama Mahasiswa :" . $this->nama."<br>";
  echo "Prodi :" . $this->prodi."<br>";
  echo "Semester :" . $this->semester."<br><br>"; 
  }
}

$mhs1 = new Mahasiswa();

$mhs1->nim = "20245201038";
$mhs1->nama = "Muhamaad Armiya Ahid";
$mhs1->prodi = "Sistem Informasi";
$mhs1->semester = 5;

$mhs1->tampilkanData();

$mhs2 = new Mahasiswa();

$mhs2->nim = "20245201037";
$mhs2->nama = "Sutekno";
$mhs2->prodi = "Sistem Informasi";
$mhs2->semester = 5;

$mhs2->tampilkanData();

?>

