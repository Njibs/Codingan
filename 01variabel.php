<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar php</title>
</head>
<body bgcolor="red">
    <h1>php 8</h1>

<?php
echo "Teknik komputer";
echo "<br>";
print "ini sama aja";
echo("<br>Rumah Gemilang Indonesia<br>");
// belajar variabel
$nama = "Najib";
echo "nama saya: ". $nama;
echo "<br>";
$nama ="Najib";
echo 'nama Saya: $nama';
echo "<hr>";

//  constanta
define("NAMA", "Najib");
echo "<br>";
echo "Nama Saya" . NAMA;
echo "<br>";
define("Nama",  "Mujahid");
echo "Nama Kamu"  . Nama;
echo "<hr>";

// operator
$angka1 = 15;
$angka2 = 2;
echo "<h4>Operator Aritmetika</h4>";
echo "$angka1 + $angka2 = " . ($angka1 + $angka2) . "<br>";
echo "$angka1 - $angka2 = " . ($angka1 - $angka2) . "<br>";
echo "$angka1 x $angka2 = " . ($angka1 * $angka2) . "<br>";
echo "$angka1 : $angka2 = " . ($angka1 / $angka2) . "<br>";
echo "$angka1 % $angka2 = " . ($angka1 % $angka2) . "<br>";
echo "<hr>";




echo "<h2>Type'Data'Array,</h2>";
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu"];
echo $hari[2];
echo "<br>";

$student = array("Najib", "Mujahid", "Rizki", "Ali", "Aldi", "Jay", "Syukri", "uzair", "Fira", "Amel", "eva");
print_r($student);
echo "<br>";
var_dump($student);



?>
</body>
</html>