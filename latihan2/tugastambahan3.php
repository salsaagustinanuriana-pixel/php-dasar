<?php

$film = [
    ["judl",8.8],
    ["Doraemon",8.7],
    ["crayon shincan",9.2],
    ["spiderman",8.2],
    ["The Lion King",8.0]

];

foreach ($film as $item) {
    if ($item["1"] >= 8) {
        echo $item["0"] . " memiliki Rating (" . $item["1"] . ")<br>";
    }
}
