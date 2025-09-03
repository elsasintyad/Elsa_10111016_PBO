<?php
class BarangHarian{
    //ini variable atau atribut
    var $namabarang = "Mie Instan";
    var $hargabarang;
    var $jumlah;
    var $total;

    function hitungtotalPembayaran(){
        $total = $this-> hargabarang * $this-> jumlah;
        return $total;
    }

}

//deklarasikan objek
$barang1 = new BarangHarian();
$barang1 -> hargabarang = 10000;
$barang1 -> jumlah = 3;

$barang2 = new BarangHarian();
$barang2 -> namabarang = "Kopi";
$barang2 -> hargabarang = 3000;
$barang2 -> jumlah = 2;

$barang3 = new BarangHarian();
$barang3 -> namabarang = "Air Mineral";
$barang3 -> hargabarang = 8000;
$barang3 -> jumlah = 1;

echo $barang1 -> namabarang; echo "<br>";
echo "Harga = " . $barang1 -> hargabarang; echo "<br>";
echo "Jumlah Beli = " . $barang1 -> jumlah; echo "<br>"; echo "<br>";

echo $barang2 -> namabarang; echo "<br>";
echo "Harga = " . $barang2 -> hargabarang; echo "<br>";
echo "Jumlah Beli = " . $barang2 -> jumlah; echo "<br>"; echo "<br>";

echo $barang3 -> namabarang; echo "<br>";
echo "Harga = " . $barang3 -> hargabarang; echo "<br>";
echo "Jumlah Beli = " . $barang3 -> jumlah; echo "<br>"; echo "<br>";

$totalbelanja = $barang1 -> hitungtotalPembayaran() + $barang2 -> hitungtotalPembayaran() + $barang3 -> hitungtotalPembayaran();

echo "Total Belanja = Rp" . $totalbelanja; echo "<br>";

if ($totalbelanja > 5000) {
    echo "Status Pembayaran = Mahal";
    } else {
        echo "Status Pembayaran = Murah";
    }

?>