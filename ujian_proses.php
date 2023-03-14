<?php
if(isset($_POST['proses'])) {
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $kategori = $_POST['kategori'];
    $satuan = $_POST['satuan'];
    $harga_satuan = $_POST['harga_satuan'];
    $jumlah_beli = $_POST['jumlah_beli'];

    $total_harga = $harga_satuan * $jumlah_beli;
    if ($kategori == "makanan") {
        $total_bayar = $total_harga * 0.5;
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
?>