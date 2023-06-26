<?php
// Koneksi ke database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'db_warga';

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Memeriksa apakah parameter status dan id diberikan melalui URL
if (isset($_GET['status']) && isset($_GET['id'])) {
    $status = $_GET['status'];
    $id = $_GET['id'];

    // Mengupdate nilai status dalam tabel permohonan_surat
    $query = "UPDATE `permohonan_surat` SET `status`='$status' WHERE `id`='$id'";
    if ($conn->query($query) === TRUE) {
        header('location: index.php');
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Parameter tidak lengkap.";
}

// Menutup koneksi
$conn->close();
