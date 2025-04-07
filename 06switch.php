<?php
$nilai = 100;

switch (true) {
    case ($nilai >= 80 && $nilai <= 100):
        echo "Nilai anda $nilai, anda <b>Istimewa</b>";
        break;
    case ($nilai >= 70 && $nilai < 80):
        echo "Nilai anda $nilai, anda <b>Baik</b>";
        break;
    case ($nilai >= 60 && $nilai < 70):
        echo "Nilai anda $nilai, anda <b>Cukup</b>";
        break;
    case ($nilai >= 50 && $nilai < 60):
        echo "Nilai anda $nilai, anda <b>Kurang</b>";
        break;
    case ($nilai >= 0 && $nilai < 50):
        echo "Nilai anda $nilai, anda <b>Sangat Kurang</b>";
        break;
   
    default:
        echo "Input nilai 0 s,d 100, Jangan <b>$nilai</b>";
        break;
}
