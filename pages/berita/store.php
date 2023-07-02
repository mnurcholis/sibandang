<?php
session_start();
if (!isset($_SESSION['user'])) {
	// jika user belum login
	header('Location: ../login');
	exit();
}

include('../../config/koneksi.php');

// ambil data file
$filename = $_FILES["file"]["name"];
$file_basename = substr($filename, 0, strripos($filename, '.'));
$file_ext = substr($filename, strripos($filename, '.'));
$filesize = $_FILES["file"]["size"];
$allowed_file_types = array('.jpg', '.jpeg', '.png', '.gif', '.bmp', '.svg', '.webp');

if (in_array($file_ext, $allowed_file_types)) {
	// Ubah nama file
	$newfilename = md5($file_basename) . $file_ext;
	if (file_exists("../../assets/upload/" . $newfilename)) {
		// Jika file sudah ada
		echo "<script>window.alert('File sudah ada!'); window.location.href='../berita/create.php'</script>";
	} else {
		move_uploaded_file($_FILES["file"]["tmp_name"], "../../assets/berita/upload/" . $newfilename);

		// ambil data dari form
		$gambar_berita = $newfilename;
		$judul_berita = htmlspecialchars($_POST['judul_berita']);
		$slug_berita = htmlspecialchars($_POST['slug_berita']);
		$isi_berita = htmlspecialchars($_POST['isi_berita']);

		$user_id = $_SESSION['user']['id_user'];
		//waktu
		date_default_timezone_set('Asia/Jakarta');
		$currentDateTime = date('Y-m-d H:i:s');

		// query
		$query = "INSERT INTO `berita` (`gambar_berita`, `slug_berita`, `user_id`, `judul_berita`, `waktu_berita`,`isi_berita`) VALUES ('$gambar_berita', '$slug_berita', '$user_id', '$judul_berita', '$currentDateTime', '$isi_berita');";

		$hasil = mysqli_query($db, $query);

		// cek keberhasilan pendambahan data
		if ($hasil == true) {
			echo "<script>window.alert('Tambah Berita berhasil'); window.location.href='../berita'</script>";
		} else {
			echo "<script>window.alert('Tambah Berita gagal!'); window.location.href='../berita'</script>";
		}
	}
} elseif (empty($file_basename)) {
	// file belum dipilih
	echo "<script>window.alert('Pilih file untuk diunggah'); window.location.href='../berita/create.php'</script>";
} elseif ($filesize > 2000000) {
	// ukuran file terlalu besar
	echo "<script>window.alert('File yang diunggah terlalu besar!'); window.location.href='../berita/create.php'</script>";
} else {
	// format file bukan gambar
	echo "<script>window.alert('Format file salah'); window.location.href='../berita/create.php'</script>";
	unlink($_FILES["file"]["tmp_name"]);
}
