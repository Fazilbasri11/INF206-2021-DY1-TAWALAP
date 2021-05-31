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
    <link rel="stylesheet" href="../css/StyleProsedur.css">

    <!-- Icon -->
    <link rel="shortcut icon" href="../img/logo.jpg" />

    <title>TAWALAP | Prosedur Lapor</title>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
            <span class="nav__logo-name">TAWALAP online</span>
        </div>

        <div class="header__img">
            <?php
            if ($konfirmasi != NULL) {
                if ($konfirmasi['Konfirmasi'] == "IYA") {
            ?>
                    <img src="Foto_user.php?nik=<?php echo $konfirmasi['nik']; ?>" width="100" />
                <?php
                } else if ($konfirmasi['Konfirmasi'] == "TIDAK") {
                ?>

                    <img src="../img/profile.png" alt="">
                <?php
                }
            } else {
                ?>
                <img src="../img/profile.png" alt="">
            <?php
            }
            ?>
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
                    <a href="Home.php" class="nav__link">
                        <i class='bx bx-grid-alt nav__icon'></i>
                        <span class="nav__name">Home</span>
                    </a>

                    <a href="BuatLaporan.php" class="nav__link">
                        <i class='bx bx-user nav__icon'></i>
                        <span class="nav__name">Buat Laporan</span>
                    </a>

                    <a href="ProsedurLapor.php" class="nav__link active">
                        <i class='bx bx-bookmark nav__icon'></i>
                        <span class="nav__name">Prosedur Lapor</span>
                    </a>

                    <a href="Pesan.php" class="nav__link">
                        <i class='bx bx-message-square-detail nav__icon'></i>
                        <span class="nav__name">Pesan</span>
                    </a>

                    <a href="TentangApp1.php" class="nav__link">
                        <i class='bx bx-folder nav__icon'></i>
                        <span class="nav__name">Tentang App</span>
                    </a>

                </div>
            </div>

            <a href="logoutuser.php" class="nav__link">
                <i class='bx bx-log-out nav__icon'></i>
                <span class="nav__name">Keluar</span>
            </a>
        </nav>
    </div>

    <br>
    <br>
    <div class="card " style="border-color: white; border-width: 5px; border-radius: 12px;">
        <div class="card-header text-center" style="background-color: #2e617e; border-color: white; border-width: 2px;">
            <h2 style="color: white;">Prosedur Lapor</h2>
        </div>
        <div class="card-body" style="background-color: #5995b3;">
            <h4 style="color: white;">1. Isi biodata pada menu <a href="BuatLaporan.php"><b><u>Buat Laporan</u></b></a><br>
                2. Unggah pas foto dan foto KTP dengan ukuran maksimum 400 KB<br>
                3. Klik tombol submit<br>
                4. Tunggu verifikasi data oleh admin<br>
                5. Periksa hasil verifikasi pada menu <a href="Pesan.php"><b><u>Pesan</u></b></a><br>
                6. Bila laporan ditolak, maka harap ulangi dengan seksama<br>
        </div>
        </h4>

    </div>

    <!--===== MAIN JS =====-->
    <script src="../js/main.js"></script>
</body>

</html>