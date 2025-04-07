<?php
$nilai = "A" ;
$nilai = strtoupper($nilai);

switch ($nilai) {
    case "A" :
        echo "Nilai Anda $nilai,Anda <b>Istimewa</b>";
        break;
    case "B" :
        echo "Nilai anda $Nilai,Anda <b>Baik</b>";
        break;
    case "c" :
        echo "Nilai anda $nilai, anda <b>Cukup</b>";
        break;
    case "D" :
        echo "Nilai anda $nilai, Anda <b>Kurang</B>";
        break;
    case "E" :
        echo "Nilai anda $nilai, anda <b>Kurang Baik</b>";
        break;

    default:
        echo "Nilai A s.d E, Jangan $nilai" ;
        break;
}