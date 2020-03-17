<?php

    class Sayur{
        public $name;
        public $warna;
        public $harga;

        function __construct($nama){
            $this->name = $nama;
        }

        function set_warna($wrn){
            $this->warna = $wrn;
        }

        function set_harga($hrg){
            $this->harga = $hrg;
        }
    }

    $sawi = new Sayur("sawi");
    $sawi->set_warna("hijau");
    $sawi->set_harga(5000);

    echo $sawi->name;
    echo "<br>";
    echo $sawi->warna;
    echo "<br>";
    echo $sawi->harga;

?>