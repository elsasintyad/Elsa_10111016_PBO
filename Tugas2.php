<?php
class Pinjaman {
    public $pinjaman = 1000000;      
    public $bunga = 10;              
    public $lamaAngsuran = 5;        
    public $Telatbrp_hari = 40;          

    // Hitung total pinjaman
    public function totalPinjaman() {
        return $this->pinjaman + ($this->pinjaman * $this->bunga / 100);
    }

    // Hitung angsuran per bulan
    public function angsuranBulanan() {
        return $this->totalPinjaman() / $this->lamaAngsuran;
    }

    // Hitung denda
    public function denda() {
        $dendaPerHari = 0.0015 * $this->angsuranBulanan();
        return $this-> Telatbrp_hari * $dendaPerHari;
    }

    // Total bayar bulan ini
    public function totalBayar() {
        return $this->angsuranBulanan() + $this->denda();
    }
}

$objekangsuran = new Pinjaman();

echo "Total Pinjaman : Rp " . $objekangsuran->totalPinjaman() . "<br>";
echo "Besaran Angsuran : Rp " . $objekangsuran->angsuranBulanan() . "<br>";
echo "Denda Keterlambatan : Rp " . $objekangsuran->denda() . "<br>";
echo "Total Pembayaran : Rp " . $objekangsuran->totalBayar() . "<br>";
?>
