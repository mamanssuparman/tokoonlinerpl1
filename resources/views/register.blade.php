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
    <h3 class="text-center">Registrasi Baru</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="/register" method="POST">
                    @csrf
                    <label for="">Nama</label>
                    <input type="text" name="name" class="form form-control"> <br>
                    <label for="">email</label>
                    <input type="text" name="email" class="form form-control"> <br>
                    <label for="">Password</label>
                    <input type="text" name="password" class="form form-control"> <br>
                    <label for="">Phone</label>
                    <input type="text" name="phone" class="form form-control"> <br>
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="form form-control"> <br>
                    <button type="submit" class="btn btn-outline-primary btn-lg">Register</button> <br>
                </form>
            </div>
        </div>
    </div>

    <script src="/js/bootstrap.min.js">
    </script>
</body>

</html>
