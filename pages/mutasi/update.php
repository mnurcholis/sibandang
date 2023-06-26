<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$nik_mutasi = htmlspecialchars($_POST['nik_mutasi']);
$nama_mutasi = htmlspecialchars($_POST['nama_mutasi']);
$tempat_lahir_mutasi = htmlspecialchars($_POST['tempat_lahir_mutasi']);
$tanggal_lahir_mutasi = htmlspecialchars($_POST['tanggal_lahir_mutasi']);
$jenis_kelamin_mutasi = htmlspecialchars($_POST['jenis_kelamin_mutasi']);

$alamat_ktp_mutasi = htmlspecialchars($_POST['alamat_ktp_mutasi']);
$alamat_mutasi = htmlspecialchars($_POST['alamat_mutasi']);
$desa_kelurahan_mutasi = htmlspecialchars($_POST['desa_kelurahan_mutasi']);
$kecamatan_mutasi = htmlspecialchars($_POST['kecamatan_mutasi']);
$kabupaten_kota_mutasi = htmlspecialchars($_POST['kabupaten_kota_mutasi']);
$provinsi_mutasi = htmlspecialchars($_POST['provinsi_mutasi']);
$negara_mutasi = htmlspecialchars($_POST['negara_mutasi']);
$rt_mutasi = htmlspecialchars($_POST['rt_mutasi']);
$rw_mutasi = htmlspecialchars($_POST['rw_mutasi']);

$agama_mutasi = htmlspecialchars($_POST['agama_mutasi']);
$pendidikan_terakhir_mutasi = htmlspecialchars($_POST['pendidikan_terakhir_mutasi']);
$pekerjaan_mutasi = htmlspecialchars($_POST['pekerjaan_mutasi']);
$status_perkawinan_mutasi = htmlspecialchars($_POST['status_perkawinan_mutasi']);
$status_mutasi = htmlspecialchars($_POST['status_mutasi']);

$id_mutasi = htmlspecialchars($_POST['id_mutasi']);

$id_user = $_SESSION['user']['id_user'];

// update ke database
$query = "UPDATE mutasi SET
  nik_mutasi = '$nik_mutasi',
  nama_mutasi = '$nama_mutasi',
  tempat_lahir_mutasi = '$tempat_lahir_mutasi',
  tanggal_lahir_mutasi = '$tanggal_lahir_mutasi',
  jenis_kelamin_mutasi = '$jenis_kelamin_mutasi',
  alamat_ktp_mutasi = '$alamat_ktp_mutasi',
  alamat_mutasi = '$alamat_mutasi',
  desa_kelurahan_mutasi = '$desa_kelurahan_mutasi',
  kecamatan_mutasi = '$kecamatan_mutasi',
  kabupaten_kota_mutasi = '$kabupaten_kota_mutasi',
  provinsi_mutasi = '$provinsi_mutasi',
  negara_mutasi = '$negara_mutasi',
  rt_mutasi = '$rt_mutasi',
  rw_mutasi = '$rw_mutasi',
  agama_mutasi = '$agama_mutasi',
  pendidikan_terakhir_mutasi = '$pendidikan_terakhir_mutasi',
  pekerjaan_mutasi = '$pekerjaan_mutasi',
  status_perkawinan_mutasi = '$status_perkawinan_mutasi',
  status_mutasi = '$status_mutasi',
  id_user = '$id_user',
  updated_at = CURRENT_TIMESTAMP
WHERE id_mutasi = $id_mutasi";

$hasil = mysqli_query($db, $query);

// cek keberhasilan update data
if ($hasil == true) {
  echo "<script>window.alert('Data mutasi warga berhasil diubah'); window.location.href='../mutasi/'</script>";
} else {
  echo "<script>window.alert('Gagal mengubah data mutasi warga!'); window.location.href='../mutasi/create.php?id_mutasi=".$id_mutasi."'</script>";
}
