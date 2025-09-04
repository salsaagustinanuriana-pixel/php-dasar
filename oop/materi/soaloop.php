
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  </style>
<body>
    <fieldset>
    <legend>BIODATA KARYAWAN</legend>
        <form action="" method="post">
        <label for="">Nama</label>
        <input type="text" name="nama" required>
        <br>
        <label for="">No ID Karyawan</label>
        <input type="number" name="id" required>
        <br>
        <label for="">Gaji Pokok</label>
        <input type="text" name="pokok" required>
        <br>
        <label for="">Status Kepegawaian:</label>
        <input type="radio" name="karyawan" value="tetap" required> Karyawan Tetap
        <input type="radio" name="karyawan" value="kontrak" required> Karyawan Kontrak
        <br>
        <label>Jabatan:</label><br>
        <select name="jabatan">
        <option value="manager">Manager</option>
        <option value="supervisor">Supervisor</option>
        <option value="staff">Staff</option>
        </select>
        <br>
        <label for="">Status Menikah:</label>
        <input type="radio" name="status" value="sudah_menikah" required> Sudah Menikah
        <input type="radio" name="status" value="belum_menikah" required> Belum Menikah
        <br>
        <input type="submit" value="Submit">
        <br>
        </form>
    </fieldset>
<?php
class Gaji
{
    public $nama, 
    $id, 
    $gaji_pokok, 
    $karyawan, 
    $jabatan, 
    $status,
    $tunjanganJabatan,
    $tunjanganTransportasi,
    $tunjanganKeluarga,
    $gaji_kotor,
    $pajak,
    $gaji_bersih;
    
    public function __construct($nama, $id, $gaji_pokok, $karyawan, $jabatan, $status) {
        $this->nama = $nama;
        $this->id = $id;
        $this->gaji_pokok = $gaji_pokok;
        $this->karyawan = $karyawan;
        $this->jabatan = $jabatan;
        $this->status = $status;
    }

    public function hitungGaji() {
        if ($this->jabatan == "manager") {
            $this->tunjanganJabatan = 0.20 * $this->gaji_pokok;
        } elseif ($this->jabatan == "supervisor") {
            $this->tunjanganJabatan = 0.15 * $this->gaji_pokok;
        } elseif ($this->jabatan == "staff") {
            $this->tunjanganJabatan = 0.10 * $this->gaji_pokok;
        } else {
            $this->tunjanganJabatan = 0;
        }

        if ($this->karyawan == "tetap") {
            $this->tunjanganTransportasi = 500000;
        } else {
            $this->tunjanganTransportasi = 0;
        }

        if ($this->status == "sudah_menikah") {
            $this->tunjanganKeluarga = 300000;
        } else {
            $this->tunjanganKeluarga = 0;
        }

        $this->gaji_kotor = $this->gaji_pokok + $this->tunjanganJabatan + $this->tunjanganTransportasi + $this->tunjanganKeluarga;
        $this->pajak = 0.05 * $this->gaji_kotor;
        $this->gaji_bersih = $this->gaji_kotor - $this->pajak;
    }

    public function tampilkanGajiBersih() {
        $this->hitungGaji();

        return 
        "<h3>Hasil Perhitungan Gaji</h3>" .
        "Nama: " . $this->nama . "<br>" .
        "No ID Karyawan: ". $this->id . "<br>" .
        "Gaji Pokok: Rp." . $this->gaji_pokok . "<br>" .
        "Tunjangan Jabatan: Rp." . $this->tunjanganJabatan . "<br>" .
        "Tunjangan Transportasi: Rp." . $this->tunjanganTransportasi . "<br>" .
        "Tunjangan Keluarga: Rp." . $this->tunjanganKeluarga . "<br>" .
        "Gaji Kotor: Rp." . $this->gaji_kotor . "<br>" .
        "Pajak (5%): Rp." . $this->pajak . "<br>" .
        "Gaji Bersih: Rp." . $this->gaji_bersih . "<br>" ;
        
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["nama"];
    $b = $_POST["id"];
    $c = $_POST["pokok"];
    $d = $_POST["karyawan"];
    $e = $_POST["jabatan"];
    $f = $_POST["status"];

    $gaji = new Gaji($a, $b, $c, $d, $e, $f);
    echo $gaji->tampilkanGajiBersih();
}
?>

</body>
</html>