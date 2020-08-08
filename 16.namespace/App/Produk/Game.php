<?php
class Game extends Produk implements InfoProduk{
  public $waktuMain;
  public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->waktuMain = $waktuMain;
  }
  
  // public function getHarga() // untuk mengakses protected
  // {
  //   return $this->harga;
  // }
  
  public function getInfo()
  {
    $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
    return $str;
  }
  
  public function getInfoProduk() // getInfoProduk yang nanti di gunakan oleh class class turunan-nya
  {
    $str = "Game : ". $this->getInfo()." ~ {$this->waktuMain} Jam.";
    return $str;
  }

  

}