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

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/344a998c5f.js" crossorigin="anonymous"></script>

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="../css/StyleProsedur.css">

    <!-- Icon -->
    <link rel="shortcut icon" href="../img/logo.jpg" />

    <title>TAWALAP | Konfirmasi</title>
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
                    <a href="LaporanBaru.php" class="nav__link active">
                        <i class='bx bx-user nav__icon'></i>
                        <span class="nav__name">Laporan Baru</span>
                    </a>

                    <a href="LaporanDiterima.php" class="nav__link">
                        <i class='bx bx-message-check nav__icon'></i>
                        <span class="nav__name">Laporan Diterima</span>
                    </a>

                    <a href="TentangApp2.php" class="nav__link">
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
    <h1 class="text-center" style="color:white;"><b>Konfirmasi</b></h1>
    <div class="mt-3">
        <div class="card-header text-black text-center mx-auto shadow-lg" style="width: 600px; background-color :#5995b3; border-radius: 15px 15px 0px 0px;"></div>
        <div class="card-body text-black mx-auto shadow-lg" style="width: 600px; background-image: url('../img/bg.png'); background-size: cover ; border-radius:  0px 0px 15px 15px;">
            <div class="kembali" style="padding-left: 95%;"><a href="LaporanBaru.php"><i class="fas fa-times exit"></i></a></div>
            <form action="Pesan.php?nik=<?php echo $_GET['nik']; ?>" method="post" enctype="multipart/form-data">
                <div class="form-group text-center">
                    <p class="card-text" style="color: black;"><b></b>Apakah Anda Ingin Menkonfirmasi Laporan?</p>
                    <button type="submit" class="btn btn-success mt-3 shadow-sm" name="iya">IYA</button>
                    <button type="submit" class="btn btn-danger mt-3 shadow-sm" name="tidak">TIDAK</button>
            </form>
        </div>
    </div>
    </div>

    <!--===== MAIN JS =====-->
    <script src="../js/main.js"></script>
</body>

</html>