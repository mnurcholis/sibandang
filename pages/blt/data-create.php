<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM data_blt";

$hasil = mysqli_query($db, $query);

$data_blt = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_blt[] = $row;
}
