<?php

class Orang {
    public $nama;
    public $berat;
    public $tinggi;

    function __construct($nama, $berat, $tinggi) {
        $this->nama = $nama;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
        $this->Data();
    }

    function Data() {
        echo "<b>" . $this->nama . "</b>";
        echo "<br><br>";
        echo "Berat : " . $this->berat . " Kg";
        echo "<br>";
        echo "Tinggi : " . $this->tinggi . " M";
        echo "<br><br>";
    }
}

class Hasil {

    public $mark;
    public $john;

    function __construct($mark, $john) {
        $this->mark = $mark;
        $this->john = $john;
    }

    function BMI() {
        $markBMI = $this->mark->berat / $this->mark->tinggi**2;
        $johnBMI = $this->john->berat / $this->john->tinggi**2;

        echo "<b>Hasil BMI</b>";
        echo "<br><br>";
        echo "Mark : " . number_format($markBMI,2);
        echo "<br>";
        echo "John : " . number_format($johnBMI,2);
        echo "<br><br>";

        if($markBMI > $johnBMI){
            $markHigherBMI = TRUE;
            return $markHigherBMI ? "True" : "False";
        } else {
            $markHigherBMI = FALSE;
            return $markHigherBMI ? "True" : "False";
        }
    }

    function HTML(){
        
        echo "<b>Mark memiliki BMI lebih tinggi dari john : "  . $this->BMI() . "</b>";
        echo "<br>";
        echo "======================";
    }

}

echo "<h3>Data 1</h3>";
$mark = new Orang("Mark", 78, 1.69);
$john = new Orang("John", 92, 1.95);
$hasil = new Hasil($mark, $john);
$hasil->HTML();

echo "<h3>Data 2</h3>";
$mark = new Orang("Mark", 95, 1.88);
$john = new Orang("John", 85, 1.76);
$hasil = new Hasil($mark, $john);
$hasil->HTML();

?>

