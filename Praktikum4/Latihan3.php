<?php

class Mahasiswa {
  public $nama;
  public $prodi;

  public function __construct($nama, $prodi) {
    $this->nama = $nama;
    $this->prodi = $prodi; 
  }
  public function tampilkanData(){
    echo "Nama : ".$this->nama . "<br>";
    echo "Program Studi : " .$this->prodi . "<br>";
  }
}

$mhs1 = new Mahasiswa ( "Agus", "Sistem Informasi");
$mhs2 = new Mahasiswa ( "Prengki", "Teknik Industri");

$mhs1-> tampilkanData();
echo "<hr>";
$mhs2-> tampilkanData();

?>