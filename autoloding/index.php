<?php 

require_once 'App/init.php';

$produk1 = new Buku("Doraemon","shizuka","Nobita",39000,123);

$produk2 = new Film("Pinokio","Umar","Notes",87000,5);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

echo "<hr>";

new Coba();
