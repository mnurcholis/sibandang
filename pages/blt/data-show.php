<?php
include('../../config/koneksi.php');

// ambil dari url
$id = $_GET['id'];

// ambil dari database
$query = "SELECT * FROM data_blt WHERE id = '$id'";

$hasil = mysqli_query($db, $query);

$blt = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $blt[] = $row;
}
