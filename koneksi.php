<?php

$host = '192.168.2.101'; // IP STB
$user = 'root';
$pass = 'passwordmu';
$db   = 'ponpes';


// Membuat koneksi ke database

$koneksi = mysqli_connect($host, $user, $pass, $db);
// Memeriksa apakah koneksi berhasil
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
