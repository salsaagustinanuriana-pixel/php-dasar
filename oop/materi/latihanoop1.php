<?php

  class motor
 {
    public $warna;
    public $nama;
    public $jenis;
    
    public function __construct($warna, $nama, $jenis)
    {
        $this->warna = $warna;
        $this->nama = $nama;
        $this->jenis = $jenis;

    }

    public function mengendarai()
    {
        return "berpergian menggunakan motor";
    }
    
 }
 $motor1 = new motor ("pink", "Honda", "skuter");
 echo "warna motor : " . $motor1->warna . "<br>";
echo "nama motor : " . $motor1->nama . "<br>";
echo "jenis motor : " . $motor1->jenis . "<br>";
 