<?php

    class Hewan{
        public $name;
        public $warna_bulu;
        public $habitat;
        
        function __construct($tempat){
            $this->habitat = $tempat;
        }

        function set_name($nma){
            $this->name = $nma;
        }

        function set_warna_bulu($wrn_bl){
            $this->warna_bulu = $wrn_bl;
        }
    }

    $sapi = new Hewan("air");
    $sapi->set_name("Hiu");
    $sapi->set_warna_bulu("Putih Hitam");

    echo $sapi->name;
    echo "<br>";
    echo $sapi->habitat;
    echo "<br>";
    echo $sapi->warna_bulu;

?>