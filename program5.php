<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses05.php" method="post" name="Input">
        <h2>Login Here...</h2>
        Username : <input type="text" name="username"><br>
        Password : <input type="text" name="password"><br>
        <input type="submit" name="login" value="Login">
        <input type="button" name="reset" value="Reset" onclick="location.reload()">
    </form>
</body>
</html>