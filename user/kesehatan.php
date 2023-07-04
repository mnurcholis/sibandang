<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desa Sibandang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <style>
        html,
        body {
            margin: 0;
        }

        .leaflet-container {
            height: 100vh;
            /* Set the height to 100% of the viewport height */
            width: 100%;
            /* Set the width to 100% */
            max-height: none;
            /* Remove the max-height property */
        }
    </style>
</head>

<body style="background-image: url('../bg2.jpeg');">

    <?php include "navbar.php"; ?>

    <div class="container mt-5">
        <center>
            <h4 class="my-3">Puskesmas Pembantu Desa Sibandang</h4>
        </center>
        <div class="row">
            <div class="col xl-9 col-lg-12 col-md-12 col-sm-12">
                <div class="card p-3">
                <img src="img/IMG_7118.jpeg" alt="" class="img-fluid w-2000 mb-150 equal-image img-responsive" class="card-img-top">
                    <ul class="nav nav-pills mb-3 mt-2" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Ringkasan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Tentang</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td> Desa Sibandang, Kec. Muara, Kabupaten Tapanuli Utara, Sumatera Utara 22476/td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td>Fasilitas</td>
                                        <td>:</td>
                                        <td>Toilet</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td>Perencanaan</td>
                                        <td>:</td>
                                        <td>Menerima pasien baru</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <br><br><br><br><br><br><br><br><br>
    <footer class="footer bg-white w-100" style="position:fixed;bottom:0;width:100%;">
        <div class="container">
            <footer class="d-flex justify-content-between py-3 my-4 border-top">
                <p class=" mb-0 text-muted">Copyright @Lasmita Siregar | Universitas Methodist Indonesia</p>

                <div>

                </div>
            </footer>
        </div>
    </footer>
</body>

</html>