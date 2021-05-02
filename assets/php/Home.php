<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}
require 'functions.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="../css/home.css">

    <!-- Icon -->
    <link rel="shortcut icon" href="../img/logo.jpg" />

    <title>TAWALAP | Home</title>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
            <span class="nav__logo-name">TAWALAP online</span>
        </div>

        <div class="header__img">
            <img src="../img/profile.png" alt="">
        </div>
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav__logo">
                    <i class='bx bx-layer nav__logo-icon'></i>
                    <span class="nav__logo-name">TAWALAP<br>online</span>
                </a>

                <div class="nav__list">
                    <a href="Home.html" class="nav__link active">
                        <i class='bx bx-grid-alt nav__icon'></i>
                        <span class="nav__name">Home</span>
                    </a>

                    <a href="BuatLaporan.html" class="nav__link">
                        <i class='bx bx-user nav__icon'></i>
                        <span class="nav__name">Buat Laporan</span>
                    </a>

                    <a href="ProsedurLapor.html" class="nav__link">
                        <i class='bx bx-bookmark nav__icon'></i>
                        <span class="nav__name">Prosedur Lapor</span>
                    </a>

                    <a href="Pesan.html" class="nav__link">
                        <i class='bx bx-message-square-detail nav__icon'></i>
                        <span class="nav__name">Pesan</span>
                    </a>

                    <a href="TentangApp1.html" class="nav__link">
                        <i class='bx bx-folder nav__icon'></i>
                        <span class="nav__name">Tentang App</span>
                    </a>

                </div>
            </div>

            <a href="logout.php" class="nav__link">
                <i class='bx bx-log-out nav__icon'></i>
                <span class="nav__name">Keluar</span>
            </a>
        </nav>
    </div>

    <!-- isi home -->



    <div class="holder">
        <div class="card">
            <div class="card__text">
                <?php
                $tampilPeg    = mysqli_query($conn, "SELECT * FROM user WHERE id='$_SESSION[login]'");
                $peg    = mysqli_fetch_array($tampilPeg);
                ?>
                <table border="0" cellpadding="4">
                    <tr>
                        <td><?= $peg['id'] ?>

                    </tr>
                </table>
            </div>
        </div>
    </div>

    <!--===== MAIN JS =====-->
    <script src="../js/main.js"></script>
</body>

</html>