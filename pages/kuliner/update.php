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
    $id_kuliner = htmlspecialchars($_POST['id']);
    $judul_kuliner = htmlspecialchars($_POST['judul_kuliner']);
    $slug_kuliner = htmlspecialchars($_POST['slug_kuliner']);
    $detail_kuliner = htmlspecialchars($_POST['detail_kuliner']);
    $harga = htmlspecialchars($_POST['harga']);
    $no_wa = htmlspecialchars($_POST['no_wa']);

    // query
    $query = "UPDATE `kuliner` SET `slug_kuliner` = '$slug_kuliner', `detail_kuliner` = '$detail_kuliner', `harga` = '$harga', `no_wa` = '$no_wa', `judul_kuliner` = '$judul_kuliner' WHERE id_kuliner = '$id_kuliner'";

    $hasil = mysqli_query($db, $query);

    // cek keberhasilan pendambahan data
    if ($hasil == true) {
        echo "<script>window.alert('Ubah kuliner berhasil'); window.location.href='../kuliner'</script>";
    } else {
        echo "<script>window.alert('Ubah kuliner gagal!'); window.location.href='../kuliner'</script>";
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
        if (file_exists("../../assets/kuliner/upload/" . $newfilename)) {
            // Jika file sudah ada
            echo "<script>window.alert('File sudah ada!'); window.location.href='../kuliner/ubah.php?id_kuliner=" . $_POST['id'] . "'</script>";
        } else {
            move_uploaded_file($_FILES["file"]["tmp_name"], "../../assets/kuliner/upload/" . $newfilename);
            $file_lama = htmlspecialchars($_POST['gambar_kuliner']);
            unlink("../../assets/kuliner/upload/" . $file_lama);
            // ambil data dari form
            $gambar_kuliner = $newfilename;
            $id_kuliner = htmlspecialchars($_POST['id']);
            $judul_kuliner = htmlspecialchars($_POST['judul_kuliner']);
            $slug_kuliner = htmlspecialchars($_POST['slug_kuliner']);
            $detail_kuliner = htmlspecialchars($_POST['detail_kuliner']);
            $harga = htmlspecialchars($_POST['harga']);
            $no_wa = htmlspecialchars($_POST['no_wa']);

            $id_user = $_SESSION['user']['id_user'];

            // query
            $query = "UPDATE `kuliner` SET  `gambar_kuliner` =  '$gambar_kuliner', `slug_kuliner` = '$slug_kuliner', `detail_kuliner` = '$detail_kuliner', `harga` = '$harga', `no_wa` = '$no_wa', `judul_kuliner` = '$judul_kuliner' WHERE id_kuliner = '$id_kuliner'";

            $hasil = mysqli_query($db, $query);

            // cek keberhasilan pendambahan data
            if ($hasil == true) {
                echo "<script>window.alert('Ubah kuliner berhasil'); window.location.href='../kuliner'</script>";
            } else {
                echo "<script>window.alert('Ubah kuliner gagal!'); window.location.href='../kuliner'</script>";
            }
        }
    } elseif (empty($file_basename)) {
        // file belum dipilih
        echo "<script>window.alert('Pilih file untuk diunggah'); window.location.href='../kuliner/ubah.php?id_kuliner=" . $_POST['id'] . "'</script>";
    } elseif ($filesize > 2000000) {
        // ukuran file terlalu besar
        echo "<script>window.alert('File yang diunggah terlalu besar!'); window.location.href='../kuliner/ubah.php?id_kuliner=" . $_POST['id'] . "'</script>";
    } else {
        // format file bukan gambar
        echo "<script>window.alert('Format file salah'); window.location.href='../kuliner/ubah.php?id_kuliner=" . $_POST['id'] . "'</script>";
        unlink($_FILES["file"]["tmp_name"]);
    }
}
