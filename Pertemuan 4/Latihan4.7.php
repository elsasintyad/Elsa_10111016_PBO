<?php
class Perulangan {
    public function loop1() {
        for ($baris=1; $baris <= 6; $baris++) {
            for ($kolom=1; $kolom < $baris; $kolom++) {
                echo $kolom."&nbsp;";
            }
            echo "<br />";
        }
    }

    public function loop2() {
        for ($baris=1; $baris <= 6; $baris++) {
            for ($kolom=1; $kolom < $baris; $kolom++) {
                echo "*"."&nbsp;";
            }
            echo "<br />";
        }
    }
}

// Objek
$ObjekPerulangan = new Perulangan();

echo "Jenis Perulangan 1 <br />";
$ObjekPerulangan->loop1();

echo "<br />Jenis Perulangan 2 <br />";
$ObjekPerulangan->loop2();
?>
