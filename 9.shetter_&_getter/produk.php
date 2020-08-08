<?php
// Jualan Produk
// Komik
// Game

class Produk{
  // membuat property
  // public adalah visibility nya
  private $judul = "judul", // definisi nilai secara default 
         $penulis = "penulis",
         $penerbit = "penerbit",
         $diskon = 0;

  private $harga = 0;//(bisa di akses oleh class Produk saja)
  // protected $harga = 0;//(bisa di akses oleh classnya dan turunannya)


  public function setJudul($judul) // ingin merubah judul
  {
    $this->judul = $judul;
  }
  public function getJudul() // getter, bisa melakukan sesuatu di dalamnya
  {
    return $this->judul; // paggil this judul yang ada di property private
  }


  public function setPenulis($penulis) 
  {
    $this->penulis = $penulis;
  }
  public function getPenulis() 
  {
    return $this->penulis; 
  }


  public function setPenerbit($penerbit) 
  {
    $this->penerbit = $penerbit;
  }
  public function getPenerbit() 
  {
    return $this->penerbit; 
  }


  public function setDiskon($diskon) //setter
  {
    $this->diskon = $diskon;
  }
  public function getDiskon() // getter
  {
    return $this->diskon; 
  }

  
  public function setHarga($harga)
  {
    $this->harga = $harga;
  }

  // __construct() method yang otomatis di jalankan ketika sebuah class kita buat object nya
  public function __construct($judul, $penulis, $penerbit, $harga) // $judul .. dll adalah variable local
  {
    $this->judul = $judul; // pangil $judul dari property, lalu di isi dengan vaibale local  
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getHarga() // untuk mengakses Private
  {
    return $this->harga - ($this->harga * $this->diskon / 100);
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
  public $jmlHalaman; // akan lebih baik variable spesial untuk class Komik, karna $jmlHalaman hanya milik komik.

  public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga); // di ambil dari calss construct parent (panggil)
    $this->jmlHalaman = $jmlHalaman;
  }
  public function getInfoProduk()
  {
    $str = "Komik : ". parent::getInfoProduk() ." - {$this->jmlHalaman} - Halaman.";
    return $str;
  }

}

class Game extends Produk{
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

  public function getInfoProduk()
  {
    $str = "Game : ". parent::getInfoProduk()." ~ {$this->waktuMain} Jam.";
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

$produk1 = new Komik("Naruto","Masashi Kisimoto","Shonen Jump",30000, 100);
$produk2 = new Game("Uncharted","Neil Druckmann","Sony Computer",250000,50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";
$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";
$produk1->setPenulis("Dheo Apriansyah"); // setter, mengganti penulis
echo $produk1->getPenulis(); //getter

