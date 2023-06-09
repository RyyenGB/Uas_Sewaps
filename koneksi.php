<?php
// Konfigurasi koneksi ke database
$host = 'localhost';  // Ganti dengan host database Anda
$username = 'root';   // Ganti dengan username database Anda
$password = '';       // Ganti dengan password database Anda
$database = 'rentalps'; // Ganti dengan nama database Anda

// Membuat koneksi ke database
$koneksi = new mysqli($host, $username, $password, $database);

// Memeriksa apakah koneksi berhasil
if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}

?>