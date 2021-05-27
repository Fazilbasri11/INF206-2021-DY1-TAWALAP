<?php

$conn = mysqli_connect("localhost", "root", "", "tawalap");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}


function registrasi($data)
{
    global $conn;

    $NamaAkun = htmlspecialchars($data["NamaAkun"]);
    $NIKAkun = htmlspecialchars($data["NIKAkun"]);
    $Password = mysqli_real_escape_string($conn, $data["Password"]);
    $Password2 = mysqli_real_escape_string($conn, $data["Password2"]);
    $Email = htmlspecialchars($data["Email"]);
    $Level = 3;

    $result = mysqli_query($conn, "SELECT NIKAkun FROM akun WHERE NIKAkun='$NIKAkun'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('NIK sudah terdaftar!')
        
            document.location.href='daftar.php';
        </script>";
        return false;
    }

    if ($Password !== $Password2) {
        echo "<script>
            alert('Konfirmasi Password tidak sesuai')
            </script>";
        return false;
    }
    $Password = password_hash($Password, PASSWORD_DEFAULT);

    $query = "INSERT INTO akun
                VALUES
                ('','$NamaAkun','$NIKAkun','$Password','$Email','$Level')
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
