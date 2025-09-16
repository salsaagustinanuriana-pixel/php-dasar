<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
  <label>Nama Lengkap:</label><br>
  <input type="text" name="nama" required><br><br>

  <label>Tanggal Lahir:</label><br>
  <input type="date" name="tg" required><br><br>

  <label>Jenis Kelamin:</label><br>
  <select name="gender" required>
    <option value="Laki-laki">Laki-laki</option>
    <option value="Perempuan">Perempuan</option>
  </select><br><br>

  <label>Tinggi Badan (cm):</label><br>
  <input type="number" name="tinggi" required><br><br>

  <label>Berat Badan (kg):</label><br>
  <input type="number" name="berat" required><br><br>

  <button type="submit">Kirim</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $tg = $_POST["tg"];
    $gender = $_POST["gender"];
    $tinggi = $_POST["tinggi"];
    $berat = $_POST["berat"];

    list($tahun_lahir, $bulan_lahir, $tanggal_lahir) = explode("-", $tg);
    $tahun_sekarang = date("Y");
    $bulan_sekarang = date("m");
    $tanggal_sekarang = date("d");

    $umur = $tahun_sekarang - $tahun_lahir;
    if ($bulan_sekarang < $bulan_lahir || ($bulan_sekarang == $bulan_lahir && $tanggal_sekarang < $tanggal_lahir)) {
        $umur--;
    }

    $tinggi_m = $tinggi / 100;
    $bmi = $berat / ($tinggi_m * $tinggi_m);
    $kategori = "";

    if ($bmi < 18.5) {
        $kategori = "Kurus";
    } elseif ($bmi < 25) {
        $kategori = "Normal";
    } elseif ($bmi < 30) {
        $kategori = "Gemuk";
    } else {
        $kategori = "Obesitas";
    }

   
    echo "<h2>Hasil Biodata</h2>";
    echo "Nama: $nama<br>";
    echo "Umur: $umur tahun<br>";
    echo "Jenis Kelamin: $gender<br>";
    echo "Tinggi Badan: $tinggi cm<br>";
    echo "Berat Badan: $berat kg<br>";
    echo "BMI: " . $bmi, 2 . " ($kategori)";
}
?>

</body>
</html>