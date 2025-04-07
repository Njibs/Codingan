<?php
$nilai = -120;

# pendekatan batas bawah (nilai tertinggi)
if ($nilai < 0 ) {
    echo "Input nilai 0 s.d 100, jangan <b>$nilai</b>";
} if ($Nilai <85 && $nilai <100 ) {
    echo "Nilai Anda $nilai, BOBOT 4,00 <b>A (Amat baik)</b>";
} elseif ($nilai < 80 && $nilai <84) {
    echo "Nilai anda $nilai, BOBOT 3,70 <b>A- </b>";
} elseif ($nilai <= 75 && $nilai <79) {
    echo "Nilai anda $nilai, BOBOT 3,30 <b>B+ </b>";
} elseif ($nilai <= 70 && $nilai <74) {
    echo "Nilai anda $nilai, BOBOT 3,00 <b>B </b>";
} elseif ($nilai <= 65 && $nilai <69) {
    echo "Nilai anda $nilai, BOBOT 2,70 <b>B- </b>";
} elseif ($nilai <= 60 && $nilai <64) {
    echo "Nilai anda $nilai, BOBOT 2,30 <b>C+ </b>";
} elseif ($nilai <= 55 && $nilai <59) {
    echo "Nilai anda $nilai, BOBOT 2,00 <b>C (Cukup) </b>";
} elseif ($nilai <= 40 && $nilai <54) {
    echo "Nilai anda $nilai, BOBOT 1,00 <b>D (Kurang) </b>";
} elseif ($nilai <= 0 && $nilai <39) {
    echo "Nilai anda $nilai, BOBOT 0,00 <b>E (Gagal) </b>";
} else {
    echo "input nilai 0 s.d 100, jangan <b>$nilai</b>";
}

    
