<?php
class BangunRuang {
    var $jenis;
    var $sisi;
    var $jari;
    var $tinggi;

    // Setter
    function setData($jenis, $sisi, $jari, $tinggi) {
        $this->jenis = $jenis;
        $this->sisi = $sisi;
        $this->jari = $jari;
        $this->tinggi = $tinggi;
    }

    // Getter
    function getJenis() { 
        return $this->jenis; }
    function getSisi() { 
        return $this->sisi; }
    function getJari() { 
        return $this->jari; }
    function getTinggi() { 
        return $this->tinggi; }

    function hitungvolume() {
        switch($this->jenis) {
            case "Bola":
                return (4/3) * 3.14 * ($this->jari ** 3);
            case "Kerucut":
                return (1/3) * 3.14 * ($this->jari ** 2) * $this->tinggi;
            case "Limas Segi Empat":
                return (1/3) * ($this->sisi ** 2) * $this->tinggi;
            case "Kubus":
                return $this->sisi ** 3;
            case "Tabung":
                return 3.14 * ($this->jari ** 2) * $this->tinggi;
            default:
                return 0;
        }
    }

    function tampilkan() {
        echo "Jenis Bangun Ruang : " . $this->getJenis() . "<br>";
        echo "Sisi : " . $this->getSisi() . "<br>";
        echo "Jari-jari : " . $this->getJari() . "<br>";
        echo "Tinggi : " . $this->getTinggi() . "<br>";
        echo "Volume : " . $this->hitungvolume() . "<br><br>";
    }
}

$data = [
    ["Bola", 0, 7, 0],
    ["Kerucut", 0, 14, 10],
    ["Limas Segi Empat", 8, 0, 24],
    ["Kubus", 30, 0, 0],
    ["Tabung", 0, 7, 10]
];

foreach ($data as $d) {
    $objek = new BangunRuang();
    $objek->setData($d[0], $d[1], $d[2], $d[3]);
    $objek->tampilkan();
}
?>