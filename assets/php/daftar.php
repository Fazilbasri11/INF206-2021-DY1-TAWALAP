<?php
require 'functions.php';
$conn = mysqli_connect("localhost", "root", "", "tawalap");
if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "
            <script>
                alert('data ditambah');
                document.location.href='login.php';
            </script>
            ";
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/daftar.css">
    <script src="https://kit.fontawesome.com/344a998c5f.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- Icon -->
    <link rel="shortcut icon" href="../img/logo.jpg" />
    <title>Tawalap</title>
</head>

<body>
    <div class="container-md">
        <div class="kembali"><a href="index.php"><i class="fas fa-times exit"></i></a></div>
        <h3 class="text-center login" style="color:white">Register</h3>
        <hr style="color:rgb(37, 170, 225);">
        <form method="post" style="color: white;" action="">


            <div class="form-group judul" style="padding-top: 5px;">
                <label>NIK</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa-2x fas fa-id-card"></i></div>
                    </div>
                    <input type="text" name="NIKAkun" class="form-control" style="font-size: small" placeholder="Masukkan NIK Anda" required>
                </div>
            </div>

            <div class="form-group judul">
                <label>Nama</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa-2x fas fa-user"></i></div>
                    </div>
                    <input type="text" name="NamaAkun" class="form-control" style="font-size: small" placeholder="Masukkan Nama Anda" required>
                </div>
            </div>

            <div class="form-group judul" style="padding-top: 5px;">
                <label>Email / No HP</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa-2x fas fa-envelope"></i></div>
                    </div>
                    <input type="text" name="Email" class="form-control" style="font-size: small" placeholder="Masukkan Email / no HP" required>
                </div>
            </div>

            <div class="form-group judul" style="padding-top: 5px;">
                <label>Password</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa-2x fas fa-unlock-alt"></i></div>
                    </div>
                    <input type="password" name="Password" class="form-control" style="font-size: small;" placeholder="Masukkan Password Anda" required>
                </div>
            </div>

            <div class="form-group judul" style="padding-top: 5px;">
                <label>Konfirmasi Password</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa-2x fas fa-unlock-alt"></i></div>
                    </div>
                    <input type="password" name="Password2" class="form-control" style="font-size: small;" placeholder="Konfirmasi Password Anda" required>
                </div>
            </div>
            <div class="d-flex justify-content-center buttongra pt-0">
                <button type="submit" name="register" class="btn btn-primary submit">DAFTAR</button>
            </div>
        </form>
    </div> <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></.script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></.script>
    -->
</body>

</html>