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

    // ambil dari database
    $query = "SELECT * FROM berita";

    $hasil = mysqli_query($db, $query);

    $data_berita = array();

    while ($row = mysqli_fetch_assoc($hasil)) {
        $data_berita[] = $row;
    }

    ?>
    <div class="container my-5">
        <h3 class="my-3">
            Berita Desa Sibandang
            Kecamatan Muara, Kabupaten Tapanuli Utara
        </h3>
        <div class="row justify-content-start">
            <?php foreach ($data_berita as $berita) : ?>
                <div class="col-4 mb-3">
                    <div class="card">
                        <img src="../assets/upload/<?= $berita['gambar_berita'] ?>" alt="<?= $berita['judul_berita'] ?>" class="img-fluid w-2000 mb-150 equal-image img-responsive" class="card-img-top">
                        <div class="card-body">
                            <a href="detail-berita.php?id_berita=<?= $berita['id_berita'] ?>" class="card-text"><?= $berita['judul_berita'] ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

        <style>
            .equal-image {
                height: auto;
                max-height: 200px;
                /* Adjust the max-height value as needed */
                object-fit: cover;
                /* Ensure the image maintains its aspect ratio and covers the container */
            }
        </style>


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