<?php
$nilai = -120;

# pendekatan batas
if($nilai < 60 && $nilai <= 100) {
    echo "Nilai anda $nilai, maaf anda tidak lulus";
} elseif ($nilai >= 50 && $nilai <60) {
    echo "Nilai Anda $Nilai,Anda her";
} elseif ($nilai >= 0  && $nilai < 50) {
    echo "Nilai Anda $nilai, Maaf Anda tidak lulus";
} else {
    echo "Input nilai 0 s.d 100, jangan <b>$nilai</b>";
}