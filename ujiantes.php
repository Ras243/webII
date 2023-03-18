<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ujian Mid Web II</title>
</head>

<body>
    <h2>Menghitung Nilai Mahasiswa</h2>
    <form action="ujiantes_proses.php" method="post">
        Nim : <input type="text" name="nim"> <br><br>
        Nama : <input type="text" name="nama"> <br><br>
        Jurusan :
        <select name="jurusan" id="jurusan">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Teknik Sipil">Teknik Sipil</option>
            <option value="Teknik PWK">Teknik PWK</option>
        </select><br><br>
        Jenis Kelamin : <br>
        <input type="radio" name="jk" value="Laki-laki"> Laki-laki <br>
        <input type="radio" name="jk" value="Perempuan"> Perempuan <br><br>
        Alamat : <br>
        <textarea name="alamat" id="alamat" cols="30" rows="3"></textarea> <br><br>
        Nilai Kehadiran: <br>
        <input type="number" name="nilai_hadir"><br><br>
        Nilai Uts : <br>
        <input type="number" name="nilai_uts"><br><br>
        Nilai Uas : <br>
        <input type="number" name="nilai_uas"><br><br>
        Nilai Tugas : <br>
        <input type="number" name="nilai_tugas"> <br><br>

        <input type="submit" name="proses" value="Hitung">
    </form>

</body>

</html>