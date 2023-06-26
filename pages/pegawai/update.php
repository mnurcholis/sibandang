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

$ttl = htmlspecialchars($_POST['ttl']);
$nik = htmlspecialchars($_POST['nik']);
$no_kk = htmlspecialchars($_POST['no_kk']);
$no_hp = htmlspecialchars($_POST['no_hp']);
$jabatan = htmlspecialchars($_POST['jabatan']);
$pendidikan_terakhir = htmlspecialchars($_POST['pendidikan_terakhir']);

// masukkan ke database

$query = "UPDATE data_pegawai SET nama = '$nama', ttl = '$ttl', nik = '$nik', no_kk = '$no_kk', no_hp = '$no_hp', jabatan = '$jabatan', pendidikan_terakhir = '$pendidikan_terakhir' WHERE id = $id;";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Ubah data berhasil'); window.location.href='../pegawai/'</script>";
} else {
  echo "<script>window.alert('Ubah data gagal!'); window.location.href='../pegawai/'</script>";
}
