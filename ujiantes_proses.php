<?php
if(isset($_POST['proses'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $nilai_hadir = $_POST['nilai_hadir'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];

    $rataRata_nilai = ($nilai_hadir + $nilai_uts + $nilai_uas + $nilai_tugas) / 4;

    echo "Nim : ". $nim . '<br>';
    echo "Nama: ". $nama . '<br>';
    echo "Jurusan: ". $jurusan . '<br>';
    echo "Jenis Kelamin: ". $jk . '<br>';
    echo "Alamat: ". $alamat . '<br>';
    echo "Nilai Hadir: ". $nilai_hadir . '<br>';
    echo "Nilai Uts: ". $nilai_uts . '<br>';
    echo "Nilai Uas: ". $nilai_uas . '<br>';
    echo "Nilai Tugas: ". $nilai_tugas . '<br>';
    echo "Nilai Rata-rata: ". $nilai_tugas . '<br>';

    echo "Kamu dapat Nilai: ";
    if ($rataRata_nilai >= 85) {
        echo "A";
    } elseif ($rataRata_nilai >= 75) {
        echo "B";
    } elseif ($rataRata_nilai >= 60) {
        echo "C";
    } elseif ($rataRata_nilai >= 50) {
        echo "D";
    }else {
        echo "E";
    }
}
