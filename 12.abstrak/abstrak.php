<?php 
abstract Class Buah{ // kelas abstrak
  private $warna;

  abstract public function makan(); //method abstract hanya interface saja, implementasinya hanya di class turunannya

  public function setWarna($warna){ 
    $this->warna = $warna;
  }

}

?>