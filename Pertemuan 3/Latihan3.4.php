<?php
class BarangHarian{
    //ini variable atau atribut
    var $namabarang;
    var $hargabarang;
    var $jumlah;
    var $total;

    function setnamabarang($x){
        $this -> namabarang = $x;
    }
    function getnamabarang(){
        return $this-> namabarang;
    }
    function sethargabarang($y){
        $this -> hargabarang = $y;
    }
    function gethargabarang(){
        return $this-> hargabarang;
    }
    function setjumlah($z){
        $this -> jumlah = $z;
    }
    function getjumlah(){
        return $this-> jumlah;
    }
    function hitungtotalPembayaran(){
        $total = $this-> hargabarang * $this-> jumlah;
        return $total;
    }

}

$barang1 = new BarangHarian();
$barang1 -> setnamabarang('Mie Instan');
$barang1 -> sethargabarang(10000);
$barang1 -> setjumlah(3);

echo $barang1 ->getnamabarang();
echo "<br>";
echo "Harga barang: " . $barang1 ->gethargabarang();
echo "<br>";
echo "Jumlah yang dibeli: " . $barang1 -> getjumlah();
echo "<br>";
echo "Total Bayar: ". $barang1 -> hitungtotalPembayaran(); echo "<br>"; echo "<br>";

$barang2 = new BarangHarian();
$barang2 -> setnamabarang('Kopi');
$barang2 -> sethargabarang(3000);
$barang2 -> setjumlah(2);

echo $barang2 ->getnamabarang();
echo "<br>";
echo "Harga barang: " . $barang2 ->gethargabarang();
echo "<br>";
echo "Jumlah yang dibeli: " . $barang2 -> getjumlah();
echo "<br>";
echo "Total Bayar: ". $barang2 -> hitungtotalPembayaran(); echo "<br>"; echo "<br>";

$barang3 = new BarangHarian();
$barang3 -> setnamabarang('Air Mineral');
$barang3 -> sethargabarang(8000);
$barang3 -> setjumlah(1);

echo $barang3 ->getnamabarang();
echo "<br>";
echo "Harga barang: " . $barang3 ->gethargabarang();
echo "<br>";
echo "Jumlah yang dibeli: " . $barang3 -> getjumlah();
echo "<br>";
echo "Total Bayar: ". $barang3 -> hitungtotalPembayaran(); echo "<br>"; echo "<br>";

?>