<?php
class Komik extends Produk implements InfoProduk{ 
  public $jmlHalaman; // akan lebih baik variable spesial untuk class Komik, karna $jmlHalaman hanya milik komik.

  public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga); // di ambil dari calss construct parent (panggil)
    $this->jmlHalaman = $jmlHalaman;
  }

  public function getInfo()
  {
    $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
    return $str;
  }
  // lalu harus membuat sebuah method sebagai implementasi dari semua method yang ada di interface InfoProduk
  public function getInfoProduk()
  {
    $str = "Komik : ". $this->getInfo() ." - {$this->jmlHalaman} - Halaman.";
    return $str;
  }

 

}
