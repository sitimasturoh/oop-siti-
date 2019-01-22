<?php 

require_once 'App/init.php';

// $produk1 = new Komik("Kungfu Panda","InnerBS","pinkPandaa",99000,274);

// $produk2 = new Game("Uncharted","Neil Druckmann","Acerr Computer",55000,45);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

// echo "<hr>";


use App\Service\user as Serviceuser;
use App\Produk\user as Produkuser;


new Serviceuser();
echo "<br>"; 
new Produkuser();