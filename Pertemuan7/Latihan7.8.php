<?php
class Tabungan {
    private $saldo;
    protected $nama;

    public function __construct($nama, $saldo_awal) {
        $this->nama = $nama;
        $this->saldo = $saldo_awal;
    }

    public function setor($jumlah) {
        $this->saldo += $jumlah;
        return true;
    }

    public function tarik($jumlah) {
        if ($jumlah <= $this->saldo) {
            $this->saldo -= $jumlah;
            return true;  
        } else {
            return false;  //ggl
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

class Siswa extends Tabungan {
    public function tampilSaldo() {
        echo "$this->nama > Saldo: Rp " . $this->getSaldo() . "\n";
    }
}

// Array siswa
$siswa_array = [
    new Siswa("Siswa 1", 50000),
    new Siswa("Siswa 2", 70000),
    new Siswa("Siswa 3", 30000)
];

// Pilih siswa
echo "Pilih siswa (1/2/3): ";
$input_siswa = trim(fgets(STDIN));
$index = $input_siswa - 1;
if ($index < 0 || $index > 2) {
    echo "Pilihan siswa tidak valid\n";
}
$siswa = $siswa_array[$index];

// Tampilkan saldo awal
$siswa->tampilSaldo();

echo "Mau setor atau tarik tunai? (setor/tarik): ";
$aksi = trim(fgets(STDIN));

echo "Masukkan jumlah: "; //ini input jumlah klo mau setor
$jumlah = (int)(trim(fgets(STDIN)));

// Proses transaksi
if ($aksi == "setor") {
    $siswa->setor($jumlah);
    echo "Setor berhasil\n";
} elseif ($aksi == "tarik") {
    if ($siswa->tarik($jumlah)) {
        echo "Tarik tunai berhasil\n";
    } else {
        echo "Tarik tunai gagal, saldo tidak cukup\n";
    }
} else {
    echo "Pilihan aksi tidak valid\n";
}

$siswa->tampilSaldo(); //nmpilin saldo akhir
?>