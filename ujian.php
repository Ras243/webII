<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MID Pemrograman Web II</title>
</head>

<body>
    <h2>Rasul Mart</h2>
    <form action="ujian_proses.php" method="post" name="input">
        Kode Barang : <input type="text" name="kode_barang"><br><br>
        Nama Barang : <input type="text" name="nama_barang"><br><br>
        Kategori :
        <select name="kategori" id="">
            <option value="bahan pembersih">Bahan Pembersih</option>
            <option value="makanan">Makanan</option>
            <option value="minuman">Minuman</option>
            <option value="bumbu bapur">Bumbu Dapur</option>
            <option value="perawatan tubuh">Perawatan Tubuh</option>
        </select><br><br>
        Satuan:
        <input type="radio" name="satuan" value="bungkus">Bungkus
        <input type="radio" name="satuan" value="bungkus">karton <br>
        Harga Satuan : <textarea name="harga_satuan" id="" cols="20" rows="2"></textarea><br>    
        Jumlah Beli : <textarea name="jumlah_beli" id="" cols="20" rows="2"></textarea><br>    
        <!-- Total Harga : <textarea name="total_harga" id="" cols="20" rows="2"></textarea><br>
        Total Bayar : <textarea name="total_bayar" id="" cols="20" rows="2"></textarea><br> -->
        <input type="submit" name="proses" value="Kirim">
    </form>

</body>

</html>