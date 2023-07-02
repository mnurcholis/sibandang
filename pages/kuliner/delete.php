<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$id_kuliner = htmlspecialchars($_GET['id_kuliner']);
$gambar_kuliner = htmlspecialchars($_GET['gambar_kuliner']);

// delete database
$query = "DELETE FROM kuliner WHERE id_kuliner = $id_kuliner";

$hasil = mysqli_query($db, $query);

// delete file
exec("rm ../../assets/kuliner/upload/".$gambar_kuliner);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.location.href='../kuliner'</script>";
} else {
  echo "<script>window.alert('Foto gagal dihapus!'); window.location.href='../kuliner'</script>";
}
