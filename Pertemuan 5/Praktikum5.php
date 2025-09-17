<?php

// class induknya
class Employee {
    public $nama;
    public $gaji;
    public $masakerja;

    function __construct($nama, $gaji, $masakerja) {
        $this->nama = $nama;
        $this->gaji = $gaji;
        $this->masakerja = $masakerja;
    }

    public function informasi(){
        echo "Nama: $this->nama, Gaji Pokok: Rp $this->gaji, Lama Kerja: $this->masakerja tahun<br>";
    }

    public function hitungGaji() {
        return $this->gaji; 
    }
}

// Class Programmer
class Programmer extends Employee {
    function hitungGaji() {
        $gaji = $this->gaji;

        if ($this->masakerja >= 1 && $this->masakerja <= 10) {
            $gaji += $this->gaji * (0.01 * $this->masakerja);
        } elseif ($this->masakerja > 10) {
            $gaji += $this->gaji * (0.02 * $this->masakerja);
        }
        return $gaji;
    }
}

// Class Direktur
class Direktur extends Employee {
    function hitungGaji() {
        $gaji = $this->gaji;
        $gaji += $this->gaji * (0.5 * $this->masakerja);
        $gaji += $this->gaji * (0.1 * $this->masakerja);
        return $gaji;
    }
}

// Class Pegawai Mingguan
class PegawaiMingguan extends Employee {
    public $hargaBarang;
    public $stok;

    public function __construct($nama, $gaji, $hargaBarang, $stok) {
        parent::__construct($nama, $gaji, 0); // masa kerja ga dipake
        $this->hargaBarang = $hargaBarang;
        $this->stok = $stok;
    }

    public function informasi(){
        echo "Nama: $this->nama, Gaji Pokok: Rp $this->gaji, Harga Barang: Rp $this->hargaBarang, Stok: $this->stok<br>";
    }

    public function hitungGajiMingguan($penjualan) {
        if ($penjualan > 0.7 * $this->stok) {
            return $this->gaji + (0.1 * $this->hargaBarang * $penjualan);
        } else {
            return $this->gaji + (0.03 * $this->hargaBarang * $penjualan);
        }
    }
}

$prog = new Programmer("Elsa", 5000000, 8);
$prog->informasi();
echo "Total Gaji Programmer: Rp " . $prog->hitungGaji() . "<br><br>";

$dir = new Direktur("Diva", 10000000, 5);
$dir->informasi();
echo "Total Gaji Direktur: Rp " . $dir->hitungGaji() . "<br><br>";

$peg = new PegawaiMingguan("Bunga", 2000000, 50000, 100);
$penjualan = 80;
$peg->informasi();
echo "Total Gaji Pegawai Mingguan: Rp " . $peg->hitungGajiMingguan($penjualan) . "<br>";
?>