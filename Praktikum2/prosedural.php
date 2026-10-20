<?php 

$nim = "202457201038";
$nama = "Muhammad Armiya Ahid";
$prodi = "Sistem Informasi";
$semester = 4;

function tampilkanData($nim, $nama, $prodi, $semester)
{
    echo "NIM : " . $nim . "<br>";
    echo "Nama : " . $nama . "<br>";
    echo "Prodi : " . $prodi . "<br>";
    echo "Semester : " . $semester . "<br>";
}

tampilkanData($nim, $nama, $prodi, $semester);

?>
