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
		echo "<script>window.alert('File sudah ada!'); window.location.href='../kuliner/create.php'</script>";
	} else {
		move_uploaded_file($_FILES["file"]["tmp_name"], "../../assets/kuliner/upload/" . $newfilename);

		// ambil data dari form
		$gambar_kuliner = $newfilename;
		$judul_kuliner = htmlspecialchars($_POST['judul_kuliner']);
		$slug_kuliner = htmlspecialchars($_POST['slug_kuliner']);
		$detail_kuliner = htmlspecialchars($_POST['detail_kuliner']);
		$harga = htmlspecialchars($_POST['harga']);
		$no_wa = htmlspecialchars($_POST['no_wa']);

		$user_id = $_SESSION['user']['id_user'];

		// query
		$query = "INSERT INTO `kuliner`
		(`gambar_kuliner`, `slug_kuliner`, `harga`, `no_wa`, `judul_kuliner`,`detail_kuliner`) VALUES 
		('$gambar_kuliner', '$slug_kuliner', '$harga', '$no_wa', '$judul_kuliner', '$detail_kuliner');";

		$hasil = mysqli_query($db, $query);

		// cek keberhasilan pendambahan data
		if ($hasil == true) {
			echo "<script>window.alert('Tambah Kuliner berhasil'); window.location.href='../kuliner'</script>";
		} else {
			echo "<script>window.alert('Tambah Kuliner gagal!'); window.location.href='../kuliner'</script>";
		}
	}
} elseif (empty($file_basename)) {
	// file belum dipilih
	echo "<script>window.alert('Pilih file untuk diunggah'); window.location.href='../kuliner/create.php'</script>";
} elseif ($filesize > 2000000) {
	// ukuran file terlalu besar
	echo "<script>window.alert('File yang diunggah terlalu besar!'); window.location.href='../kuliner/create.php'</script>";
} else {
	// format file bukan gambar
	echo "<script>window.alert('Format file salah'); window.location.href='../kuliner/create.php'</script>";
	unlink($_FILES["file"]["tmp_name"]);
}
