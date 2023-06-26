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
$tempat_lahir = htmlspecialchars($_POST['tempat_lahir']);
$tanggal_lahir = htmlspecialchars($_POST['tanggal_$tanggal_lahir']);

$nik = htmlspecialchars($_POST['nik']);
$no_kk = htmlspecialchars($_POST['no_kk']);
$no_hp = htmlspecialchars($_POST['no_hp']);
$jabatan = htmlspecialchars($_POST['jabatan']);
$pendidikan_terakhir = htmlspecialchars($_POST['pendidikan_terakhir']);

// masukkan ke database

$query = "INSERT INTO data_pegawai (nama, ttl, nik, no_kk, no_hp, jabatan, pendidikan_terakhir) VALUES ('$nama', '$tempat_lahir, $tanggal_lahir', '$nik', '$no_kk', '$no_hp', '$jabatan', '$pendidikan_terakhir');";

$hasil = mysqli_query($db, $query);

// id terakhir
// mysqli_insert_id($db)

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah data berhasil'); window.location.href='../pegawai/create.php'</script>";
} else {
  echo "<script>window.alert('Tambah data gagal!'); window.location.href='../pegawai/create.php'</script>";
}
