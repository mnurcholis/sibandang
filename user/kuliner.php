<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desa Sibandang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .whatsapp-button {
            display: inline-block;
            background-color: green;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>

<body style="background-image: url('../bg2.jpeg');">

    <?php include "navbar.php"; ?>
    <?php
    include('../config/koneksi.php');

    // ambil dari database
    $query = "SELECT * FROM kuliner";

    $hasil = mysqli_query($db, $query);

    $data_kuliner = array();

    while ($row = mysqli_fetch_assoc($hasil)) {
        $data_kuliner[] = $row;
    }

    ?>
    <div class="container my-5">
        <h3 class="my-3 text-center">
            Desa Sibandang
            Kecamatan Muara, Kabupaten Tapanuli Utara
        </h3>
        <h3 class="my-3 text-center">
            Menu Kuliner
        </h3>
        <div class="row justify-content-start">
            <?php foreach ($data_kuliner as $kuliner) : ?>
                <div class="col-4 mb-3">
                    <div class="card">
                        <img src="../assets/kuliner/upload/<?= $kuliner['gambar_kuliner'] ?>" alt="<?= $kuliner['judul_kuliner'] ?>" class="img-fluid w-2000 mb-150 equal-image img-responsive" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-text"><?= $kuliner['judul_kuliner'] ?></h5>
                            <p><i class="fa fa-tags" aria-hidden="true"></i> <?= $kuliner['harga'] ?></p>
                            <p><a class="btn btn-info" href="detail-kuliner.php?id_kuliner=<?= $kuliner['id_kuliner'] ?>"> Detail Prodak</a></p>
                            <button class="whatsapp-button btn btn-sm" onclick="myFunction('<?= $kuliner['judul_kuliner'] ?>','<?= $kuliner['no_wa'] ?>')">
                                <i class="fab fa-whatsapp"></i> Hubungi Penjual
                            </button>
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

    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script>
        function myFunction(judul, nomor) {
            // Define the WhatsApp number and message
            var phoneNumber = '+62' + nomor; // Get the WhatsApp number from the hidden input field
            var message = 'Hello! Aku Mau Pesan ' + judul; // Include the value from the hidden input field in the message

            // Create the WhatsApp URL
            var whatsappUrl = 'https://api.whatsapp.com/send?phone=' + phoneNumber + '&text=' + encodeURIComponent(message);

            // Open the WhatsApp URL in a new tab or window
            window.open(whatsappUrl);
        }
    </script>
</body>

</html>