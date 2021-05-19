<?php
include('koneksi.php');
if(isset($_GET['id'])) 
{
    $query = mysqli_query($koneksi,"select * from tamu where id='".$_GET['id']."'");
    $row = mysqli_fetch_array($query);
    echo $row["foto_ktp"];
}
else
{
    header('location:LaporanBaru.php');
}
?>