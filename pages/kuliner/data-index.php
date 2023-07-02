<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM kuliner ORDER BY id_kuliner DESC";

$hasil = mysqli_query($db, $query);

$data_kuliner = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_kuliner[] = $row;
}
