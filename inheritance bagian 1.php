 <?php 

class Produk {
	public  $judul,
			$penulis,
			$penerbit,
			$harga,
			$jmlHalaman,
			$waktuMain,
			$tipe;

	public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
	} 

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap() {
		// komik : Kungfu Panda | InnerBS, pinkPandaa (Rp.99000) - 274 halaman.
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		if($this->tipe == "Buku") {
			$str .= " - {$this->jmlHalaman} Halaman.";
		}else if($this->tipe == "Film") {
			$str .= " ~ {$this->waktuMain} Jam.";
		}
		return $str;
	}
}

class CetakInfoProduk {
	public function cetak(Produk $Produk) {
		$str = "{$Produk->judul} | {$Produk->getLabel()} (Rp. {$Produk->harga})";
		return $str;
	}
}

$produk1 = new Produk("Doraemon","shizuka","Nobita", 99000, 123, 0, "Buku");

$produk2 = new Produk("Pinokio","Umar","Notes", 55000, 0, 5, "Film");

echo $produk1->getInfoLengkap();  
echo "<br>";
echo $produk2->getInfoLengkap(); 