<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id = $_GET['id'];

// ambil dari database
$query = "SELECT * FROM permohonan_surat WHERE id = $get_id";

$hasil = mysqli_query($db, $query);

$data_permohonan_surat = array();

while ($row = mysqli_fetch_assoc($hasil)) {
    $data_permohonan_surat[] = $row;
}
