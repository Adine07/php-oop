<?php

	abstract class Tumbuhan{
		public	$jenis;

		public function __construct($jenis){
			$this->jenis	= $jenis;
		}

		abstract function Klasifikasi();
	}

	trait Id{
		public	$nama,
				$habitat;

		public function identiti($nama, $habitat){
			$this->nama	= $nama;
			$this->habitat	= $habitat;
		}
	}

	trait Tampil{
		public function print_book(){
			echo "nama: " . $this->nama . "<br>habitat: " . $this->habitat;
		}
	}

	class Tanaman extends Tumbuhan{
		use Id;
		use Tampil;

		public static function Header(){
			echo "====== WAW! ====== <br>";
		}

		public function Klasifikasi(){
			echo "<br>Jenis: " . $this->jenis;
		}
	}

	$waw = new Tanaman('Novel', 'Gramedia', '3021');
	$waw->identiti('Sibuta', 'Dul Muji');
	Tanaman::Header();
	$waw->print_book();
	$waw->Klasifikasi();

?>