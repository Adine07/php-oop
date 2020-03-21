<?php

	abstract class Hewan{
		public	$jenis,
				$kelompok;

		public function __construct($jenis, $kelompok){
			$this->jenis	= $jenis;
			$this->kelompok	= $kelompok;
		}

		abstract function Klasifikasi();
	}

	trait Id{
		public	$nama,
				$makanan;

		public function identiti($nama, $makanan){
			$this->nama	= $nama;
			$this->makanan	= $makanan;
		}
	}

	trait Tampil{
		public function print_book(){
			echo "nama: " . $this->nama . "<br>makanan: " . $this->makanan;
		}
	}

	class Animal extends Hewan{
		use Id;
		use Tampil;

		public function Klasifikasi(){
			echo "<br>Jenis: " . $this->jenis . "<br>kelompok: " . $this->kelompok;
		}
	}

	$wiw = new Animal('Mamalia', 'Herbivora');
	$wiw->identiti('Sapi', 'Rumput-rumputan');
	$wiw->print_book();
	$wiw->Klasifikasi();

?>