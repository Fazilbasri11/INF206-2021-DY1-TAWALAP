<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== Bootstrap CSS ===== -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="../css/StyleProsedur.css">

        <!-- Icon -->
        <link rel="shortcut icon" href="../img/logo.jpg" />

        <title>TAWALAP | Buat Laporan</title>
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
                        <a href="Home.html" class="nav__link">
                        <i class='bx bx-grid-alt nav__icon' ></i>
                            <span class="nav__name">Home</span>
                        </a>

                        <a href="BuatLaporan.html" class="nav__link active">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">Buat Laporan</span>
                        </a>
                        
                        <a href="ProsedurLapor.html" class="nav__link">
                            <i class='bx bx-bookmark nav__icon' ></i>
                            <span class="nav__name">Prosedur Lapor</span>
                        </a>

                        <a href="Pesan.html" class="nav__link">
                            <i class='bx bx-message-square-detail nav__icon' ></i>
                            <span class="nav__name">Pesan</span>
                        </a>

                        <a href="TentangApp1.html" class="nav__link">
                            <i class='bx bx-folder nav__icon' ></i>
                            <span class="nav__name">Tentang App</span>
                        </a>

                    </div>
                </div>

                <a href="Logout.html" class="nav__link">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Keluar</span>
                </a>
            </nav>
        </div>

        <!--Isi Form-->
        <div class="container" style="padding-top: 1rem;">
        <h2 style="margin: 15px 300px; text-align:center; color:black;">Formulir Laporan Tamu</h2>
        
        <div class="mt-3">
            <div class="card-header text-black text-center mx-auto shadow-lg" style="width: 600px; background-color :#5995b3; border-radius: 15px 15px 0px 0px;">
            </div>
            <div class="card-body text-black mx-auto shadow-lg" style="width: 600px; background-image: url('../img/bg.png'); background-size: cover ; border-radius:  0px 0px 15px 15px;">
            <form action="user_act.php" method="post" enctype="multipart/form-data">
                    <div class="form-group text-center">
                        <label>Nik</label>
                         <br>
                        <input class="text-center mx-auto rounded form-control" style="width: 400px;" type="text" name="nik" placeholder="Silahkan Masukkan Nik Anda" required>
                        </br>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <br>
                        <input class="text-center mx-auto rounded form-control" style="width: 400px;" type="text" name="nama_lengkap"placeholder="Silahkan Masukkan Nama Lengkap Anda" required>
                        </br>
                    <div class="form-group">
                        <label>Tempat/Tanggal Lahir</label>
                        <br>
                        <input class="text-center mx-auto rounded form-control" style="width: 400px;" type="text" name="tempat_tanggal_lahir" placeholder="Silahkan Masukkan TTD Anda" required>
                        </br>
                        <div class="form-group">
                            <label class="mt-3">Jenis Kelamin</label>
                            <br>
                            <select name="jenis_kelamin" class="form-select text-center mx-auto" style="width: 400px;" aria-label="Default select example">
                                <option></option>
                                <option value ="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </br>
                     <div class="form-group">
                        <label>Alamat Asal</label>
                        <br>
                        <input class="text-center mx-auto rounded form-control" style="width: 400px;" type="text" name="alamat_asal" placeholder="Silahkan Masukkan Alamat Asal Anda" required>
                        </br>
                       <div class="form-group">
                            <label class="mt-3">Pekerjaan</label>
                            <br>
                            <select name="pekerjaan" class="form-select text-center mx-auto" style="width: 400px;" aria-label="Default select example">
                                <option></option>
                                <option value="Belum/Tidak Bekerja">Belum/Tidak Bekerja</option>
                                <option value="Buruh">Buruh</option>
                                <option value="Dokter">Dokter</option>
                                <option value="Dosen">Dosen</option>
                                <option value="Karyawan Swasta">Karyawan Swaasta</option>
                                <option value="Pedagang">Pedagang</option>
                                <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                                <option value="Pensiunan">Pensiunan</option>
                                <option value="Petani">Petani</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Dan lain-lainnya">Dan Lain-lainnya</option>
                            </select>
                        </br>
                     <div class="form-group">
                        <label>Status</label>
                        <br>
                        <input class="text-center mx-auto rounded form-control" style="width: 400px;" type="text" name="status" placeholder="Silahkan Masukkan Status Anda" required>
                        </br>
                     <div class="form-group">
                        <label>Tanggal Masuk Desa</label>
                        <br>
                        <input class="text-center mx-auto rounded form-control" style="width: 400px;" type="text" name="tanggal_masuk" placeholder="Silahkan Masukkan Tangal Masuk Anda" required>
                        </br>
                     <div class="form-group">
                        <label>Tanggal Keluar Desa</label>
                        <br>
                        <input class="text-center mx-auto rounded form-control" style="width: 400px;" type="text" name="tanggal_keluar" placeholder="Silahkan Masukkan Tanggal Keluar Anda" required>
                        </br>
                    <div class="form-group">
                        <label>No HP/Telepon</label>
                        <br>
                        <input class="text-center mx-auto rounded form-control" style="width: 400px;" type="text" name="no_hp" placeholder="Silahkan Masukkan No HP/Telepon Anda" required>
                        </br>
                    <div class="form-group">
                        <label>No Rumah</label>
                        <br>
                        <input class="text-center mx-auto rounded form-control" style="width: 400px;" type="text" name="no_rumah" placeholder="Silahkan Masukkan No Rumah Anda" required>
                        </br>
                    </div> 
                    <table align="center" cellspacing="2">
                        <tr>
                            <td>Foto Anda</td>
                            <td>
                                <input type="file" name="foto_anda" required="required" style="color: red">
                            </td>
                        </tr>
                    </table>
                    <br>
                    <table align="center" cellspacing="2">
                        <tr>
                            <td>Foto KTP</td>
                            <td>
                                <input type="file" name="foto_ktp" required="required" style="color: red">
                    
                            </td>
                        </tr>
                    </table>
                        
                    <button type="submit" class="btn btn-success mt-3 shadow-sm" name="simpan">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!--Akhir formulir-->


        <!--===== MAIN JS =====-->
        <script src="../js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>