<?php


$nilai = 65;

  if ($nilai >= 90) {
      echo "Lulus dengan Predikat A";
  }elseif ($nilai >= 75) {
     echo "Lulus dengan predikat B";
  } elseif ($nilai >= 60) {
     echo "Lulus dengan predikat C";
  }else {
    echo "tidak lulus";
  }