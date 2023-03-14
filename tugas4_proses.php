<?php
if (isset($_POST["Hitung"])) {
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $luas = $panjang * $lebar;
    echo "luas : $luas";
}
?>