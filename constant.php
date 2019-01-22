<?php 

// define('NAMA', 'Reni Nuraeni');
// echo NAMA;

// echo "<br>";

// const UMUR = 17;
// echo UMUR;


// class Coba {
// 	const NAMA = 'Reni Nuraeni';

// }
// echo Coba::NAMA;

class Coba {
	public $kelas = __CLASS__;
}
$obj = new Coba;
echo $obj->kelas;

?>