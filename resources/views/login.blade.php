<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Halaman Login</title>
</head>

<body>
    <h3 class="text-center"> Login Aplikasi</h3> <br>
    <div class="container">
        <form action="/login" method="POST">
            @csrf
            <input type="text" name="email" class="form form-control"> <br>
            <input type="text" name="password" class="form form-control"> <br>
            <button type="submit" class="btn btn-outline-primary btn-lg">Login</button> <br>
            Apakah anda belum mempunyai Account, Jika belum silahkand daftar <a href="/register"> disini.!</a>
        </form>
    </div>
    <script src="/js/bootstrap.min.js">
        ,
    </script>
</body>

</html>
