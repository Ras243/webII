<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Type Radio</title>
</head>
<body>
    <form action="proses06.php" method="post" name="input">
        <h2>Pilih Jurusan Anda: </h2>
        <input type="radio" name="jurusan" value="TI" checked> Jurusan: <br>
        <input type="radio" name="jurusan" value="TI"> Teknik Informatika <br>
        <input type="radio" name="jurusan" value="TS"> Teknik Sipil <br>
        <input type="radio" name="jurusan" value="TP"> Teknik PWK <br>
        <input type="radio" name="jurusan" value="TE"> Teknik Elektro <br>
        <input type="submit" name="pilih" value="Pilih">
    </form>
</body>
</html>