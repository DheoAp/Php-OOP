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
         $harga = 0;

  // Method adalah function yang ada di dalam class
  // akan menampilkan label penerbit dan penulis secara langsung
  public function getLabel(){
    return "$this->penulis, $this->penerbit"; //tambahkan this->nama_variable,untuk scop global(mengambil variable dari luar) 
  }

}


// Buat Object 

// $produk1 = new Produk();
// $produk1-> judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2 -> judul = "Dota";
// $produk2 ->tambahProperty = "tambah property"; // ini menambah property, hati-hati


$produk3 = new Produk();
$produk3 ->judul ="Naruto";
$produk3 ->penulis ="Masashi Kishimoto";
$produk3 ->penerbit ="Shonen Jump";
$produk3 ->harga = 30000;



$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;


echo "Komik : ". $produk3->getLabel();
echo "<br>";
echo "Game : ". $produk4->getLabel();