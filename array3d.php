<?php

$nilai = [
    // index -> key -> value
    ["nama" => "Andi", "mapel" => ["matematika" => 80, "IPA" => 90, "Bahasa" => 85]],
    ["nama" => "Budi", "mapel" => ["matematika" => 75, "IPA" => 88, "Bahasa" => 79]],
    ["nama" => "Citra", "mapel" => ["matematika" => 92, "IPA" => 81, "Bahasa" => 87]],
];
//   index as key => value
foreach ($nilai as $data) {
    echo "Nilai " . $data["nama"] . ":<br>";
    foreach ($data["mapel"] as $pelajaran => $nilai) {
        echo "- $pelajaran: $nilai <br>";
    }
    echo "<br>";
}