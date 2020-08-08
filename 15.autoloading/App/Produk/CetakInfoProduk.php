<?php

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