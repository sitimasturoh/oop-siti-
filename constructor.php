<?php 

class Produk {
	public  $judul,
			$penulis,
			$penerbit,
			$harga;

	public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}
}

$produk1 = new produk("Doraemon","shizuka","Nobita",39000);

$produk2 = new produk("Pinokio","Umar","Notes",87000);
$produk3 = new produk("Uncharted");

echo "Buku : " . $produk1->getLabel();
echo "<br>";
echo "Film : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);