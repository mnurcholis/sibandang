<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$id_berita = htmlspecialchars($_GET['id_berita']);
$gambar_berita = htmlspecialchars($_GET['gambar_berita']);

// delete database
$query = "DELETE FROM berita WHERE id_berita = $id_berita";

$hasil = mysqli_query($db, $query);

// delete file
exec("rm ../../assets/berita/upload/".$gambar_berita);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.location.href='../berita'</script>";
} else {
  echo "<script>window.alert('Foto gagal dihapus!'); window.location.href='../berita'</script>";
}
