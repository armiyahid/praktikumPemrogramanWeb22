<?php
class Pengguna {
  public $nama;
  public $email;

  public function tampilkanData(){
    echo "Nama : ". $this->nama . "<br>";
    echo "Email : ". $this->email . "<br>";
  }
}

$pengguna1 = new Pengguna();

$pengguna1->nama = "Andi";
$pengguna1->email = "andi@gmail.com";

$pengguna1->tampilkanData();

?>