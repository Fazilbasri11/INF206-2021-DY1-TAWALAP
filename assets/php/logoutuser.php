<?php
if (isset($_POST['iya'])) {
    session_start();
    $_SESSION = [];
    session_unset();
    session_destroy();

    header("Location: index.php");
    exit;
} else if (isset($_POST['tidak'])) {
    header("location:Home.php");
}


session_start();
if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}
include('koneksi.php');
$nik = $_SESSION["NIKAkun"];
$query = mysqli_query($koneksi, "SELECT * FROM tamu WHERE nik ='$nik'");
$konfirmasi = mysqli_fetch_assoc($query);


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

                    <a href="ProsedurLapor.php" class="nav__link">
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

            <a href="logoutuser.php" class="nav__link active">
                <i class='bx bx-log-out nav__icon'></i>
                <span class="nav__name">Keluar</span>
            </a>
        </nav>
    </div>
    <br>

    <br>
    <h1 class="text-center" style="color:white;"><b>KELUAR</b></h1>
    <div class="mt-3">
        <div class="card-header text-black text-center mx-auto shadow-lg" style="width: 600px; background-color :#5995b3; border-radius: 15px 15px 0px 0px;">
        </div>
        <div class="card-body text-black mx-auto shadow-lg" style="width: 600px; background-image: url('../img/bg.png'); background-size: cover ; border-radius:  0px 0px 15px 15px;">
            <form action="logoutuser.php?>" method="post" enctype="multipart/form-data">
                <div class="form-group text-center">
                    <p class="card-text" style="color: black;"><b></b>Apakah Anda Yakin Ingin Keluar?</p>
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