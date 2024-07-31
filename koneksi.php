<?php
session_start();
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'ukk_perpus';

$koneksi = new mysqli($host, $user, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
