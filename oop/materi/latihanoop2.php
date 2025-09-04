<?php

class siswa 
{
    public $nama;
    public $kelas;
    public $jurusan;
    public $agama;
    public $jenis_kelamin;
    
    public function __construct($nama, $kelas, $umur, $agama,$jenis_kelamin)
    {
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->umur = $umur;
        $this->agama = $agama;
        $this->jenis_kelamin = $jenis_kelamin;

    }

    public function Belajar()
    {
        return "belajar di sekolah";
    }
    
 }
 $siswa1 = new siswa("budi", "xi rpl 3", "16", "Islam","Laki-Laki");
 echo "Nama : " . $siswa1->nama. "<br>";
echo "kelas : " . $siswa1->kelas . "<br>";
echo "Umur : " . $siswa1->umur . "<br>";
echo "Agama : " . $siswa1->agama. "<br>";
echo "jenis kelamin : " . $siswa1->jenis_kelamin. "<br>";


echo "<hr>";

$siswa2 = new siswa ("Rehan", "xi rpl 3", "16","Islam","Laki-Lak");
 echo "Nama : " . $siswa2->nama. "<br>";
echo "kelas : " . $siswa2->kelas . "<br>";
echo "Umur: " . $siswa2->umur . "<br>";
echo "Agama : " . $siswa2->agama. "<br>";
echo "jenis kelamin : " . $siswa2->jenis_kelamin. "<br>";

echo "<hr>";

$siswa3 = new siswa ("Dadan", "xi rpl 3", "16","Islam" ,"Laki-Laki");
echo "Nama : " . $siswa3->nama. "<br>";
echo "kelas : " . $siswa3->kelas . "<br>";
echo "Umur : " . $siswa3->umur. "<br>";
echo "Agama : " . $siswa3->agama. "<br>";
echo "jenis kelamin : " . $siswa3->jenis_kelamin. "<br>";

echo "<hr>";

$siswa4 = new siswa ("Maryana", "xi rpl 3", "16","Islam","Perempuan");
echo "Nama : " . $siswa4->nama. "<br>";
echo "kelas : " . $siswa4->kelas . "<br>";
echo "Umur : " . $siswa4->umur . "<br>";
echo "Agama : " . $siswa4->agama. "<br>";
echo "jenis kelamin : " . $siswa4->jenis_kelamin. "<br>";

 
