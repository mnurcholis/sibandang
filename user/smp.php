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
            <h4 class="my-3">SMP NEGERI 4 MUARA</h4>
        </center>
        <div class="row">
            <div class="col xl-9 col-lg-12 col-md-12 col-sm-12">
                <div class="card p-3">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Identitas Satuan Pendidikan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Dokumen dan Perijinan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Sarana dan Prasarana</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="pill" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Kontak</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="pill" data-bs-target="#mapa" type="button" role="tab" aria-controls="mapa" aria-selected="false">Peta</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td>Nama</td>
                                        <td>:</td>
                                        <td>SMP NEGERI 4 MUARA</td>
                                    </tr>
                                    <!-- edit 20200602 -->
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>NPSN</td>
                                        <td>:</td>
                                        <td>
                                            <a class="link1" target="_blank" href="https://sekolah.data.kemdikbud.go.id/index.php/Chome/profil/B02107DA-2EF5-E011-90BE-6B0450F3EF9E">10206145</a>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td>Jl Lingkar Pulau Sibandang</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Desa/Kelurahan</td>
                                        <td>:</td>
                                        <td>SIBANDANG</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Kecamatan/Kota (LN)</td>
                                        <td>:</td>
                                        <td>KEC. MUARA</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Kab.-Kota/Negara (LN)</td>
                                        <td>:</td>
                                        <td>KAB. TAPANULI UTARA</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Propinsi/Luar Negeri (LN)</td>
                                        <td>:</td>
                                        <td>PROV. SUMATERA UTARA</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Status Sekolah</td>
                                        <td>:</td>
                                        <td>NEGERI</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Bentuk Pendidikan</td>
                                        <td>:</td>
                                        <td>SMP</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td>Kementerian Pembina</td>
                                        <td>:</td>
                                        <td>Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td>Naungan</td>
                                        <td>:</td>
                                        <td>Pemerintah Daerah</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td>NPYP</td>
                                        <td>:</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>No. SK. Pendirian</td>
                                        <td>:</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Tanggal SK. Pendirian</td>
                                        <td>:</td>
                                        <td>15-07-2002</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Nomor SK Operasional</td>
                                        <td>:</td>
                                        <td>421/199/DPN/2003</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Tanggal SK Operasional</td>
                                        <td>:</td>
                                        <td>11-09-2002</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>File SK Operasional</td>
                                        <td>:</td>
                                        <td> <a class="link2" target="_blank" href="https://vervalsp.data.kemdikbud.go.id">Silakan Upload SK (link file tidak valid)</a> =&gt; [497877-122266--]
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Tanggal Upload SK Op.</td>
                                        <td>:</td>
                                        <td> 2021-08-22 11:51:39.243 </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Akreditasi</td>
                                        <td>:</td>
                                        <td>B</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td>Luas Tanah</td>
                                        <td>:</td>
                                        <td>3.600 m<sup>2</sup></td>
                                    </tr>
                                    <!-- edit 20200602 -->
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Akses Internet</td>
                                        <td>:</td>
                                        <td>1. Telkomsel Flash</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>:</td>
                                        <td>2. -</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Sumber Listrik</td>
                                        <td>:</td>
                                        <td>PLN</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td>Fax</td>
                                        <td>:</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                        <td>Telepon</td>
                                        <td>:</td>
                                        <td></td>
                                    </tr>
                                    <!-- edit 20200602 -->
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td>smpnegeri4muara@yahoo.co.id</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Website</td>
                                        <td>:</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="mapa" role="tabpanel" aria-labelledby="mapa-tab" tabindex="0">
                            <?php include "maps_smp.php"; ?>
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