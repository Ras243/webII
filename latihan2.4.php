<?php
$nim = "D0221399";
$nama = "nurrasuli";
$umur = 23;
$nilai = 82.25;
$status = TRUE;

echo "Nim : $nim <br> Nama : $nama <br> ";
print "Umur : $umur <br>";
printf("Nilai : %.3f <br>", $nilai);
if ($status) {
    echo "Status: Aktif";
}
else {
    echo "Status: Tidak Aktif";
}
?>