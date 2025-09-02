<?php
$barang = [
    ["pulpen", 7],
    ["penggaris",10],
    ["buku", 3],
    ["spidol",4],
    ["penghapus",0]

];

foreach ($barang as $item) {
    if ($item["1"] < 5) {
        echo  $item["0"] . " hampir habis (stok: " . $item["1"] . ")<br>";
    }
}
