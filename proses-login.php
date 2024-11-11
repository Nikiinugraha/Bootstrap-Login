<?php
    session_start();
    include 'koneksi.php';

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $query = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email' AND password='$password'");

        $check = mysqli_num_rows($query);

        if ($check > 0) {
            $_SESSION['email'] = $email;
            $_SESSION['status'] = 'login';
            header("location: home.php");
        }else{
            header("location: index.php?pesan=gagal");
        }
    }
?>