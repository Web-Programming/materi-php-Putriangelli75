<?php
namespace App\Produk;

class Item {
    public $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function info() {
        return "Ini adalah Item: {$this->nama} (Berasal dari namespace App\Produk)\n";
    }
}