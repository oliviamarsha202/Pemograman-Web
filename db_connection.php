<?php
// Konfigurasi koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "fashiondb";

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
