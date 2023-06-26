<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desa Sibandang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap5.min.css">
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

        // Query untuk menambahkan data ke database
        $sql = "INSERT INTO permohonan_surat (nik, nama, nohp, jenis, status ) VALUES ('$nik', '$nama', '$nohp', '$jenis','pending')";

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

        // Tutup koneksi
        mysqli_close($db);
    }
    ?>


    <div class="container my-3">
        <h1 class="text-center mb-3">
            Informasi Permohonan Surat<br>
            <font size="6">Desa Sibandang
                Kecamatan Muara, Kabupaten Tapanuli Utara</font><br>
        </h1>

        <div class="card p-3">
            <table id="dataTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>No HP</th>
                        <th>Jenis</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Koneksi ke database
                    $host = 'localhost';
                    $username = 'root';
                    $password = '';
                    $database = 'db_warga';

                    $conn = new mysqli($host, $username, $password, $database);
                    if ($conn->connect_error) {
                        die('Connection failed: ' . $conn->connect_error);
                    }

                    // Mengambil data dari database
                    $query = "SELECT `id`, `nik`, `nama`, `nohp`, `jenis`, `status` FROM `permohonan_surat`";
                    $result = $conn->query($query);

                    // Menampilkan data dalam tabel
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['nik'] . "</td>";
                            echo "<td>" . $row['nama'] . "</td>";
                            echo "<td>" . $row['nohp'] . "</td>";
                            echo "<td>" . $row['jenis'] . "</td>";
                            echo "<td>" . $row['status'] . "</td>";
                            echo "</tr>";
                        }
                    }

                    // Menutup koneksi
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>



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
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                // Configuration options
            });
        });
    </script>
</body>

</html>