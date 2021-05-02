<?php
session_start();
/* if (isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
} */
require 'functions.php';

$conn = mysqli_connect("localhost", "root", "", "tawalap");
if (isset($_POST["login"])) {

    $NIK = $_POST["NIK"];
    $Password = $_POST["Password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE NIK ='$NIK'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($Password, $row["Password"])) {
            //set session

            $_SESSION["login"] = true;
            $_SESSION['id']    = $qry['id'];

            header("location:Home.php");
            exit;
        }
    }


    $error = true;
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
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <script src="https://kit.fontawesome.com/344a998c5f.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title>Tawalap</title>
</head>

<body>
    <div class="container">
        <!-- <div class="kembali"><a href="#"><i class="fas fa-times exit"></i></a></div> -->
        <h3 class="text-center login" style="color:white" ;>Login Form</h3>
        <hr style="color:rgb(37, 170, 225);">
        <form style="color: white;" action="" method="post">

            <div class="form-group">
                <label>NIK</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa-2x fas fa-id-card"></i></div>
                    </div>
                    <input type="text" name="NIK" class="form-control NIK" style="font-size: small" placeholder="Masukkan NIK Anda">
                </div>
            </div>

            <div class="form-group" style="padding-top: 10px;">
                <label>Password</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa-2x fas fa-unlock-alt"></i></div>
                    </div>
                    <input type="password" name="Password" class="form-control" style="font-size: small;" placeholder="Masukkan Password Anda">
                </div>
                <?php if (isset($error)) : ?>
                    <p style="color: red;">NIK/Password salah</p>
                <?php endif; ?>
            </div>

            <div class="lupa"><a href="bantuan.php">Lupa Password?</a></div>
            <div class="d-flex justify-content-center buttongra pt-0">
                <button type="submit" name="login" class="btn btn-primary submit">Login</button>
            </div>
        </form>
    </div> <!-- Optional JavaScript; choose one of the two! -->
    <div class="daftar">
        <h6>Belum punya Akun? <a href="daftar.php"> Daftar Akun</a></h6>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>