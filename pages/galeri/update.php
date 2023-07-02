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
    $id_galeri = htmlspecialchars($_POST['id']);
    $judul_galeri = htmlspecialchars($_POST['judul_galeri']);
    $caption_galeri = htmlspecialchars($_POST['caption_galeri']);
    $tautan_galeri = htmlspecialchars($_POST['tautan_galeri']);

    $id_user = $_SESSION['user']['id_user'];

    // query
    $query = "UPDATE `galeri` SET `caption_galeri` = '$caption_galeri', `tautan_galeri` = '$tautan_galeri', `id_user` = '$id_user', `judul_galeri` = '$judul_galeri' WHERE id_galeri = '$id_galeri'";

    $hasil = mysqli_query($db, $query);

    // cek keberhasilan pendambahan data
    if ($hasil == true) {
        echo "<script>window.alert('Ubah galeri berhasil'); window.location.href='../galeri'</script>";
    } else {
        echo "<script>window.alert('Ubah galeri gagal!'); window.location.href='../galeri'</script>";
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
        if (file_exists("../../assets/upload/" . $newfilename)) {
            // Jika file sudah ada
            echo "<script>window.alert('File sudah ada!'); window.location.href='../galeri/create.php'</script>";
        } else {
            move_uploaded_file($_FILES["file"]["tmp_name"], "../../assets/upload/" . $newfilename);
            $file_lama = htmlspecialchars($_POST['path_galeri']);
            unlink("../../assets/upload/" . $file_lama);
            // ambil data dari form
            $path_galeri = $newfilename;
            $id_galeri = htmlspecialchars($_POST['id']);
            $judul_galeri = htmlspecialchars($_POST['judul_galeri']);
            $caption_galeri = htmlspecialchars($_POST['caption_galeri']);
            $tautan_galeri = htmlspecialchars($_POST['tautan_galeri']);

            $id_user = $_SESSION['user']['id_user'];

            // query
            $query = "UPDATE `galeri` SET  `path_galeri` =  '$path_galeri', `caption_galeri` = '$caption_galeri', `tautan_galeri` = '$tautan_galeri', `id_user` = '$id_user', `judul_galeri` = '$judul_galeri' WHERE id_galeri = '$id_galeri'";

            $hasil = mysqli_query($db, $query);

            // cek keberhasilan pendambahan data
            if ($hasil == true) {
                echo "<script>window.alert('Ubah galeri berhasil'); window.location.href='../galeri'</script>";
            } else {
                echo "<script>window.alert('Ubah galeri gagal!'); window.location.href='../galeri'</script>";
            }
        }
    } elseif (empty($file_basename)) {
        // file belum dipilih
        echo "<script>window.alert('Pilih file untuk diunggah'); window.location.href='../galeri/create.php'</script>";
    } elseif ($filesize > 2000000) {
        // ukuran file terlalu besar
        echo "<script>window.alert('File yang diunggah terlalu besar!'); window.location.href='../galeri/create.php'</script>";
    } else {
        // format file bukan gambar
        echo "<script>window.alert('Format file salah'); window.location.href='../galeri/create.php'</script>";
        unlink($_FILES["file"]["tmp_name"]);
    }
}
