<?php
session_start();
if (!isset($_SESSION['user'])) {
    // jika user belum login
    header('Location: ../login');
    exit();
}

include('../../config/koneksi.php');

// ambil data file
if ($_FILES['file']['name'] == "") {
    $id_berita = htmlspecialchars($_POST['id']);
    $judul_berita = htmlspecialchars($_POST['judul_berita']);
    $slug_berita = htmlspecialchars($_POST['slug_berita']);
    $isi_berita = htmlspecialchars($_POST['isi_berita']);

    $id_user = $_SESSION['user']['id_user'];

    // query
    $query = "UPDATE `berita` SET `slug_berita` = '$slug_berita', `isi_berita` = '$isi_berita', `user_id` = '$id_user', `judul_berita` = '$judul_berita' WHERE id_berita = '$id_berita'";

    $hasil = mysqli_query($db, $query);

    // cek keberhasilan pendambahan data
    if ($hasil == true) {
        echo "<script>window.alert('Ubah berita berhasil'); window.location.href='../berita'</script>";
    } else {
        echo "<script>window.alert('Ubah berita gagal!'); window.location.href='../berita'</script>";
    }
} else {
    $filename = $_FILES["file"]["name"];
    $file_basename = substr($filename, 0, strripos($filename, '.'));
    $file_ext = substr($filename, strripos($filename, '.'));
    $filesize = $_FILES["file"]["size"];
    $allowed_file_types = array('.jpg', '.jpeg', '.png', '.gif', '.bmp', '.svg', '.webp');

    if (in_array($file_ext, $allowed_file_types)) {
        // Ubah nama file
        $newfilename = md5($file_basename) . $file_ext;
        if (file_exists("../../assets/berita/upload/" . $newfilename)) {
            // Jika file sudah ada
            echo "<script>window.alert('File sudah ada!'); window.location.href='../berita/ubah.php?id_berita=" . $_POST['id'] . "'</script>";
        } else {
            move_uploaded_file($_FILES["file"]["tmp_name"], "../../assets/berita/upload/" . $newfilename);
            $file_lama = htmlspecialchars($_POST['gambar_berita']);
            unlink("../../assets/berita/upload/" . $file_lama);
            // ambil data dari form
            $gambar_berita = $newfilename;
            $id_berita = htmlspecialchars($_POST['id']);
            $judul_berita = htmlspecialchars($_POST['judul_berita']);
            $isi_berita = htmlspecialchars($_POST['isi_berita']);
            $slug_berita = htmlspecialchars($_POST['slug_berita']);

            $id_user = $_SESSION['user']['id_user'];

            // query
            $query = "UPDATE `berita` SET  `gambar_berita` =  '$gambar_berita', `isi_berita` = '$isi_berita', `slug_berita` = '$slug_berita', `user_id` = '$id_user', `judul_berita` = '$judul_berita', `isi_berita` = '$isi_berita' WHERE id_berita = '$id_berita'";

            $hasil = mysqli_query($db, $query);

            // cek keberhasilan pendambahan data
            if ($hasil == true) {
                echo "<script>window.alert('Ubah berita berhasil'); window.location.href='../berita'</script>";
            } else {
                echo "<script>window.alert('Ubah berita gagal!'); window.location.href='../berita'</script>";
            }
        }
    } elseif (empty($file_basename)) {
        // file belum dipilih
        echo "<script>window.alert('Pilih file untuk diunggah'); window.location.href='../berita/ubah.php?id_berita=" . $_POST['id'] . "'</script>";
    } elseif ($filesize > 2000000) {
        // ukuran file terlalu besar
        echo "<script>window.alert('File yang diunggah terlalu besar!'); window.location.href='../berita/ubah.php?id_berita=" . $_POST['id'] . "'</script>";
    } else {
        // format file bukan gambar
        echo "<script>window.alert('Format file salah'); window.location.href='../berita/ubah.php?id_berita=" . $_POST['id'] . "'</script>";
        unlink($_FILES["file"]["tmp_name"]);
    }
}
