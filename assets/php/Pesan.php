<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}
include 'koneksi.php';

$kondisi = "";
if (isset($_POST['iya'])) {
    $nik = $_GET['nik'];
    mysqli_query($koneksi, "UPDATE tamu SET Konfirmasi = 'IYA' WHERE nik='$nik' ");
    mysqli_query($koneksi, "UPDATE akun SET id_level = '2' WHERE NIKAkun='$nik' ");
    $_SESSION["Level"] = "Terdaftar";
    $kondisi = "berhasil";
    header("location:LaporanBaru.php");
} else if (isset($_POST['tidak'])) {
    $nik = $_GET['nik'];
    mysqli_query($koneksi, "UPDATE tamu SET Konfirmasi = 'GAGAL' WHERE nik='$nik' ");
    mysqli_query($koneksi, "DELETE FROM tamu WHERE nik='$nik' ");
    $kondisi = "gagal";
    header("location:LaporanBaru.php");
}

//siapkan pesan kesalahan
$nik = $_SESSION["NIKAkun"];
$query = mysqli_query($koneksi, "SELECT * FROM tamu WHERE nik ='$nik'");
$konfirmasi = mysqli_fetch_assoc($query);

$pesan = "";
if ($konfirmasi != NULL) {
    if ($konfirmasi['Konfirmasi'] == "IYA") {
        $pesan = "Selamat Laporan Anda Telah Di Konfimasi";
    } else if ($konfirmasi['Konfirmasi'] == "GAGAL") {
        $pesan = "Mohon maaf laporan anda gagal dikonfirmasi";
    } else if ($konfirmasi['Konfirmasi'] == "TIDAK") {
        $pesan = "Mohon Tunggu Konfirmasi Admin";
    }
} else {
    $pesan = "Anda Belum Membuat Laporan atau Laporan Anda Ditolak";
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
    <link rel="stylesheet" href="../css/StyleProsedur.css">

    <!-- Icon -->
    <link rel="shortcut icon" href="../img/logo.jpg" />

    <title>TAWALAP | Pesan</title>
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

                    <a href="Pesan.php" class="nav__link active">
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
    <div class="card text-center" style="border-color: white; border-width: 5px; border-radius: 12px;">
        <div class="card-header" style="background-color: #2e617e; border-color: white; border-width: 2px;">
            <h2 style="color: white;">Pesan</h2>
        </div>
        <div class="card-body" style="background-color: #5995b3;">
            <h5 class="card-title" style="color: white;"><b><?php echo $pesan; ?></b></h5>
        </div>

    </div>

    <!--===== MAIN JS =====-->
    <script src="../js/main.js"></script>
</body>

</html>