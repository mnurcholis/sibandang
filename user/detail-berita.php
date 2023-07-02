<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desa Sibandang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body style="background-image: url('../bg2.jpeg');">

    <?php include "navbar.php"; ?>
    <?php
    include('../config/koneksi.php');

    $get_id_berita = $_GET['id_berita'];

    // ambil dari database
    $query = "SELECT * FROM berita WHERE id_berita = $get_id_berita";

    $hasil = mysqli_query($db, $query);

    $berita = array();

    while ($row = mysqli_fetch_assoc($hasil)) {
        $berita[] = $row;
    }

    ?>
    <div class="container my-5">
        <h3 class="my-3">
            <?= $berita[0]['judul_berita'] ?>
        </h3>
        <div class="row justify-content-start">
            <div class="col-12 mb-3">
                <div class="card">
                    <img src="../assets/upload/<?= $berita[0]['gambar_berita'] ?>" alt="<?= $berita[0]['judul_berita'] ?>" class="img-fluid w-2000 mb-150 equal-image img-responsive" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text"><?= $berita[0]['isi_berita'] ?></p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <br><br>
    <footer class="footer bg-white w-100" style="position:fixed;bottom:0;width:100%;">
        <div class="container">
            <footer class="d-flex justify-content-between py-3 my-4 border-top">
                <p class=" mb-0 text-muted">Copyright @Lasmita Siregar | Universitas Methodist Indonesia</p>

                <div>

                </div>
            </footer>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>