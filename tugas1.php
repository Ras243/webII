<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaji Karyawan</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Gaji</label> <br>
        <input type="number" name="gaji" id="gaji"><br>
        <label for="">Lama Lembur</label> <br>
        <input type="number" name="lamaLembur" id="lamaLembur"> <br><br>
        <button type="submit" name="cek_gaji">Cek Gaji</button>
    </form>
</body>

</html>

<?php
if (isset($_POST["cek_gaji"])) {
    $gaji = $_POST['gaji'];
    $lamaLembur = $_POST['lamaLembur'];
    $gajiLembur = 50000;
    if ($lamaLembur > 0) {
        echo "Gaji 1 bulan dan Lembur selama $lamaLembur jam: ", $gaji + $lamaLembur * $gajiLembur;
    } else {
        echo $gaji;
    }
}
?>