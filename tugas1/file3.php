<?php

    class Motor{
        public $merek;
        public $cc;
        public $tipe;
        
        function __construct($jenis){
            $this->tipe = $jenis;
        }

        function set_merek($mrk){
            $this->merek = $mrk;
        }

        function set_cc($cc){
            $this->cc = $cc;
        }
    }

    $supra = new Motor("bebek");
    $supra->set_merek("Honda");
    $supra->set_cc(125);

    echo $supra->merek;
    echo "<br>";
    echo $supra->tipe;
    echo "<br>";
    echo $supra->cc;

?>