<?php
for ($i=1; $i < 10; $i++) { 
    echo "$i, ";
}
echo $i;

echo "<br>---------------------------<br>";
// cara print dari 5 - 15
$a = 5;
while ($a <= 14) {
    echo $a++ . ",";
}
echo $a;

echo "<br>---------------------------<br>";
// cara print dari 1-10
$a= 1;
do {
    echo "$a";
    $a++;
    if ($a <= 10) {
        echo ", ";
    }
} while ($a <= 10);

echo "<br>---------------------------<br>";
// menampilkan angka 30 - 70
// menggunakan increment 3
$x = 30;
do {
    echo $x;
    $x+=3;
    if ($x <= 70) {
        echo ", ";
    }
} while ($x <= 70);

?>


