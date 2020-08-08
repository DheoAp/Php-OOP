<!-- dengan melakukan konsep abstraksi kita sudah mencoba membuat konsep oop selangkah lebih baik lagi -->

<?php
// Jualan Produk
// Komik
// Game

abstract class Produk{
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

  // method abstract tidak boleh mempunyai implementrasi, hanya boleh punya interface nya saja
  abstract public function getInfoProduk(); 

  public function getInfo() // getInfo untuk mengambil informasi dari produk
  {
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
    $str = "Komik : ". $this->getInfo() ." - {$this->jmlHalaman} - Halaman.";
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

  public function getInfoProduk() // getInfoProduk yang nanti di gunakan oleh class class turunan-nya
  {
    $str = "Game : ". $this->getInfo()." ~ {$this->waktuMain} Jam.";
    return $str;
  }
}

class CetakInfoProduk{
  public $daftarProduk = []; // [] adalah array(), ini property yang bertipe array

  public function tambahProduk(Produk $produk )// ini object type
  {
    // masukan produk yang baru ke dalam  array $daftarProduk
    $this->daftarProduk[] = $produk;  // cara menambahkan elemen baru pada array
  }
  public function cetak(){
    $str = "DAFTAR PRODUK : <br>";

    // bangun string yang berisi semua produk  yang ada di dalam array $daftarProduk(yang proprerti)
    foreach($this->daftarProduk as $p){
      $str .= "- {$p->getInfoProduk()}<br>";
    }
    return $str;
  }
}


// Buat Object 

$produk1 = new Komik("Naruto","Masashi Kisimoto","Shonen Jump",30000, 100);
$produk2 = new Game("Uncharted","Neil Druckmann","Sony Computer",250000,50);

// buat insten cetakInfoProduk
$cetakProduk = new CetakInfoProduk();
$cetakProduk ->tambahProduk($produk1); // cetakProduk produk, jalankan fungsi tambahProduk yang berisi object $produk1
$cetakProduk ->tambahProduk($produk2);

echo $cetakProduk->cetak();

