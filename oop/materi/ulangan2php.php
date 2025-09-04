
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pemesanan Tiket Bioskop</title>
</head>
<body>
    <fieldset>
     <h3>Pemesanan Tiket Bioskop</h3>
     <form method="POST" action="">
        <label>Nama Pengunjung</label>
        <input type="text" name="nama" required><br>
        <label>Jumlah Tiket</label>
        <input type="number" name="jumlah"  required>
        <br>
        <label>Hari</label>
        <select name="hari"required>
          
            <option value="">Pilih Hari</option>
            <option value="Senin">Senin</option>
            <option value="Selasa">Selasa</option>
            <option value="Rabu">Rabu</option>
            <option value="Kamis">Kamis</option>
            <option value="Jumat">Jumat</option>
            <option value="Sabtu">Sabtu</option>
            <option value="Minggu">Minggu</option>
        </select>  <br>
        <label>type Kursi</label>
        <select name="kursi" required>
            <option value="">type kursi</option>
            <option value="Reguler">Reguler</option>
            <option value="VIP">VIP</option>
        </select>
        <br><br>     
        <button type="submit" >Hitung total pembayaran</button>
</form>
  </fieldset>

<?php


    class Bioskop
    {
        public $nama, $jumlah, $hari, $kursi;
        public $hargaDasar      = 50000;
        public $tambahanWeekend = 10000;
        public $tambahanVIP     = 20000;

        public function __construct($nama, $jumlah, $hari, $kursi)
        {
            $this->nama   = $nama;
            $this->jumlah = $jumlah;
            $this->hari   = $hari;
            $this->kursi  = $kursi;
        }

        public function hitungTotal()
        {
            $hargaPerTiket = $this->hargaDasar;

            if ($this->hari == "Sabtu" || $this->hari == "Minggu") {
                $hargaPerTiket += $this->tambahanWeekend;
            }

            if ($this->kursi == "VIP") {
                $hargaPerTiket += $this->tambahanVIP;
            }

            $subtotal   = $hargaPerTiket * $this->jumlah;
            $pajak      = $subtotal * 0.05;
            $totalBayar = $subtotal + $pajak;

     return [
    'nama'          => $this->nama,
    'hari'          => $this->hari,
    'kursi'         => $this->kursi,
    'jumlah'        => $this->jumlah,
    'hargaPerTiket' => $hargaPerTiket,
    'subtotal'      => $subtotal,
    'pajak'         => $pajak,
    'total'         => $totalBayar,
];

        }
    }

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nama   = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $hari   = $_POST['hari'];
    $kursi  = $_POST['kursi'];

    $pesanan = new Bioskop($nama, $jumlah, $hari, $kursi);
    $hasil   = $pesanan->hitungTotal();

echo "<h3>Pembayaran</h3>";
echo "Nama : " . $hasil['nama'] . "<br>";
echo "Hari : " . $hasil['hari'] . "<br>";
echo "Jenis Kursi : " . $hasil['kursi'] . "<br>";
echo "Jumlah Tiket : " . $hasil['jumlah'] . "<br>";
echo "Harga Per Tiket: " . number_format($hasil['hargaPerTiket'], 0, ',' , ',') . "<br>";
echo "Subtotal: " . number_format($hasil['subtotal'], 0, ',' , ',')  . "<br>";
echo "Pajak Hiburan (5%) : " . number_format($hasil['pajak'], 0, ',', '.') ." <br>";
echo "Total Pembayaran :" . number_format($hasil['total'], 0, ',', '.')." <br>";


?>
   
    <?php }?>

</body>
</html>