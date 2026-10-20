<?php

class Mahasiswa
{
  public $nama;
  private $nilai;

  public function setNama($nama)
  {
    $this->nama = $nama;
  }

}

$mhs1 = new Mahasiswa();
$mhs1->nilai = 90;

echo "Nama : " . $mhs1->nama;

?>