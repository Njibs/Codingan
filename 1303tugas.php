<?php
$nilai = 67;

switch (true) {
    case ($nilai >= 85 && $nilai <= 100):
        echo "Nilai anda $nilai, anda BOBOT 4,00 <b>A (AMAT BAIK)</b>";
        break;
    case ($nilai >= 80 && $nilai < 84):
        echo "Nilai anda $nilai, anda 3,70 <b>A-</b>";
        break;
    case ($nilai >= 75 && $nilai < 79):
        echo "Nilai anda $nilai, anda  3,30 <b>B+</b>";
        break;
    case ($nilai >= 70 && $nilai < 74):
        echo "Nilai anda $nilai, anda 3,00 <b>B (BAIK)</b>";
        break;
    case ($nilai >= 65 && $nilai < 69):
        echo "Nilai anda $nilai, anda 2,70 <b>B-</b>";
        break;
        case ($nilai >= 60 && $nilai < 64):
            echo "Nilai anda $nilai, anda 2,30 <b>C+</b>";
            break;
            case ($nilai >= 55 && $nilai < 59):
                echo "Nilai anda $nilai, anda 2,00 <b>C (CUKUP)</b>";
                break;
                case ($nilai >= 40 && $nilai < 54):
                    echo "Nilai anda $nilai, anda 1,00 <b>D (KURANG)</b>";
                    break;
                    case ($nilai >= 0 && $nilai < 39):
                        echo "Nilai anda $nilai, anda 0,00<b>E (GAGAL)</b>";
                        break;

   
    default:
        echo "Input nilai 0 s,d 100, Jangan <b>$nilai</b>";
        break;
}
