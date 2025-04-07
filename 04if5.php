<?php
$nilai = "B";

if ($nilai == "A") {
    echo "Nilai anda $nilai, Anda <b>Istimewa</b>";
} elseif ($nilai == "b") {
    echo "Nilai anda $nilai, Anda <b>Baik</b>";
} elseif ($nilai == "C") {
    echo "Nilai anda $nilai, anda <b>Cukup</b>";
} elseif ($nilai == "D") {
    echo "Nilai anda $nilai, anda <b>Kurang Baik</b>";
} elseif ($nilai == "E") {
    echo "Nilai anda $nilai, Anda <b>Sangat Kurang</b>";
} else {
    echo "Nilai A s.d E, Jangan $nilai";
}