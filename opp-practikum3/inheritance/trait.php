<?php 

trait Fakultas {

	//Boleh ada property
	public function setFakultas(string $a) {
		return $a;
	}
}

trait Prodi {

	//Boleh ada property
	public function setProdi(string $b) {
		return $b;
	}
}

class Mahasiswa {
	use Fakultas, Prodi;
	public string $nama;

	public function setNama(string $c) {

		$this->nama = $c;
	}
}

$mhsw = new Mahasiswa();
$mhsw->setNama("Faiza");
echo $mhsw->setFakultas("FST") . " " . $mhsw->setProdi("Sistem Informasi") . " " . $mhsw->nama;