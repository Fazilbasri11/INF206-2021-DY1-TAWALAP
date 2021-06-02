<?php
require 'functions.php';
if (isset($_GET['nik'])) {
    $query = mysqli_query($conn, "select * from tamu where nik='" . $_GET['nik'] . "'");
    $row = mysqli_fetch_array($query);
    echo $row["foto_anda"];
} else {
    header('location:LaporanBaru.php');
}
