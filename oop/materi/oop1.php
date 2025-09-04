<?php

class kucing {
    //proferti atau atribut
    public $warna = "merah";
    public $jumlah_kaki = 4 ;

    //method atau fungsi
    public function bersuara() 
    {
        return "meong meong";
    }

    public function berburu ()
    {
        return "kucing berburu tikus";
    }
}

// inisiasi (pembuatan object)
$kucing1 = new kucing();
echo "warna kucing 1 : " . $kucing1->warna . "<br>";
echo "jumlah kaki kucing 1 : " . $kucing1->jumlah_kaki . "<br>";
echo "suara kucing 1 : " . $kucing1->bersuara() . "<br>";