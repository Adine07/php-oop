<?php

    class Pohon {
        public  $nama,
                $jenis,
                $asal;
        
        function __construct($nama, $jenis, $asal){
            $this->nama     = $nama;
            $this->jenis     = $jenis;
            $this->asal     = $asal;
        }
    }

    class Serabut extends Pohon{
        function print(){
            echo "Ini adalah pohon " . $this->nama . " asal " . $this->asal . " yang temasuk tumbuhan jenis akar " . $this->jenis . ".<br>";
        }
    }

    class Tunggal extends Pohon{
        function print(){
            echo "Ini adalah pohon " . $this->nama . " asal " . $this->asal . " yang temasuk tumbuhan jenis akar " . $this->jenis . ".<br>";
        }
    }

    $kelapa = new Serabut('Kelapa', 'serabut', 'Indonesia');
    $kelapa->print();

    $Jati = new Serabut('Jati', 'tunggal', 'Jawa');
    $Jati->print();

?>