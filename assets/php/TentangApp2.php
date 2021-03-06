<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="../css/styles.css">

    <!-- Icon -->
    <link rel="shortcut icon" href="../img/logo.jpg" />

    <title>TAWALAP | Tentang App</title>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
            <span class="nav__logo-name">TAWALAP online</span>
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
                    <a href="LaporanBaru.php" class="nav__link">
                        <i class='bx bx-user nav__icon'></i>
                        <span class="nav__name">Laporan Baru</span>
                    </a>

                    <a href="LaporanDiterima.php" class="nav__link">
                        <i class='bx bx-message-check nav__icon'></i>
                        <span class="nav__name">Laporan Diterima</span>
                    </a>

                    <a href="TentangApp2.php" class="nav__link active">
                        <i class='bx bx-folder nav__icon'></i>
                        <span class="nav__name">Tentang App</span>
                    </a>

                </div>
            </div>

            <a href="logoutadmin.php" class="nav__link">
                <i class='bx bx-log-out nav__icon'></i>
                <span class="nav__name">Keluar</span>
            </a>
        </nav>
    </div>

    <br>
    <br>
    <div class="card text-center" style="border-color: white; border-width: 5px; border-radius: 12px;">
        <div class="card-header " style="background-color: #2e617e; border-color: white; border-width: 2px;">
            <h2 style="color: white;">Tentang App</h2>
        </div>
        <div class="card-body" style="background-color: #5995b3;">
            <h5 style="color: white;">Tawalap atau singkatan dari Tamu Wajib Lapor adalah sebuah website
                yang dirancang untuk memudahkan warga yang datang ke desa dalam
                melakukan pelaporan sebagai tamu secara online dalam waktu 1x24 jam.
                Dengan adanya website ini, diharapkan pelaksanaan proses melapor sebagai
                tamu di lingkungan desa menjadi lebih efektif dan efisien tanpa harus
                mengunjungi rumah kepala desa atau kantor desa. Dengan demikian, tingkat
                keamanan dan ketertiban desa diharapkan semakin meningkat.
            </h5>
        </div>
    </div>

    <!--===== MAIN JS =====-->
    <script src="../js/main.js"></script>
</body>

</html>