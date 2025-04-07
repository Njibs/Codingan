<?php
echo "<h1>looping</h1>";
echo "<h2>For</h2>";
for ($i=1; $i <= 10 ; $i++) {
        echo("$i. Teknik Komputer dan Jaringan Angkatan 32  Rumah Gemilang Indonesia<br>" );
}

echo "<h2>While</h2>";
$a =1;
while ($a <= 10) {
        echo("$a. While TKJ32<br>");
        $a++;
        // $a += 1;
        // $a = $a + 1;

}

echo "<h2>While</h2>";
$a = 1;
do {
    echo("Do While TKJ32 - $a<br>");
    $a++;
} while ($a <= 10);

echo "<h2>ForEach</h2>";
$students = array("Najib","Mujahid", "Rizki", "Ali", "Syarif", "Jay", "Syukri", "Uzair", "Fira", "Amel", "Eva");
foreach ($students as $no=>$student) {
    echo(($no=1). ". $student<br>");
}

echo "<h3>Array dengan While</h3>";
$siswa = array("Najib", "Mujahid", "Rizki", "Ali", "Aldi", "Jay", "Syukri", "Uzair", "Fira", "Amel", "Eva", );
$x = 0;
while($x < count($siswa)) {
    echo ($x+1) ."." . $siswa[$x] . "<br>";
    $x++;
}
// Kerjakan hal yang sama pada array dengan For
echo "<h3>Array dengan FOR</h3>";
$rgi = ["RGI Depok", "RGI Magelang", "RGI jakarta Timur", "RGI aceh", "RGI Yogyakarta", "RGI Cilacap"]
for ($i=0; $i < count($rgi); $i++) {
    echo ($i=1) . "." . $rgi[$i] . "<br>";
}