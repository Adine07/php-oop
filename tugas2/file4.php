<?php

    class Kereta{
        public  $nama,
                $stasiun,
                $berangkat,
                $sampai;
        
        function __construct($nama, $stasiun, $berangkat, $sampai){
            $this->nama     = $nama;
            $this->stasiun     = $stasiun;
            $this->berangkat     = $berangkat;
            $this->sampai     = $sampai;
        }
    }

    class Berangkat extends Kereta{
        function print(){
            echo "Kereta " . $this->nama . " akan berangkat pada pukul " . $this->berangkat . " WIB dari Stasiun " . $this->stasiun . ".<br>";
        }
    }

    class Sampai extends Kereta{
        function print(){
            echo "Kereta " . $this->nama . " akan tiba pada pukul " . $this->sampai . " WIB di Stasiun " . $this->stasiun . ".<br>";
        }
    }

    $kaligung = new Berangkat('Kaligung', 'Balapan', '17:00', '18:00');
    $kaligung->print();

    $Pramex = new Sampai('Pramex', 'Tugu', '17:00', '18:00');
    $Pramex->print();

?>