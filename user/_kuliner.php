<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desa Sibandang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .square-image {
            width: 100%;
            padding-bottom: 80%;
            position: relative;
            overflow: hidden;
        }

        .square-image img {
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 80%;
            top: 0;
            left: 0;
        }
    </style>
</head>

<body style="background-image: url('../bg2.jpeg');">
    <!-- Navigation Bar -->
    <?php include "navbar.php"; ?>


    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <!-- Navbar content -->
    </nav>

    <div class="container mt-5">
        <h3 class="my-3 text-center">
            Desa Sibandang
            Kecamatan Muara, Kabupaten Tapanuli Utara
        </h3>
        <div class="card p-3 shadow-lg">
            <h3 class="text-center mb-5 mt-3">Menu Kuliner</h3>

            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Hubungi No WhatsApp</h5>
                            <p class="card-text">
                                <a href="https://wa.me/6282276619604" class="btn btn-primary">Hubungi Sekarang</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-6">
                            <div class="card mb-3">
                                <div class="square-image">
                                    <img src="img/1.png" class="card-img-top" alt="Naniura">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Naniura</h5>
                                    <p class="card-text">85000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card mb-3">
                                <div class="square-image">
                                    <img src="img/2.png" class="card-img-top" alt="Natinombur">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Natinombur</h5>
                                    <p class="card-text">80000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="card mb-3">
                                <div class="square-image">
                                    <img src="img/3.png" class="card-img-top" alt="Arsik">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Arsik</h5>
                                    <p class="card-text">100000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card mb-3">
                                <div class="square-image">
                                    <img src="img/4.jpeg" class="card-img-top" alt="Aneka Jus">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Aneka Jus</h5>
                                    <p class="card-text">50000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer bg-white w-100" style="position:fixed;bottom:0;width:100%;">
        <!-- Footer content -->
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>