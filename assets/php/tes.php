<html>

<head>
    <title>Halaman Pengurus - www.malasngoding.com</title>
</head>

<body>
    <?php
    session_start();
    ?>
    <h1>Halaman Pengurus</h1>

    <p>Halo <b><?php echo $_SESSION['Nama']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['Level']; ?></b>.</p>
    <a href="logout.php">LOGOUT</a>

    <br />
    <br />

</body>

</html>