<?php
abstract class Produk{
  // membuat property
  // public adalah visibility nya
  protected $judul = "judul", // definisi nilai secara default 
         $penulis = "penulis",
         $penerbit = "penerbit",
         $diskon = 0;

  // private $harga = 0;//(bisa di akses oleh class Produk saja)
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
  // abstract public function getInfoProduk(); 

  // public function getInfo() // getInfo untuk mengambil informasi dari produk
  // {
  //   $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
  //   return $str;
  // }
  
  abstract public function getInfo();

}