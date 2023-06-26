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
$id = htmlspecialchars($_POST['id']);

$alamat = htmlspecialchars($_POST['alamat']);
$desa = htmlspecialchars($_POST['desa']);
$nik = htmlspecialchars($_POST['nik']);
$no_kk = htmlspecialchars($_POST['no_kk']);
$jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
$jumlah_diterima = htmlspecialchars($_POST['jumlah_diterima']);

// masukkan ke database

$query = "UPDATE data_blt SET nama = '$nama', alamat = '$alamat', desa = '$desa', nik = '$nik', no_kk = '$no_kk', jenis_kelamin = '$jenis_kelamin', jumlah_diterima = '$jumlah_diterima' WHERE id = $id;";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Ubah data berhasil'); window.location.href='../blt/'</script>";
} else {
  echo "<script>window.alert('Ubah data gagal!'); window.location.href='../blt/'</script>";
}
