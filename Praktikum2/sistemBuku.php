<?php
class databuku{
  public $kodeBuku;
  public $judul;
  public $penulis;
  public $tahunTerbit;

  public function tampilkanData(){
    echo "Kode buku :".$this->kodeBuku."<br>";
    echo "Judul :".$this->judul."<br>";
    echo "Penulis :".$this->penulis."<br>";
    echo "Tahun terbit :".$this->tahunTerbit."<br><br>";
  }
}
$dataBuku= new dataBuku();

$dataBuku->kodeBuku="001";
$dataBuku->judul="Maling Kundang";
$dataBuku->penulis="Ilham Muzaky";
$dataBuku->tahunTerbit="1985";

$dataBuku->tampilkanData();

$dataBuku1= new dataBuku();

$dataBuku1->kodeBuku="002";
$dataBuku1->judul="Islam Ala Rahul";
$dataBuku1->penulis="Rahul";
$dataBuku1->tahunTerbit="1986";

$dataBuku1->tampilkanData();

$dataBuku2= new dataBuku();

$dataBuku2->kodeBuku="003";
$dataBuku2->judul="Riyadlus Sholihiin";
$dataBuku2->penulis="Andus";
$dataBuku2->tahunTerbit="1945";

$dataBuku2->tampilkanData();

?>