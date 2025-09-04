<!DOCTYPE html>
<html lang="en">
<head>
   <style>
    body {
        background-color: #c95c92ff;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        padding: 10px;
    }

    fieldset {
        border: 2px solid #b86f87ff;
        border-radius: 10px;
        padding: 10px;
        max-width: 500px;
        margin: auto;
        background-color: #ffffff;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    legend {
        font-size: 1.5rem;
        font-weight: bold;
        color: #f36b8dff;
        padding: 0 10px;
    }

    label {
        font-weight: 500;
        margin-top: 10px;
        display: block;
    }

    input[type="text"],
    input[type="number"],
    select {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        margin-bottom: 10px;
        border: 1px solid #ea51f0ff;
        border-radius: 5px;
    }

    input[type="radio"] {
        margin-right: 5px;
    }

    input[type="submit"] {
        background-color: #ad07ceff;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        margin-top: 10px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #c21a98ff;
    }

    h3 {
        text-align: center;
        margin-top: 30px;
        color: #dd445eff;
    }

    .hasil {
        max-width: 500px;
        margin: 20px auto;
        background-color: #ffffff;
        border: 1px solid #dee2e6;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 0 8px rgba(0,0,0,0.05);
    }

    .hasil p {
        margin: 5px 0;
        font-size: 1rem;
    }
</style>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
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
            "<div class='hasil'>
            <h3>Hasil Perhitungan Gaji</h3>" .
            "<p><span>Nama:</span> $this->nama</p>" .
            "<p><span>No ID Karyawan:</span> $this->id</p>" .
            "<p><span>Gaji Pokok:</span> Rp. $this->gaji_pokok</p>" .
            "<p><span>Tunjangan Jabatan:</span> Rp. $this->tunjanganJabatan</p>" .
            "<p><span>Tunjangan Transportasi:</span> Rp. $this->tunjanganTransportasi</p>" .
            "<p><span>Tunjangan Keluarga:</span> Rp. $this->tunjanganKeluarga</p>" .
            "<p><span>Gaji Kotor:</span> Rp. $this->gaji_kotor</p>" .
            "<p><span>Pajak (5%):</span> Rp. $this->pajak</p>" .
            "<p><span>Gaji Bersih:</span> Rp. $this->gaji_bersih</p>" .
            "</div>";

        
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
 <style>
    body {
        background-color: #faadc7ff;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        padding: 10px;
    }

    fieldset {
        border: 2px solid #ba68c8;
        border-radius: 12px;
        padding: 25px;
        max-width: 550px;
        margin: auto;
        background-color: #ffffff;
        box-shadow: 0 0 12px rgba(186, 104, 200, 0.3);
    }

    legend {
        font-size: 1.6rem;
        font-weight: bold;
        color: #f8f0a5ff;
        padding: 0 10px;
    }

    label {
        font-weight: 500;
        margin-top: 10px;
        display: block;
        color: #705732ff;
    }

    input[type="text"],
    input[type="number"],
    select {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        margin-bottom: 10px;
        border: 1px solid #fa9ce1ff;
        border-radius: 6px;
        background-color: #f5ebd7ff;
    }

    input[type="radio"] {
        margin-right: 5px;
    }

    input[type="submit"] {
        background-color: #ec407a;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 6px;
        margin-top: 10px;
        cursor: pointer;
        font-weight: bold;
    }

    input[type="submit"]:hover {
        background-color: #d81b60;
    }

    h3 {
        text-align: center;
        margin-top: 30px;
        color: #8e24aa;
    }

    .hasil {
        max-width: 550px;
        margin: 30px auto;
        background: linear-gradient(to right, #f8bbd0, #f3e5f5);
        border: 2px solid #ce93d8;
        border-radius: 12px;
        padding: 25px 30px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .hasil p {
        font-size: 1rem;
        margin: 8px 0;
        padding-left: 10px;
        position: relative;
        color: #4a148c;
    }

    .hasil p::before {
        content: "💗";
        position: absolute;
        left: -5px;
        font-size: 1rem;
    }

    .hasil p span {
        font-weight: bold;
        color: #ad1457;
    }
</style>


</body>
</html>