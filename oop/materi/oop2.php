<?php

class buku {
    
    public $warna = "coklat";
    public $lembar = 34 ;

    
    public function membaca() 
    {
        return "kita bisa membaca seperti novel dll";
    }

    public function menulis()
    {
        return "mengerjakan tugas";
    }
}


$buku1 = new buku();
echo "warna buku : " .$buku1->warna . "<br>";
echo "lembar buku : " . $buku1->lembar . "<br>";
echo "dengan adanya buku : " . $buku1->membaca() . "<br>"; 