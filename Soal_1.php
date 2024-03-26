<?php

class TimSenam {
    public $tim;
    public $skor1;
    public $skor2;
    public $skor3;

    function __construct($tim, $skor1, $skor2, $skor3) {
        $this->tim = $tim;
        $this->skor1 = $skor1;
        $this->skor2 = $skor2;
        $this->skor3 = $skor3;
        $this->ratarata();
    }

    function ratarata() {
        $totalSkor = $this->skor1 + $this->skor2 + $this->skor3;
        $jumlahSkor = 3;
        $ratarata =  $totalSkor / $jumlahSkor;
        echo $this->tim . " (" . $this->skor1 . "," . $this->skor2 . "," . $this->skor3 . ") : " . number_format($ratarata,2);
        echo "<br>";
    }
}

class Hasil {

    public $lumba;
    public $koala;

    function __construct($lumba, $koala) {
        $this->lumba = $lumba;
        $this->koala = $koala;
    }

    function perbandingan() {
        $skorLumba = ($this->lumba->skor1 + $this->lumba->skor2 + $this->lumba->skor3) / 3;
        $skorKoala = ($this->koala->skor1 + $this->koala->skor2 + $this->koala->skor3) / 3;

        if ($skorLumba > 100 || $skorKoala > 100){
            if ($skorLumba > $skorKoala) {
                return "Tim Lumba - Lumba Menang";
            } elseif ($skorLumba < $skorKoala) {
                return "Tim Koala Menang";
            } else {
                return "Hasil Pertandingan Seri";
            }
        } else {
            return "Tidak ada tim yang memenangkan trofi";
        }
    }

    function HTML(){
        echo "Hasil : " . $this->perbandingan();
        echo "<br>";
        echo "=============";
    }

}

echo "<h3>Data 1</h3>";
$lumba = new TimSenam("Lumba-Lumba", 97, 108, 89);
$koala = new TimSenam("Koala", 88, 91, 110);
$hasil = new Hasil($lumba, $koala);
$hasil->HTML();

echo "<h3>Data Bonus 1</h3>";
$lumba = new TimSenam("Lumba-Lumba", 97, 112, 101);
$koala = new TimSenam("Koala", 109, 95, 123);
$hasil = new Hasil($lumba, $koala);
$hasil->HTML();

echo "<h3>Data Bonus 2</h3>";
$lumba = new TimSenam("Lumba-Lumba", 97, 112, 101);
$koala = new TimSenam("Koala", 109, 95, 106);
$hasil = new Hasil($lumba, $koala);
$hasil->HTML();

?>