 <?php 

class Produk {
	public  $judul,
			$penulis,
			$penerbit,
			$harga,
			$jmlHalaman,
			$waktuMain;

	public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0, $jmlHalaman = 0, $waktuMain = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
	} 

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk() {
		// komik : Kungfu Panda | InnerBS, pinkPandaa (Rp.99000) - 274 halaman.
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str; 
	}
}

class Buku extends Produk {
	public function getInfoProduk() {
		$str = "Buku : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}

class Film extends Produk {
	public function getInfoProduk() {
		$str = "Film : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
		return $str;
	}
}


class CetakInfoProduk {
	public function cetak(Produk $Produk) {
		$str = "{$Produk->judul} | {$Produk->getLabel()} (Rp. {$Produk->harga})";
		return $str;
	}
}

$produk1 = new Buku("Doraemon","shizuka","Nobita", 99000, 123, 0);

$produk2 = new Film("Pinokio","Umar","Notes", 55000, 0, 5);

echo $produk1->getInfoProduk();  
echo "<br>";
echo $produk2->getInfoProduk(); 