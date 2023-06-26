<?php include('../_partials/top.php') ?>

<h1 class="page-header">Tambah Surat Pengajuan</h1>
<?php
include('../../config/koneksi.php');

// Cek apakah form telah disubmit
if (isset($_POST['add'])) {

    // Ambil data dari form
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $nohp = $_POST['nohp'];
    $jenis = $_POST['jenis'];

    // ambil data file
    $namaFile = $_FILES['fileToUpload']['name'];
    $namaSementara = $_FILES['fileToUpload']['tmp_name'];

    // Generate a new unique file name
    $namaFileBaru = uniqid() . '_' . $namaFile;

    // tentukan lokasi file akan dipindahkan
    $dirUpload = "../../user/uploads/";

    // pindahkan file dan beri nama baru
    $terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFileBaru);

    if ($terupload) {
        // Query untuk menambahkan data ke database
        $sql = "INSERT INTO permohonan_surat (nik, nama, nohp, jenis, status, file_lampiran) VALUES ('$nik', '$nama', '$nohp', '$jenis', 'pending', '$namaFileBaru')";

        if (mysqli_query($db, $sql)) {
            // Jika data berhasil ditambahkan, tampilkan SweetAlert
            echo '<script>
    Swal.fire({
        icon: "success",
        title: "Surat telah terkirim",
        showConfirmButton: false,
        timer: 5000
    }).then(function() {
        window.location.href = "surat.php";
    });
</script>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }
    } else {
        echo "Error uploading file.";
    }

    // Tutup koneksi
    mysqli_close($db);
}
?>
<div class="panel panel-default">
    <div class="panel-body">
        <form action="" method="post" class="card p-3 border-0 shadow-lg" enctype="multipart/form-data">
            <div class="my-3">
                <div class="container-fluid">
                    <div class="row mb-3 justify-content-center">
                        <div class="col">
                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="nik" name="nik" placeholder="Silahkan Masukkan NIK anda" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Silahkan Masukkan Nama Lengkap Anda" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <div class="col">
                            <div class="mb-3">
                                <label for="nohp" class="form-label">Nomor Whatsapp <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="nohp" name="nohp" placeholder="Silahkan Masukkan Nomor Whatsapp anda" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Pilih Jenis Surat Permohonan<span class="text-danger">*</span></label>
                                <select class="form-control" id="jenis" name="jenis" required>
                                    <option value="" hidden>Pilih</option>
                                    <option value="KTP">KTP</option>
                                    <option value="KK">KK</option>
                                    <option value="Kelahiran">Kelahiran</option>
                                    <option value="Kematian">Kematian</option>
                                    <option value="Pindah">Pindah</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <div class="col">
                            <div class="mb-3">
                                <label for="nohp" class="form-label">File Berkas Lampiran <span class="text-danger">*File PDF</span></label>
                                <input class="form-control" type="file" name="fileToUpload" id="fileToUpload" accept="application/pdf" required>
                            </div>
                        </div>
                    </div>
                    <br>
                    <button type="submit" name="add" class="btn btn-info w-100 rounded-pill text-white shadow-lg">
                        Kirim Permohonan
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>