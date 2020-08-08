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
         $jmlHalaman,
         $waktuMain,
         $tipe;

  // __construct() method yang otomatis di jalankan ketika sebuah class kita buat object nya
  public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain=0, $tipe) // $judul .. dll adalah variable local
  {
    $this->judul = $judul; // pangil $judul dari property, lalu di isi dengan vaibale local  
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
    $this->tipe = $tipe;
  }

  // Method adalah function yang ada di dalam class
  // akan menampilkan label penerbit dan penulis secara langsung
  public function getLabel(){
    return "$this->penulis, $this->penerbit"; //tambahkan this->nama_variable,untuk scop global(mengambil variable dari luar) 
  }

  public function getInfoLengkap(){
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";

    if($this->tipe == "Komik"){
      $str .= " - {$this->jmlHalaman} Halaman.";
    }else if($this->tipe == "Game"){
      $str .= " ~ {$this->waktuMain} Jam.";
    }

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

$produk1 = new Produk("Naruto","Masashi Kisimoto","Shonen Jump",30000, 100,0,"Komik");
$produk2 = new Produk("Uncharted","Neil Druckmann","Sony Computer",250000,0,50,"Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

