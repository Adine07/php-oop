<?php

    class Pesawat{
        public  $nama,
                $bandara,
                $Takeoff,
                $landing;
        
        function __construct($nama, $bandara, $Takeoff, $landing){
            $this->nama     = $nama;
            $this->bandara     = $bandara;
            $this->Takeoff     = $Takeoff;
            $this->landing     = $landing;
        }
    }

    class Takeoff extends Pesawat{
        function print(){
            echo "Pesawat " . $this->nama . " akan Takeoff pada pukul " . $this->Takeoff . " WIB dari bandara " . $this->bandara . ".<br>";
        }
    }

    class landing extends Pesawat{
        function print(){
            echo "Pesawat " . $this->nama . " akan Landing pada pukul " . $this->landing . " WIB di bandara " . $this->bandara . ".<br>";
        }
    }

    $AdamAir = new Takeoff('AdamAir', 'Soekarna-Hatta', '17:00', '18:00');
    $AdamAir->print();

    $Garuda = new landing('Garuda', 'Adi Sucipto', '17:00', '18:00');
    $Garuda->print();

?>