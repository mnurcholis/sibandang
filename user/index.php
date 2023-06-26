<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desa Sibandang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/348c676099.js" crossorigin="anonymous"></script>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Verdana, sans-serif;
        }

        .mySlides {
            display: none;
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {

            position: relative;
            margin: auto;
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px
            }
        }
    </style>

<body>

    <div style="display: flex;padding:10px 30px;background-color:royalblue;">
        <div style="margin-top: 10px;">
            <h3 class="text-white">
                Sistem Informasi Desa Sibandang
            </h3>
        </div>
    </div>

    <?php include "navbar.php"; ?>

    <div class="mt-5 d-flex flex-column justify-content-center">
        <br>
        <center>
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="numbertext">1 / 2</div>
                    <img src="../bg.jpeg" style="width:100%; object-fit: cover; height: 50vh;">
                    <div class="text">Caption Text</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 2</div>
                    <img src="../bg3.jpeg" style="width:100%; object-fit: cover; height: 50vh;">
                    <div class="text">Caption Two</div>
                </div>

            </div>
            <br>

            <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>

            </div>



        </center>
        <br>
        <center>
            <img src="../pages/galeri/img/a5.jpeg" width="250" alt="">
            <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15945.738176212744!2d98.89268123889849!3d2.359894511912689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e1eb62d02645f%3A0xb03c619e591d46fa!2sSibandang%2C%20Kec.%20Muara%2C%20Kabupaten%20Tapanuli%20Utara%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1683703831216!5m2!1sid!2sid" class="w-50" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </center>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
</body>

</html>