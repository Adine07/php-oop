<?php

    class Buku{
        public  $judul,
                $penerbit,
                $tahun,
                $penulis;

        function __construct($judul, $penulis, $penerbit, $tahun){
            $this->judul    = $judul;
            $this->penulis  = $penulis;
            $this->penerbit = $penerbit;
            $this->tahun    = $tahun;
        }
    }

    class Novel extends Buku{
        public function print_buku(){
            echo "Novel ini berjudul " . $this->judul . " yang di tulis oleh " . $this->penulis . ", dan diterbitkan pada tahun " . $this->tahun . " olen penerbit " . $this->penerbit . ".<br>";
        }
    }

    class Komik extends Buku{
        public function print_buku(){
            echo "Komik ini berjudul " . $this->judul . " yang di tulis oleh " . $this->penulis . ", dan diterbitkan pada tahun " . $this->tahun . " olen penerbit " . $this->penerbit . ".<br>";
        }
    }

    $novel1 = new Novel('Laskar Pelangi', 'Mutafaqur', 'Bu-Sri', 2010);
    $novel1->print_buku();

    $komik1 = new Komik('One Piece', 'Rondiyah', 'Bu-Kar', 2310);
    $komik1->print_buku();

?>