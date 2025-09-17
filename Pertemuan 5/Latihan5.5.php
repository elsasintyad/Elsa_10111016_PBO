<?php
// materi inheritance, overloading, overriding

class warung {
    public $namabarang;
    public $harga;

    function __construct($namabarang, $harga) {
        $this->namabarang = $namabarang;
        $this->harga = $harga;
    }

    public function informasi(){
        echo "Barang: $this->namabarang, harga: Rp $this->harga<br>";
    }
}

//inheritance
class warung2 extends warung {
    public $exp;

    public function __construct($namabarang, $harga, $exp) {
        parent ::__construct($namabarang, $harga);
        $this->exp = $exp;
    }

    //overriding
    public function informasi(){
        echo "Barang: $this->namabarang, harga: Rp $this->harga, Kadaluarsa: $this->exp<br>";
    }
}

//overloading
class warung3 {
    public function __call($namabarang, $x){
        if ($namabarang == "total") {
            if (count($x) == 1){
                return $x[0]; 
            }
            else if (count($x) == 2){
                return $x[0]*$x[1];
            }
            else {
                return 0;
            }
        }
    
    }
}
$barang1 = new warung("Susu Kotak", 6000);
$barang1 ->informasi();

$barang2 = new warung2("Yogurt", 12000, "15-11-2025");
$barang2->informasi();

$barang3 = new warung3();
echo "Harga Indomie setelah diskon: Rp " . $barang3->total(4000) . "<br>";
echo "Harga Telur: Rp " . $barang3->total(2000, 5) ."<br>";
?>