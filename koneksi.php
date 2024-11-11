<?php
    $koneksi = mysqli_connect('localhost', 'root', '', 'databases');
    if (!$koneksi) {
        echo "Koneksi gagal!";
    }
?>