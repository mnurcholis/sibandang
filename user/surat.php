<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desa Sibandang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body style="background-image: url('../bg2.jpeg');">

    <?php include "navbar.php"; ?>

    <!-- Insert -->
    <?php
    include('../config/koneksi.php');

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
        $dirUpload = "uploads/";

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


    <div class="container my-3">
        <h1 class="text-center mb-3">
            Layanan Surat<br>
            <font size="6">Desa Sibandang
                Kecamatan Muara, Kabupaten Tapanuli Utara</font><br>
        </h1>

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


    <br><br><br><br><br><br><br><br><br>
    <footer class="footer bg-white w-100" style="position:fixed;bottom:0;width:100%;">
        <div class="container">
            <footer class="d-flex justify-content-between py-3 my-4 border-top">
                <p class=" mb-0 text-muted">Desa Sibandang | Universitas Methodist Indonesia</p>

                <div>
                    <a href="" class="mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">

                    </a>
                </div>
            </footer>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>