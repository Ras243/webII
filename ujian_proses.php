<?php
if(isset($_POST['proses'])) {
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $kategori = $_POST['kategori'];
    $satuan = $_POST['satuan'];
    $harga_satuan = $_POST['harga_satuan'];
    $jumlah_beli = $_POST['jumlah_beli'];

    $total_harga = $harga_satuan * $jumlah_beli;
    if ($total_harga >= 85) {
        echo "A";
    } elseif ($total_harga >= 75) {
        echo "B";
    } elseif ($total_harga >= 60) {
        echo "C";
    } elseif ($total_harga >= 50) {
        echo "D";
    } else {
        echo "E";
    }

    echo "Kode Barang  :" . $kode_barang . "<br>";
    echo "Nama Barang  :" . $nama_barang . "<br>";
    echo "Kategori     :" . $kategori . "<br>";
    echo "Satuan       :" . $satuan . "<br>";
    echo "Harga Satuan :" . $harga_satuan . "<br>";
    echo "Jumlah Beli  :" . $jumlah_beli . "<br>";
    echo "Total Harga  :" . $total_harga . "<br>";
    echo "Total Bayar  :" . $total_bayar . "<br>";
}
