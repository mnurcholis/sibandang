<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM permohonan_surat";

$hasil = mysqli_query($db, $query);

$data_permohonan_surat = array();

while ($row = mysqli_fetch_assoc($hasil)) {
    $data_permohonan_surat[] = $row;
}
