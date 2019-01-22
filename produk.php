<?php 

// jualan produk
// komik
// game
class Produk {
	public  $judul = "judul",
			$penulis = "penulis",
			$penerbit = "penerbit",
			$harga = 0;

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}
}

$produk1 = new produk();
$produk1->judul = "Doraemon";
$produk1->penulis = "shizuka";
$produk1->penerbit = "Nobita";
$produk1->harga = 39.000;

$produk2 = new produk();
$produk2->judul = "Pinokio";
$produk2->penulis = "Umar";
$produk2->penerbit = "Notes";
$produk2->harga = 87.000;

echo "Buku : " . $produk1->getLabel();
echo "<br>";
echo "Film : " . $produk2->getLabel();