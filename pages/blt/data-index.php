<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM data_blt";

$hasil = mysqli_query($db, $query);

$blt = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $blt[] = $row;
}

// hitung kartu keluarga
$query_jumlah_data = "SELECT COUNT(*) AS total FROM data_blt ";
$hasil_jumlah_data = mysqli_query($db, $query_jumlah_data);
$jumlah_data = mysqli_fetch_assoc($hasil_jumlah_data);
