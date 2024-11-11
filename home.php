<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        if ($_SESSION['status']!="login") {
            header("location: index.php?pesan=belum_login");
        }
    ?>

    <h4>Selamat datang, <?php echo $_SESSION['email']; ?>! Anda berhasil Login.</h4>

    <a href="logout.php">Logout disini</a>
</body>
</html>