
<?php
class Pengguna {
    protected $nama;
    protected $email;
    protected $alamat;

    public function __construct($nama, $email, $alamat) {
        $this->nama = $nama;
        $this->email = $email;
        $this->alamat = $alamat;
    }

    public function tampilkanData() {
        echo "Nama   : " . $this->nama . "<br>";
        echo "Email  : " . $this->email . "<br>";
        echo "Alamat : " . $this->alamat . "<br>";
    }

    public function tampilkanPeran() {
        echo "Peran : Pengguna Sistem Informasi Akademik<br>";
    }
}

class Administrasi extends Pengguna {
    private $idPegawai;
    private $bagian;

    public function __construct(
        $nama,
        $email,
        $alamat,
        $idPegawai,
        $bagian
    ) {
        parent::__construct($nama, $email, $alamat);

        $this->idPegawai = $idPegawai;
        $this->bagian = $bagian;
    }

    public function tampilkanData() {
        echo "<h3>Data Tenaga Administrasi</h3>";

        parent::tampilkanData();

        echo "ID Pegawai : " . $this->idPegawai . "<br>";
        echo "Bagian     : " . $this->bagian . "<br>";
    }

    public function tampilkanPeran() {
        echo "Peran : Mengelola administrasi akademik, "
           . "dokumen, dan data mahasiswa.<br>";
    }
}

$admin = new Administrasi(
    "Andi Saputra",
    "andi@gmail.com",
    "Kediri",
    "ADM001",
    "Administrasi Akademik"
);

echo "<h2>Sistem Informasi Akademik</h2>";

$admin->tampilkanData();

echo "<br>";
$admin->tampilkanPeran();

?>
