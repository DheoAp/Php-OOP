<?php
require_once 'App/init.php';


// instensiasi
$produk1 = new Komik("Naruto","Masashi Kisimoto","Shonen Jump",30000, 100);
$produk2 = new Game("Uncharted","Neil Druckmann","Sony Computer",250000,50);

// cetak
$cetakProduk = new CetakInfoProduk();
$cetakProduk ->tambahProduk($produk1); // cetakProduk produk, jalankan fungsi tambahProduk yang berisi object $produk1
$cetakProduk ->tambahProduk($produk2);

echo $cetakProduk->cetak();