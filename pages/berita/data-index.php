<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM berita ORDER BY id_berita DESC";

$hasil = mysqli_query($db, $query);

$data_berita = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_berita[] = $row;
}
