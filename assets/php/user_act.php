<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    if (!isset($_FILES['foto_anda']['tmp_name'])) {
        echo '<span style="color:red"><b><u><i>Pilih file gambar</i></u></b></span>';
    } else {
        $file_name = $_FILES['foto_anda']['name'];
        $file_size = $_FILES['foto_anda']['size'];
        $file_type = $_FILES['foto_anda']['type'];
        $file_name1 = $_FILES['foto_ktp']['name'];
        $file_size1 = $_FILES['foto_ktp']['size'];
        $file_type1 = $_FILES['foto_ktp']['type'];
        if ($file_size < 400000 and ($file_type == 'image/jpeg' or $file_type == 'image/png')) {
            if ($file_size1 < 400000 and ($file_type1 == 'image/jpeg' or $file_type1 == 'image/png')) {
                $nik = $_POST['nik'];
                $nama_lengkap = $_POST['nama_lengkap'];
                $tempat_tanggal_lahir = $_POST['tempat_tanggal_lahir'];
                $jenis_kelamin = $_POST['jenis_kelamin'];
                $alamat_asal = $_POST['alamat_asal'];
                $pekerjaan = $_POST['pekerjaan'];
                $status = $_POST['status'];
                $tanggal_masuk = $_POST['tanggal_masuk'];
                $tanggal_keluar = $_POST['tanggal_keluar'];
                $no_hp = $_POST['no_hp'];
                $no_rumah = $_POST['no_rumah'];
                $image   = addslashes(file_get_contents($_FILES['foto_anda']['tmp_name']));
                $image1   = addslashes(file_get_contents($_FILES['foto_ktp']['tmp_name']));
                $konfirmasi = "TIDAK";
                mysqli_query($koneksi, "insert into tamu (id,nik,nama_lengkap, tempat_tanggal_lahir,jenis_kelamin,alamat_asal,pekerjaan,status,tanggal_masuk,tanggal_keluar,no_hp,no_rumah,foto_anda,foto_ktp, Konfirmasi) VALUES('','$nik','$nama_lengkap','$tempat_tanggal_lahir','$jenis_kelamin','$alamat_asal','$pekerjaan','$status','$tanggal_masuk','$tanggal_keluar','$no_hp','$no_rumah','$image','$image1', '$konfirmasi')");
                header("location:Pesan.php");
            } else {
                header("location:ukuran.php");
            }
        } else {
            header("location:ukuran.php");
        }
    }
}
