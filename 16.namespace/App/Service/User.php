<?php namespace App\Service;
// ini class User milik Service

class User{
  public function __construct()
  { 
    echo "ini adalah class " . __CLASS__; // akan otomatis mengambil nama classnya
  }
}