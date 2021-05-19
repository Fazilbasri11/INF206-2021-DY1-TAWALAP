<?php
include('koneksi.php');
$query = mysqli_query($koneksi,"SELECT * FROM tamu");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        
		<!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="../css/styles.css">

        <!-- Icon -->
        <link rel="shortcut icon" href="../img/logo.jpg" />
        
    <title>TAWALAP | Laporan Baru</title>
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
                        <a href="" class="nav__link active">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">Laporan Baru</span>
                        </a>

                        <a href="TentangApp2.php" class="nav__link">
                            <i class='bx bx-folder nav__icon' ></i>
                            <span class="nav__name">Tentang App</span>
                        </a>

                    </div>
                </div>

                <a href="#" class="nav__link">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Keluar</span>
                </a>
            </nav>
        </div>

		<h1 style="margin: 25px 300px; text-align:center; color:white;"> <b>Daftar Laporan Tamu</b></h1>
	<table class="table" style="color:black; text-align:justify; background-image: url('../img/bg.png'); background-size:cover;">

  		<thead>
    	<tr>
      		<th scope="col">No</th>
      		<th scope="col">Nik</th>
      		<th scope="col">Nama Lengkap</th>
      		<th scope="col">Tempat/Tanggal Lahir</th>
	  		<th scope="col">Jenis Kelamin</th>
	  		<th scope="col">Alamat Asal</th>
	  		<th scope="col">Pekerjaan</th>
	  		<th scope="col">Status</th>
	  		<th scope="col">Tanggal Masuk Desa</th>
	  		<th scope="col">Tanggal Keluar Desa</th>
	  		<th scope="col">No HP/Telepon</th>
	  		<th scope="col">No Rumah</th>
	  		<th scope="col">Foto Anda</th>
	  		<th scope="col">Foto KTP</th>
	  		<th scope="col">Konfirmasi</th>
    	</tr>
  		</thead>
  	<tbody>
  		<?php 
            $no = 1;
            while($row = mysqli_fetch_array($query))
            {
        ?>
    		<tr>
    		  		<td align="center" valign="baseline"><?php echo $no++; ?></td>
                    <td align="center" valign="baseline"><?php echo $row['nik']; ?></td>
                    <td align="center" valign="baseline"><?php echo $row['nama_lengkap']; ?></td>
                    <td align="center" valign="baseline"><?php echo $row['tempat_tanggal_lahir']; ?></td>
                    <td align="center" valign="baseline"><?php echo $row['jenis_kelamin']; ?></td>
                    <td align="center" valign="baseline"><?php echo $row['alamat_asal']; ?></td>
                    <td align="center" valign="baseline"><?php echo $row['pekerjaan']; ?></td>
                    <td align="center" valign="baseline"><?php echo $row['status']; ?></td>
                    <td align="center" valign="baseline"><?php echo $row['tanggal_masuk']; ?></td>
                    <td align="center" valign="baseline"><?php echo $row['tanggal_keluar']; ?></td>
                    <td align="center" valign="baseline"><?php echo $row['no_hp']; ?></td>
                    <td align="center" valign="baseline"><?php echo $row['no_rumah']; ?></td>
					<td align="center" valign="baseline"><img src="image_view.php?id=<?php echo $row['id']; ?>" width="100"/></td>
                    <td align="center" valign="baseline"><img src="image_view1.php?id=<?php echo $row['id']; ?>" width="100"/></td>
					<td align="center" valign="baseline"><a class="btn btn-info" href="Konfirmasi.php">KONFIRMASI</a></td>
   			 </tr>
		<?php
            }
     	?>
  	</tbody>
	</table>
        
	<h1></h1>
    <!--===== MAIN JS =====-->
    <script src="../js/main.js"></script>
</body>
</html>