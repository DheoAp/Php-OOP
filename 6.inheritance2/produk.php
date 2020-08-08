<?php
// Jualan Produk
// Komik
// Game

class Produk{
  // membuat property
  // public adalah visibility nya
  public $judul = "judul", // definisi nilai secara default 
         $penulis = "penulis",
         $penerbit = "penerbit",
         $harga = 0,
         $jmlHalaman = 0,
         $waktuMain = 0;

  // __construct() method yang otomatis di jalankan ketika sebuah class kita buat object nya
  public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain) // $judul .. dll adalah variable local
  {
    $this->judul = $judul; // pangil $judul dari property, lalu di isi dengan vaibale local  
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
  }

  // Method adalah function yang ada di dalam class
  // akan menampilkan label penerbit dan penulis secara langsung
  public function getLabel(){
    return "$this->penulis, $this->penerbit"; //tambahkan this->nama_variable,untuk scop global(mengambil variable dari luar) 
  }

  public function getInfoProduk(){
    $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
    return $str;
  }

}

class Komik extends Produk{
  public function getInfoProduk()
  {
    $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga} - {$this->jmlHalaman} - Halaman.)";
    return $str;
  }

}

class Game extends Produk{
  public function getInfoProduk()
  {
    $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
    return $str;
  }
}

class CetakInfoProduk{
  public function cetak(Produk $produk){
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
    return $str;
  }
}


// Buat Object 

$produk1 = new Komik("Naruto","Masashi Kisimoto","Shonen Jump",30000, 100,0);
$produk2 = new Game("Uncharted","Neil Druckmann","Sony Computer",250000,0,50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

