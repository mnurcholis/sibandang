<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$id = htmlspecialchars($_GET['id']);

// delete database
$query = "DELETE FROM data_pegawai WHERE id = $id";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.location.href='../pegawai'</script>";
} else {
  echo "<script>window.alert('Data data gagal dihapus!'); window.location.href='../pegawai'</script>";
}
