<?php

 class kucing 
 {
    public $nama;
    public $warna;
    public $jenis;
    //method
    public function __construct($nama, $warna, $jenis)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->jenis = $jenis;

    }

    public function makan()
    {
        return "Kucing sedang makan";
    }
    
 }
 $kucing1 = new kucing ("Luna", "Hitam", "persia");
 echo "warna kucing1 : " . $kucing1->nama . "<br>";
echo "jumlah kaki kucing1 : " . $kucing1->warna . "<br>";
echo "suara kucing1 : " . $kucing1->jenis . "<br>";
 