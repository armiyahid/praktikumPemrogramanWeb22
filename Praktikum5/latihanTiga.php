<?php
class Mahasiswa{
  private $nim;
  private $nama;
  private$prodi;

  public function __construct($nim, $nama, $prodi){
    $this->nim = $nim;
    $this->nama = $nama;
    $this->prodi = $prodi;

  }
  public function getNim(){
    return $this->nim;
  }
  public function getNama(){
    return $this->nama;
  }
  public function getProdi(){
    return $this->prodi;
  }

}

$mhs1 = new Mahasiswa("202457201038", "Muhaammad Armiya Ahid", "Sistem informasi");

echo "NIM : " .$mhs1->getNim() . "<br>";
echo "Nama : " .$mhs1->getNama() . "<br>";
echo "Program Studi : " .$mhs1->getProdi() . "<br>";
?>