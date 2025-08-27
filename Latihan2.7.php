<?php
class Kendaraan
{
    public $jumlahRoda = 4;
    public $warna;
    public $bahanBakar = "Premium";
    public $harga = 100000000;
    public $merek;
    public $tahunPembuatan = 2004;

    // Cek status harga
    public function statusHarga()
    {
        if ($this->harga > 50000000) {
            $status = "Harga Kendaraan Mahal";
        } else {
            $status = "Harga Kendaraan Murah";
        }
        return $status;
    }

    // Cek subsidi
    function statusSubsidi()
    {
        if ($this->tahunPembuatan < 2005 && $this->bahanBakar == "Premium") {
            $status = "DAPAT SUBSIDI";
        } else {
            $status = "TIDAK DAPAT SUBSIDI";
        }
        return $status;
    }
}

// Instansiasi kelas
$ObjekKendaraan = new Kendaraan();
echo "Jumlah Roda: " . $ObjekKendaraan->jumlahRoda . "<br />";
echo "Status Harga: " . $ObjekKendaraan->statusHarga() . "<br />";
echo "Status Subsidi: " . $ObjekKendaraan->statusSubsidi();
?>
