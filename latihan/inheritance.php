<?php

class Laptop{
  // property
  public $merek = "Merek",
         $ram = 0,
         $prosesor = "Prosesor",
         $harga = 0;


  // Method
  public function __construct($merek, $ram, $prosesor, $harga)
  {
    $this->merek = $merek;
    $this->ram = $ram;
    $this->prosesor = $prosesor;
    $this->harga = $harga;
  }
}

class Lenovo extends Laptop{
  public function detail(){
    $detail = "Merek : {$this->merek} | Ram : {$this->ram} Gb | Prosesor : {$this->prosesor} | Harga Rp. {$this->harga} ";

    return $detail;
  }
}

class HP extends Laptop{
  public function detail()
  {
    $detail = "Merek : {$this->merek} | Ram : {$this->ram} Gb | Prosesor : {$this->prosesor} | Harga Rp. {$this->harga}";

    return $detail;
  }
}

// Object

$produk = new Lenovo("Lenovo",4,"Amd",1500000);
echo $produk->detail();
echo "<br>";
$produk = new HP("HP",32,"Intel",8000000);
echo $produk->detail();


