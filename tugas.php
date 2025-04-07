<?php
$nilai = 77;

// pendekatan batas bawah (nilai terrendah)
if ($nilai >= 80 && $nilai <= 100) {
    echo "Input nilai 0 s.d 100,Nilai A";
}
if ($nilai >= 70 && $nilai < 80) {
    echo "Nilai anda $nilai, Nilai B";
} elseif ($nilai >= 60 && $nilai < 70) {
    echo "nilai anda $nilai, Nilai C";
} elseif ($nilai  >= 50 &&  $nilai < 60) {
    echo "Nilai anda $nilai, Nilai D";
} elseif ($nilai >= 0  && $nilai < 50) {
    echo "Nilai anda $nilai, Nilai E";
} else {
    echo "Input nilai 0 s.d 100, Jangan <b>$nilai</b>";
}
