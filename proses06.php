<?php 
if(isset($_POST['pilih'])) {
    $jurusan = $_POST['jurusan'];
    echo "Jurusan Anda adalah <b><font color='red'>$jurusan</font></b>";
    if ($jurusan == 'TI') {
        echo "<br>kamu anak ngoding";
    } elseif ($jurusan == 'TS') {
        echo "<br>kamu anak bangunan";
    } elseif ($jurusan == 'TP') {
        echo "<br>kamu suka healing";
    } elseif ($jurusan == 'TE') {
        echo "<br>awas di setrum";
    }
}
?>
