<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ini halaman post</title>
</head>
<body>
    <form action="/kepangandaran" method="POST">
        @csrf
        <input type="text" name="nama"> <br>
        <input type="text" name=""> <br>
        <button type="submit" name="btn_submit">Kirim</button>
    </form>
</body>
</html>