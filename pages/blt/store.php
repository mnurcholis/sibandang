<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$nama = htmlspecialchars($_POST['nama']);
$alamat = htmlspecialchars($_POST['alamat']);

$desa = htmlspecialchars($_POST['desa']);
$nik = htmlspecialchars($_POST['nik']);
$no_kk = htmlspecialchars($_POST['no_kk']);
$jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
$jumlah_diterima = htmlspecialchars($_POST['jumlah_diterima']);

// masukkan ke database

$query = "INSERT INTO data_blt (nama, alamat, desa, nik, no_kk, jenis_kelamin, jumlah_diterima) VALUES ('$nama', '$alamat', '$desa', '$nik', '$no_kk', '$jenis_kelamin', '$jumlah_diterima');";

$hasil = mysqli_query($db, $query);

// id terakhir
// mysqli_insert_id($db)

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah data berhasil'); window.location.href='../blt/create.php'</script>";
} else {
  echo "<script>window.alert('Tambah data gagal!'); window.location.href='../blt/create.php'</script>";
}
