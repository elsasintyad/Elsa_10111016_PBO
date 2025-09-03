<?php
class Pembeli {
    var $kartuMember;
    var $totalBelanja;
    var $diskon;

    function setKartuMember($status) {
        $this->kartuMember = $status;
    }

    function setTotalBelanja($total) {
        $this->totalBelanja = $total;
    }

    function getKartuMember() {
        return $this->kartuMember;
    }

    function getTotalBelanja() {
        return $this->totalBelanja;
    }

    function hitungDiskon() {
        if($this->kartuMember == 'Memiliki') {
            if($this->totalBelanja > 500000) {
                $this->diskon = 50000;
            } elseif($this->totalBelanja > 100000) {
                $this->diskon = 15000;
            } else {
                $this->diskon = 0;
            }
        } else {
            if($this->kartuMember == 'Tidak Memiliki') {
                if($this->totalBelanja > 100000) {
                    $this->diskon = 5000;
                } else {
                    $this->diskon = 0;
                }
                }
        }
    }

    function totalbayar() {
        return $this->totalBelanja - $this->diskon;
    }
}

$pembeli1 = new Pembeli();
$pembeli1->setKartuMember('Memiliki'); 
$pembeli1->setTotalBelanja(200000); 
$pembeli1->hitungDiskon();

echo "-- Pembeli 1 --"; echo "<br>";
echo "Apakah ada kartu member: " . $pembeli1->getKartuMember(); echo "<br>";
echo "Total belanjaan: Rp" . $pembeli1->getTotalBelanja(); echo "<br>";
echo "Total Bayar: Rp" . $pembeli1->totalBayar(); echo "<br>"; echo "<br>";

$pembeli2 = new Pembeli();
$pembeli2->setKartuMember('Memiliki'); 
$pembeli2->setTotalBelanja(570000); 
$pembeli2->hitungDiskon();

echo "-- Pembeli 2 --"; echo "<br>";
echo "Apakah ada kartu member: " . $pembeli2->getKartuMember(); echo "<br>";
echo "Total belanjaan: Rp" . $pembeli2->getTotalBelanja(); echo "<br>";
echo "Total Bayar: Rp" . $pembeli2->totalBayar(); echo "<br>"; echo "<br>";

$pembeli3 = new Pembeli();
$pembeli3->setKartuMember('Tidak Memiliki'); 
$pembeli3->setTotalBelanja(120000); 
$pembeli3->hitungDiskon();

echo "-- Pembeli 3 --"; echo "<br>";
echo "Apakah ada kartu member: " . $pembeli3->getKartuMember(); echo "<br>";
echo "Total belanjaan: Rp" . $pembeli3->getTotalBelanja(); echo "<br>";
echo "Total Bayar: Rp" . $pembeli3->totalBayar(); echo "<br>"; echo "<br>";

$pembeli4 = new Pembeli();
$pembeli4->setKartuMember('Tidak Memiliki'); 
$pembeli4->setTotalBelanja(90000); 
$pembeli4->hitungDiskon();

echo "-- Pembeli 4 --"; echo "<br>";
echo "Apakah ada kartu member: " . $pembeli4->getKartuMember(); echo "<br>";
echo "Total belanjaan: Rp" . $pembeli4->getTotalBelanja(); echo "<br>";
echo "Total Bayar: Rp" . $pembeli4->totalBayar(); echo "<br>"; echo "<br>";
?>
