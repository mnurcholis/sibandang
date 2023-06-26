<?php
include('../config/koneksi.php');

// hitung warga
$query_warga = "SELECT COUNT(*) AS total FROM warga";
$hasil_warga = mysqli_query($db, $query_warga);
$jumlah_warga = mysqli_fetch_assoc($hasil_warga);

// hitung warga laki-laki
$query_warga_l = "SELECT COUNT(*) AS total FROM warga WHERE jenis_kelamin_warga = 'L'";
$hasil_warga_l = mysqli_query($db, $query_warga_l);
$jumlah_warga_l = mysqli_fetch_assoc($hasil_warga_l);

// hitung warga laki-laki
$query_warga_p = "SELECT COUNT(*) AS total FROM warga WHERE jenis_kelamin_warga = 'P'";
$hasil_warga_p = mysqli_query($db, $query_warga_p);
$jumlah_warga_p = mysqli_fetch_assoc($hasil_warga_p);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desa Sibandang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        :root {
            --gap: -200px;
            --circle-size: 200px;
            --circle-size-small: 130px;
            --color-1: #828f95;
            --color-2: #9da6a5;
            --color-3: #77ada7;
            --color-4: #5aafb2;
            --color-5: #39b3bb;
            --color-6: #07bec2;
        }

        body {
            font-family: "Poppins", sans-serif;
        }

        .graphic-container {
            width: 100%;
            min-height: 80vh;
            display: grid;
            place-items: center;
            margin: 100px 0;
        }

        .center-circles-container {
            display: flex;
            justify-content: center;
            align-items: center;
            grid-gap: 20px;
            height: 100%;
            width: 100%;
        }

        .single {
            gap: 20px;
        }

        .double {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .double:nth-child(even) {
            flex-direction: column-reverse;
        }

        .circle {
            width: var(--circle-size);
            height: var(--circle-size);
            background: #fff;
            border-radius: 50%;

            display: grid;
            place-items: center;
            position: relative;
        }

        .icon i {
            font-size: 3rem;
        }

        .content-container {
            position: absolute;
            max-width: 180px;
            min-width: 180px;
            width: 100%;
        }

        .content p {
            font-size: 12px;
        }

        .content-container h2 {
            position: relative;
            padding: 0 10px;
        }

        /* arrow heading border */
        .one .content-container h2::before,
        .one .content-container h2::after,
        .two .content-container h2::before,
        .two .content-container h2::after,
        .five .content-container h2::before,
        .five .content-container h2::after {
            position: absolute;
            content: "";
            width: 2px;
            height: 22px;
            background: teal;
            left: -6px;
        }

        .one .content-container h2::before,
        .two .content-container h2::before,
        .five .content-container h2::before {
            top: -2px;
            transform: rotate(30deg);
        }

        .one .content-container h2::after,
        .two .content-container h2::after,
        .five .content-container h2::after {
            bottom: -2px;
            transform: rotate(-30deg);
        }

        .three .content-container h2::before,
        .three .content-container h2::after,
        .four .content-container h2::before,
        .four .content-container h2::after,
        .six .content-container h2::before,
        .six .content-container h2::after {
            position: absolute;
            content: "";
            width: 2px;
            height: 22px;
            background: teal;
            right: -6px;
        }

        .three .content-container h2::before,
        .four .content-container h2::before,
        .six .content-container h2::before {
            top: -2px;
            transform: rotate(-30deg);
        }

        .three .content-container h2::after,
        .four .content-container h2::after,
        .six .content-container h2::after {
            bottom: -2px;
            transform: rotate(30deg);
        }

        /* different content elements */
        .two,
        .four {
            width: var(--circle-size-small);
            height: var(--circle-size-small);
        }

        .two i,
        .four i {
            color: #fff;
            font-size: 2.5rem;
        }

        .one .content-container {
            left: 0;
            bottom: var(--gap);
            text-align: left;
        }

        .two .content-container {
            left: 80px;
            bottom: var(--gap);
            text-align: left;
        }

        .three .content-container {
            right: 200px;
            top: var(--gap);
            text-align: right;
        }

        .four .content-container {
            right: 20px;
            top: var(--gap);
            text-align: right;
        }

        .five .content-container {
            left: 200px;
            bottom: var(--gap);
            text-align: left;
        }

        .six .content-container {
            left: 0;
            top: var(--gap);
            text-align: right;
        }

        /* lines */
        /* bottom layer */
        .one .line {
            position: absolute;
            width: 2px;
            height: 170px;
            background-color: var(--color-1);
            top: -150px;
            left: -30px;
        }

        .one .line::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 35px;
            height: 2px;
            background: var(--color-1);
        }

        .one .line::after,
        .two .line::after,
        .five .line::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 20px;
            height: 2px;
        }

        .one .line::after {
            background: var(--color-1);
        }

        .two .line::after {
            background: var(--color-2);
        }

        .five .line::after {
            background: var(--color-5);
        }

        .two .line {
            position: absolute;
            width: 2px;
            height: 90px;
            background-color: var(--color-2);
            top: -70px;
            left: -30px;
        }

        .five .line {
            position: absolute;
            width: 2px;
            height: 110px;
            background-color: var(--color-5);
            top: -90px;
            left: -30px;
        }

        /* top layer */
        .three .line {
            position: absolute;
            width: 2px;
            height: 222px;
            background-color: var(--color-3);
            bottom: -100px;
            right: -30px;
        }

        .three .line::after,
        .four .line::after,
        .six .line::after {
            content: "";
            position: absolute;
            right: 0;
            top: 0;
            width: 20px;
            height: 2px;
        }

        .three .line::after {
            background: var(--color-3);
        }

        .four .line::after {
            background: var(--color-4);
        }

        .six .line::after {
            background: var(--color-6);
        }

        .four .line {
            position: absolute;
            width: 2px;
            height: 222px;
            background-color: var(--color-4);
            bottom: -100px;
            right: -30px;
        }

        .four .line::before {
            content: "";
            position: absolute;
            right: 0px;
            bottom: 0;
            width: 20px;
            height: 2px;
            background: var(--color-4);
        }

        .six .line {
            position: absolute;
            width: 2px;
            height: 282px;
            background-color: var(--color-6);
            bottom: -160px;
            right: -30px;
        }

        .six .line::before {
            content: "";
            position: absolute;
            right: 0px;
            bottom: 0;
            width: 35px;
            height: 2px;
            background: var(--color-6);
        }

        /* dots */
        .one .dot {
            position: absolute;
            top: 110px;
            right: -30px;
            width: 20px;
            height: 20px;
            background: var(--color-1);
            border-radius: 50%;
            box-shadow: -20px -110px 0 6px var(--color-1), -30px 80px 0 4px var(--color-1);
        }

        .four .dot {
            position: absolute;
            top: 130px;
            left: 0px;
            width: 20px;
            height: 20px;
            background: var(--color-4);
            border-radius: 50%;
            box-shadow: -22px -138px 0 10px var(--color-4),
                -70px 70px 0 0px var(--color-4);
        }

        .six .dot {
            position: absolute;
            top: -30px;
            left: 10px;
            width: 10px;
            height: 10px;
            background: var(--color-6);
            border-radius: 50%;
            box-shadow: -50px 50px 0 25px var(--color-6),
                150px 250px 0 10px var(--color-6);
        }

        /* circle colors */
        .one {
            box-shadow: inset 0 0 0 20px var(--color-1), inset 0px 0px 12px 20px #989898;
        }

        .two {
            background-color: var(--color-2);
            transform: translateX(-20px);
        }

        .three {
            box-shadow: inset 0 0 0 20px var(--color-3), inset 0px 0px 12px 20px #989898;
            transform: translateX(10px);
        }

        .four {
            background-color: var(--color-4);
            transform: translateX(-20px);
        }

        .five {
            box-shadow: inset 0 0 0 20px var(--color-5), inset 0px 0px 12px 20px #989898;
            transform: translateX(10px);
        }

        .six {
            box-shadow: inset 0 0 0 20px var(--color-6), inset 0px 0px 12px 20px #989898;
        }

        /* h2 border colors */
        .one .content-container h2 {
            border-top: 2px solid var(--color-1);
            border-bottom: 2px solid var(--color-1);
        }

        .two .content-container h2 {
            border-top: 2px solid var(--color-2);
            border-bottom: 2px solid var(--color-2);
        }

        .three .content-container h2 {
            border-top: 2px solid var(--color-3);
            border-bottom: 2px solid var(--color-3);
        }

        .four .content-container h2 {
            border-top: 2px solid var(--color-4);
            border-bottom: 2px solid var(--color-4);
        }

        .five .content-container h2 {
            border-top: 2px solid var(--color-5);
            border-bottom: 2px solid var(--color-5);
        }

        .six .content-container h2 {
            border-top: 2px solid var(--color-6);
            border-bottom: 2px solid var(--color-6);
        }

        .one .content-container h2::before,
        .one .content-container h2::after {
            background: var(--color-1);
        }

        .two .content-container h2::before,
        .two .content-container h2::after {
            background: var(--color-2);
        }

        .five .content-container h2::before,
        .five .content-container h2::after {
            background: var(--color-5);
        }

        .three .content-container h2::before,
        .three .content-container h2::after {
            background: var(--color-3);
        }

        .four .content-container h2::before,
        .four .content-container h2::after {
            background: var(--color-4);
        }

        .six .content-container h2::before,
        .six .content-container h2::after {
            background: var(--color-6);
        }

        /* media */
        @media (max-width: 992px) {
            .graphic-container {
                margin: 50px 0;
            }

            .center-circles-container {
                overflow: hidden;
                overflow-x: scroll;
                width: 1300px;
            }

            .double {
                flex-direction: row;
            }

            .double:nth-child(even) {
                flex-direction: row;
            }

            .two {
                transform: translateX(0px);
            }

            .three {
                transform: translateX(0px);
            }

            .four {
                transform: translateX(0px);
            }

            .five {
                transform: translateX(0px);
            }
        }
    </style>
</head>

<body style="background-image: url('../bg2.jpeg');">

    <?php include "navbar.php"; ?>
    <br><br><br>


    <div class="container">
        <center>
            <h3>Grafik Penduduk Desa Sibandang </h3>
            <br>
        </center>
        <div style="padding:0px 300px 100px 300px;">
            <canvas id="myChart"></canvas>
        </div>
        <br><br>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var ctx = document.getElementById('myChart');
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Laki-Laki', 'Perempuan', 'Total'],
                    datasets: [{
                        label: '# Jumlah Penduduk',
                        data: [480, 529, 1009],
                        backgroundColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    </div>


    <footer class="footer bg-white w-100" style="position:fixed;bottom:0;width:100%;">
        <div class="container">
            <footer class="d-flex justify-content-between py-3 my-4 border-top">
                <p class=" mb-0 text-muted">Copyright @Lasmita Siregar | Universitas Methodist Indonesia</p>

                <div>

                </div>
            </footer>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>