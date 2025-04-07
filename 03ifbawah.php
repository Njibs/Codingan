<?php
$nilai =120;

// pendekatan batas bawah (nilai terrendah)
if ($nilai >100 ) {
    echo "Input nilai 0 s.d 100, Jangan <b>$nilai</b>";
}if($nilai >= 60) {
    echo "Nilai anda $nilai, Selamat anda lulus";
} elseif   ($nilai >= 50)  {
    echo "nilai anda $nilai, Anda her";
} elseif ($nilai >= 0) {
    echo "Nilai anda $nilai, maaf anda tidak lulus";
} else {
     echo "Input nilai 0 s.d 100, Jangan <b>$nilai</b>";
}