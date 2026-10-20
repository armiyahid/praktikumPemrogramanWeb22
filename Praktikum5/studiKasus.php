<?php
class Mahasiswa{
  private $nim;
  private $nama;
  private $prodi;
  private $semester;
  private $nilai;

  public function __construct($nim, $nama, $prodi, $semester){
    $this->nim = $nim;
    $this->nama = $nama;
    $this->prodi = $prodi;
    $this->semester = $semester;
  }
  public function setNilai($nilai){
    if (is_numeric($nilai) && $nilai >= 0 && $nilai <= 100){
      $this->nilai = $nilai;
    } else {
      echo "Nilai tidak valid.<br>";
    }
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
  public function getSemester(){
    return $this->semester;
  }
  public function getNilai(){
    return $this->nilai;
  }
  public function tentukanGrade(){
    if ($this->nilai === null){
      return "-";
    }
    if ($this->nilai >= 90){
      return "A+";
    } else if ($this->nilai >= 80) {
      return "A";
    } else if ($this->nilai >= 70) {
      return "B";
    } else if ($this->nilai >= 60) {
      return "C";
    } else if ($this->nilai >= 50) {
      return "D";
    } else {
      return "E";
    }
  }
}
$mhs1 = new Mahasiswa("2301001", "Andi", "Sistem Informasi", 3);
$mhs1->setNilai(-1);

echo "<strong>KARTU HASIL STUDI MHS 1</strong> <br>";
echo "NIM : " .$mhs1->getNim() . "<br>";
echo "Nama Mahasiswa : " .$mhs1->getNama() . "<br>";
echo "Program Studi : " .$mhs1->getProdi() . "<br>";
echo "Semester : " .$mhs1->getSemester() . "<br>";
echo "Nilai : " .$mhs1->getNilai() . "<br>";
echo "Grade : " .$mhs1->tentukanGrade() ."<br></br>";

$mhs2 = new Mahasiswa("2301001", "Agus", "Sistem Informasi", 3);
$mhs2->setNilai(100);

echo "<strong>KARTU HASIL STUDI MHS 2</strong> <br>";
echo "NIM : " .$mhs2->getNim() . "<br>";
echo "Nama Mahasiswa : " .$mhs2->getNama() . "<br>";
echo "Program Studi : " .$mhs2->getProdi() . "<br>";
echo "Semester : " .$mhs2->getSemester() . "<br>";
echo "Nilai : " .$mhs2->getNilai() . "<br>";
echo "Grade : " .$mhs2->tentukanGrade();

?>