<?php

    class Siswa{
        public  $nama,
                $kelas,
                $nis,
                $alamat;

        function __construct($nma, $kls, $nis, $alm){
            $this->nama     = $nma;
            $this->kelas    = $kls;
            $this->nis      = $nis;
            $this->alamat   = $alm;
        }
    }

    class X extends Siswa{
        function print_siswax(){
            echo "Nama  : " . $this->nama . "<br>Kelas  : " . $this->kelas . "<br>NIS   : " . $this->nis . "<br>Alamat  : " . $this->alamat;
        }
    }

    class XI extends Siswa{
        function print_siswaxi(){
            echo "Nama  : " . $this->nama . "<br>Kelas  : " . $this->kelas . "<br>NIS   : " . $this->nis . "<br>Alamat  : " . $this->alamat;
        }
    }

    $siswax = new X('Parjo', 'X (Sepuluh)', 192768, 'Amerika kulon');
    $siswax->print_siswax();

    echo "<br>=========================================================<br>";

    $siswaxi = new XI('Dol Muji', 'XI (Sebelas)', 94675, 'Canada Wetan');
    $siswaxi->print_siswaxi();

?>